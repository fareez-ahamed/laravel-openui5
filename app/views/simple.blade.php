<!DOCTYPE html>
<html>
<head>
	<script id="sap-ui-bootstrap"
        src="resources/sap-ui-core.js"
        data-sap-ui-theme="sap_goldreflection"
        data-sap-ui-libs="sap.ui.commons"></script>

	<script type="text/javascript">
	var myButton = sap.ui.commons.Button("btn");

	myButton.setText("Hello World!");

	myButton.attachPress(function(){ $("#btn").fadeOut(); });

	myButton.placeAt("ui");
	</script>
</head>
<body>
	<div id="ui"></div>
</body>
</html>