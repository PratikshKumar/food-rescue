﻿Type.registerNamespace("Sys.Extended.UI.HTMLEditor.ToolbarButton");Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter=function(n){Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter.initializeBase(this,[n])};Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter.prototype={checkState:function(){return Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter.callBaseMethod(this,"checkState")?this._designPanel._textAlignState("center"):!1},callMethod:function(){if(!Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter.callBaseMethod(this,"callMethod"))return!1;this._designPanel._execCommand("JustifyCenter")}};Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter.registerClass("Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyCenter",Sys.Extended.UI.HTMLEditor.ToolbarButton.EditorToggleButton);