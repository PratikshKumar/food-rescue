﻿Type.registerNamespace("Sys.Extended.UI.HTMLEditor.ToolbarButton");Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph=function(n){Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph.initializeBase(this,[n])};Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph.prototype={checkState:function(){return Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph.callBaseMethod(this,"checkState")?this._designPanel._textAlignState(""):!1},callMethod:function(){if(!Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph.callBaseMethod(this,"callMethod"))return!1;this._designPanel._execCommand("Paragraph")}};Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph.registerClass("Sys.Extended.UI.HTMLEditor.ToolbarButton.Paragraph",Sys.Extended.UI.HTMLEditor.ToolbarButton.EditorToggleButton);