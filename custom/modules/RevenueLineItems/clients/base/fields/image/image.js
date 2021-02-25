({
    extendsFrom: 'BaseImageField',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);
        this.icc_product_image = this.model.get(this.name);
        this.model.on('change:product_template_id', function(model, value) {
            this.render();
        }, this);
    },
    
    buildUrl: function(options) {
        if(this.name === 'icc_product_image') {
            var id = this._duplicateBeanId ? this._duplicateBeanId : this.model.id;
            if(_.isUndefined(id)) {
                return app.api.buildFileURL({
                    module: 'ProductTemplates',
                    id: this.model.get('product_template_id'),
                    field: this.name
                }, options);
            }
        }
        return app.api.buildFileURL({
            module: this._duplicateBeanModule ? this._duplicateBeanModule : this.module,
            id: this._duplicateBeanId ? this._duplicateBeanId : this.model.id,
            field: this.name
        }, options);
    },
    
    format: function(value) {
        if(this.name === "icc_product_image") {
            var url = app.api.buildFileURL({
                module: 'ProductTemplates',
                id: this.model.get('product_template_id'),
                field: this.name
            });
            if(_.isNull(value) && !_.isUndefined(this.model.get('product_template_id'))) {
                return url+ "&_hash=" + this.model.get('icc_product_image');
            }
            if(!_.isUndefined(this.model.id) && value && this.icc_product_image !== value) {
                return url+ "&_hash=" + value;
            }
        }
        if (value) {
            value = this.buildUrl() + "&_hash=" + value;
        }
        return value;
    },
})



