<?php

class CalculateAverageRating{

	function calculateAverageRating($bean, $event, $args){
		$smiley_points = array(
			"128578" => 5,// for happy
			"128528" => 3, // for neutral
			"128545" => 1 // for angry
		);
		$dataChanges = $bean->db->getDataChanges($bean);
		$smiley_change = $dataChanges['icc_smiley'];
		//first time average rating calculation (no value in audit log)
		if(empty($args['isUpdate']) && !empty($bean->icc_smiley)){
			$rating = $smiley_points[$bean->icc_smiley];
			$bean->icc_average_rating = $rating;
		} // if user change dropdwon value from none to any smiley
		elseif(!empty($bean->icc_smiley) && empty($smiley_change['before'])){
			$rating = $this->getAverageRating($smiley_points, $bean->id);
			$bean->icc_average_rating = $rating;
		}
		//if user change smiley
		elseif (!empty($bean->icc_smiley) && !empty($smiley_change['before']) && $smiley_change['before'] != $bean->icc_smiley) {
			$rating = $this->getAverageRating($smiley_points, $bean->id);
			$bean->icc_average_rating = $rating;
		}
		$bean->icc_smiley_last_rated = $bean->icc_smiley;
		$bean->icc_smiley = '';
	}

	function getAverageRating($smiley_points, $record_id){
		$query = $this->getAuditSql();
		$conn = $GLOBALS['db']->getConnection();
		$res = $conn->executeQuery($query, array($record_id, $record_id));
        $totalentries = 0;
        $totalsum = 0;
        foreach($res->fetchAll() as $result) {
        	$code_points = $smiley_points[$result['smiley_code']];
            $totalsum += $code_points * $result['smiley_count'];
            $totalentries += $result['smiley_count'];
        }
        $rating = $totalsum/$totalentries;
        $avgRating = is_nan($rating) || is_infinite($rating)? 0: $rating;
        return $avgRating;
	}

	function getAuditSql(){
		$sql = "SELECT 
				    c.id, ca.after_value_string AS smiley_code, 
				    COUNT(ca.after_value_string) AS smiley_count
				FROM
				    contacts c
				        JOIN
				    contacts_audit ca ON ca.parent_id = ?
				WHERE
				    c.deleted = 0
				        AND ca.field_name = 'icc_smiley'
				        AND ca.after_value_string IS NOT NULL
				        AND ca.after_value_string != ''
				        AND c.id = ?
				        AND CAST(ca.date_created AS DATE) >= CURRENT_DATE() - INTERVAL 2 YEAR
				GROUP BY c.id , ca.after_value_string;";

		return $sql;
	}
}
