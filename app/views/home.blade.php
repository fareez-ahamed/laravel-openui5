<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">

    <title>UI5 SplitApp Boilerplate</title>

    <!-- UI5 Bootstrap with OpenUI5 -->
    <!--<script id="sap-ui-bootstrap" type="text/javascript"
     src="resources/sap-ui-core.js"
     data-sap-ui-theme="sap_bluecrystal"
     data-sap-ui-xx-bindingSyntax="complex"
     data-sap-ui-libs="sap.m">
    </script>-->
    <script id="sap-ui-bootstrap"
        src="resources/sap-ui-core.js"
        data-sap-ui-theme="sap_bluecrystal"
        data-sap-ui-libs="sap.ui.commons"></script>
    
    
    <script type="text/javascript" src="controller/App.controller.js"></script>
    <script type="text/javascript" src="view/App.view.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <style type="text/css">
        .sapUiBody {
            margin: 0 0; 
        }
    </style>
</head>

<body class="sapUiBody" role="application">
              <div id="content"></div>
</body>

</html>