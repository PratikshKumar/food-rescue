﻿// (c) 2010 CodePlex Foundation
(function(){function n(){Type.registerNamespace("Sys.Extended.UI");Sys.Extended.UI.TextBoxWatermarkBehavior=function(n){Sys.Extended.UI.TextBoxWatermarkBehavior.initializeBase(this,[n]);this._watermarkText=null;this._watermarkCssClass=null;this._focusHandler=null;this._blurHandler=null;this._keyPressHandler=null;this._propertyChangedHandler=null;this._watermarkChangedHandler=null;this._oldClassName=null;this._clearedForSubmit=null;this._maxLength=null;typeof WebForm_OnSubmit!="function"||Sys.Extended.UI.TextBoxWatermarkBehavior._originalWebForm_OnSubmit||(Sys.Extended.UI.TextBoxWatermarkBehavior._originalWebForm_OnSubmit=WebForm_OnSubmit,WebForm_OnSubmit=Sys.Extended.UI.TextBoxWatermarkBehavior.WebForm_OnSubmit)};Sys.Extended.UI.TextBoxWatermarkBehavior.prototype={initialize:function(){var r,t;Sys.Extended.UI.TextBoxWatermarkBehavior.callBaseMethod(this,"initialize");var n=this.get_element(),u=!1,i=Sys.Extended.UI.TextBoxWatermarkBehavior.callBaseMethod(this,"get_ClientState");i!=null&&i!=""&&(u=i=="Focused",Sys.Extended.UI.TextBoxWatermarkBehavior.callBaseMethod(this,"set_ClientState",null));this._oldClassName=n.className;this._focusHandler=Function.createDelegate(this,this._onFocus);this._blurHandler=Function.createDelegate(this,this._onBlur);this._keyPressHandler=Function.createDelegate(this,this._onKeyPress);$addHandler(n,"focus",this._focusHandler);$addHandler(n,"blur",this._blurHandler);$addHandler(n,"keypress",this._keyPressHandler);this.registerPropertyChanged();r=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_Current();t=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element());(""==r||this._watermarkText==r)&&(t.set_Watermark(this._watermarkText),t.set_IsWatermarked(!0));u?this._onFocus():(n.blur(),this._onBlur());this._clearedForSubmit=!1;this.registerPartialUpdateEvents();this._watermarkChangedHandler=Function.createDelegate(this,this._onWatermarkChanged);t.add_WatermarkChanged(this._watermarkChangedHandler)},dispose:function(){var n=this.get_element();this._watermarkChangedHandler&&(Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).remove_WatermarkChanged(this._watermarkChangedHandler),this._watermarkChangedHandler=null);n.control&&this._propertyChangedHandler&&(n.control.remove_propertyChanged(this._propertyChangedHandler),this._propertyChangedHandler=null);this._focusHandler&&($removeHandler(n,"focus",this._focusHandler),this._focusHandler=null);this._blurHandler&&($removeHandler(n,"blur",this._blurHandler),this._blurHandler=null);this._keyPressHandler&&($removeHandler(n,"keypress",this._keyPressHandler),this._keyPressHandler=null);Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_IsWatermarked()&&this.clearText(!1);Sys.Extended.UI.TextBoxWatermarkBehavior.callBaseMethod(this,"dispose")},_onWatermarkChanged:function(){Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_IsWatermarked()?this._onBlur():this._onFocus()},clearText:function(n){var t=this.get_element(),i=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(t);i.set_Value("");i.set_IsWatermarked(!1);n&&(t.setAttribute("autocomplete","off"),t.select())},_onFocus:function(n){var t=this.get_element();Sys.Extended.UI.TextBoxWrapper.get_Wrapper(t).get_IsWatermarked()&&this.clearText(n?!0:!1);t.className=this._oldClassName;this._maxLength>0&&(this.get_element().maxLength=this._maxLength,this._maxLength=null)},_onBlur:function(){var n=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element());(""==n.get_Current()||n.get_IsWatermarked())&&(this.get_element().maxLength>0&&this._watermarkText.length>this.get_element().maxLength&&(this._maxLength=this.get_element().maxLength,this.get_element().maxLength=this._watermarkText.length),this._applyWatermark())},_applyWatermark:function(){var n=Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element());n.set_Watermark(this._watermarkText);n.set_IsWatermarked(!0);this._watermarkCssClass&&(this.get_element().className=this._watermarkCssClass)},_onKeyPress:function(){Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).set_IsWatermarked(!1)},registerPropertyChanged:function(){var n=this.get_element();n.control&&!this._propertyChangedHandler&&(this._propertyChangedHandler=Function.createDelegate(this,this._onPropertyChanged),n.control.add_propertyChanged(this._propertyChangedHandler))},_onPropertyChanged:function(n,t){"text"==t.get_propertyName()&&this.set_Text(Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_Current())},_onSubmit:function(){Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_IsWatermarked()&&(this.clearText(!1),this._clearedForSubmit=!0)},_partialUpdateEndRequest:function(n,t){Sys.Extended.UI.TextBoxWatermarkBehavior.callBaseMethod(this,"_partialUpdateEndRequest",[n,t]);this.get_element()&&this._clearedForSubmit&&(this.get_element().blur(),this._onBlur(),this._clearedForSubmit=!1)},get_WatermarkText:function(){return this._watermarkText},set_WatermarkText:function(n){this._watermarkText!=n&&(this._watermarkText=n,Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_IsWatermarked()&&this._applyWatermark(),this.raisePropertyChanged("WatermarkText"))},get_WatermarkCssClass:function(){return this._watermarkCssClass},set_WatermarkCssClass:function(n){this._watermarkCssClass!=n&&(this._watermarkCssClass=n,Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_IsWatermarked()&&this._applyWatermark(),this.raisePropertyChanged("WatermarkCssClass"))},get_Text:function(){return Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).get_Value()},set_Text:function(n){""==n?(Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).set_Current(""),this.get_element().blur(),this._onBlur()):(this._onFocus(),Sys.Extended.UI.TextBoxWrapper.get_Wrapper(this.get_element()).set_Current(n))}};Sys.Extended.UI.TextBoxWatermarkBehavior.registerClass("Sys.Extended.UI.TextBoxWatermarkBehavior",Sys.Extended.UI.BehaviorBase);Sys.registerComponent(Sys.Extended.UI.TextBoxWatermarkBehavior,{name:"watermark",parameters:[{name:"WatermarkText",type:"String"},{name:"WatermarkCssClass",type:"String"}]});Sys.Extended.UI.TextBoxWatermarkBehavior.WebForm_OnSubmit=function(){var r=Sys.Extended.UI.TextBoxWatermarkBehavior._originalWebForm_OnSubmit(),t,n,i;if(r)for(t=Sys.Application.getComponents(),n=0;n<t.length;n++)i=t[n],Sys.Extended.UI.TextBoxWatermarkBehavior.isInstanceOfType(i)&&i._onSubmit();return r}}window.Sys&&Sys.loader?Sys.loader.registerScript("ExtendedWatermark",["ExtendedBase","ExtendedCommon"],n):n()})();