
sap.ui.localResources("view");
sap.ui.localResources("model");
sap.ui.localResources("controller");

var view = sap.ui.view({id:"view1", viewName:"com.openui5.view.App", 
	type:sap.ui.core.mvc.ViewType.JS});
view.placeAt("content");