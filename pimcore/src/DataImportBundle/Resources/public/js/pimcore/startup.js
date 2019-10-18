pimcore.registerNS("pimcore.plugin.DataImportBundle");

pimcore.plugin.DataImportBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.DataImportBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("DataImportBundle ready!");
    }
});

var DataImportBundlePlugin = new pimcore.plugin.DataImportBundle();
