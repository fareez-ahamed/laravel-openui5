sap.ui.jsview("com.openui5.view.App", {

	getControllerName : function() {
		return "com.openui5.App";
	},

	createContent : function(oController) {

		return new sap.ui.commons.ApplicationHeader({
			'id':'appHead',
			'logoText' : 'OpenUI5 Demo Application',
			'displayLogoff' : false,
			'displayWelcome' : false
			});
	}
});