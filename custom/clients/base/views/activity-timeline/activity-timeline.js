({
    extendsFrom: 'ActivityTimelineView',

    /**
     * Object icon names for modules
     */
    moduleIcons: {
        Emails: 'fa-envelope',
    },

    /**
     * Array default modules
     */
    defaultModules: [
        'Emails',
    ],

    /**
     * Set activity modules and module field names
     *
     * @param {string} baseModule module name
     */
    _setActivityModulesAndFields: function(baseModule) {
        var modulesMeta = app.metadata.getView(baseModule, 'activity-timeline');
        if (!modulesMeta) {
            return;
        }
        var modules = modulesMeta.activity_modules;
        this.activityModules = this.defaultModules;
        this.moduleFieldNames = {};
        _.each(modules, function(module) {
            // to set fields only for email module
            if(module.module == "Emails" ){
                this.moduleFieldNames[module.module] = module.fields;
                this.recordDateFields[module.module] = module.record_date || 'date_entered';
            }
        }, this);
    },
})
