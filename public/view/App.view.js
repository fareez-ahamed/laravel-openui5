sap.ui.jsview("com.openui5.view.App", {

	getControllerName : function() {
		return "com.openui5.App";
	},

	createContent : function(oController) {


		//Create the login panel
		var loginPanel = new sap.ui.commons.Panel(
		{
			id:'loginPanel',
			width:'310px'
		});

		loginPanel.setTitle(new sap.ui.core.Title({'text':'Login'}));

		//Create a matrix layout with 2 columns
		var oMatrix = new sap.ui.commons.layout.MatrixLayout(
		{
			layoutFixed: true, 
			width: '300px', 
			columns: 2
			
		});

		oMatrix.setWidths('100px', '200px');

		oMatrix.createRow(
			new sap.ui.commons.Label({'text':'Username'}),
			new sap.ui.commons.TextField()
			);

		oMatrix.createRow(
			new sap.ui.commons.Label({'text':'Password'}),
			new sap.ui.commons.PasswordField()
			);

		oMatrix.createRow(
			null,
			new sap.ui.commons.Button({'text':'Submit'})
			);

		loginPanel.addContent(oMatrix);



		//Return all enclosed in a Vertical Layout
		return new sap.ui.layout.VerticalLayout({
			'id':'verticalLay1',
			'width':'100%',
			'content': [new sap.ui.commons.ApplicationHeader({
				'id':'appHead',
				'logoText' : 'OpenUI5 Demo Application',
				'displayLogoff' : false,
				'displayWelcome' : false
			}),
			loginPanel
			]
			
		});

		// return new sap.ui.commons.ApplicationHeader({
		// 	'id':'appHead',
		// 	'logoText' : 'OpenUI5 Demo Application',
		// 	'displayLogoff' : false,
		// 	'displayWelcome' : false
		// 	});
}
});