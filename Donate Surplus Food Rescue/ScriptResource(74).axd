﻿Type.registerNamespace("Sys.Extended.UI.HTMLEditor.ToolbarButton");Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight=function(n){Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight.initializeBase(this,[n])};Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight.prototype={checkState:function(){return Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight.callBaseMethod(this,"checkState")?this._designPanel._textAlignState("right"):!1},callMethod:function(){if(!Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight.callBaseMethod(this,"callMethod"))return!1;this._designPanel._execCommand("JustifyRight")}};Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight.registerClass("Sys.Extended.UI.HTMLEditor.ToolbarButton.JustifyRight",Sys.Extended.UI.HTMLEditor.ToolbarButton.EditorToggleButton);