// include/javascript/sugar_grp1.js
$(document).ready(function() {
	$('[name="printPDFButton"]').attr('onclick', '');
	$('[name="printPDFButton"]').click(function (e) {
		// $(this).preventDefault();
		$('[name="to_pdf"]').val('on');
		$('[name="save_report"]').val('');
		$('[name="to_csv"]').val('');
		$('#EditView').attr('action', 'index.php?entryPoint=ICC_Quotes_pdf&module=Reports&page=report&id=f52a9b2e-0de9-11eb-9ad0-e86f384c52cb');
		$('#EditView').submit();
	});
});
