({
    extendsFrom: 'EmailsComposeEmailView',

    bindDataChange: function() {
        this._super('bindDataChange');
        this.model.on('change:parent_type', function() {
            this.setOutboundEmailId();
        }, this);
    },

    setOutboundEmailId: function() {
        if(this.model.get('parent_type') == 'Opportunities') {  
            var outbound_email_id_for_opportunity = app.config.outbound_email_id_for_opportunity;
            this.model.set('outbound_email_id', outbound_email_id_for_opportunity);
        } else {
            var outbound_email_id_for_other_modules = app.config.outbound_email_id_for_other_modules;
            this.model.set('outbound_email_id', outbound_email_id_for_other_modules);
        }
    },

    _render: function() {
        this._super('_render');
        if(this.model.get('parent_type') == 'Opportunities') {  
            this.setOutboundEmailId();
        }   
    },

})
