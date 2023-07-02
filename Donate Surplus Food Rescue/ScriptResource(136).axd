﻿// (c) 2010 CodePlex Foundation
(function(){function n(){Type.registerNamespace("Sys.Extended.UI");Sys.Extended.UI.NumericUpDownBehavior=function(n){Sys.Extended.UI.NumericUpDownBehavior.initializeBase(this,[n]);this._currentValue=null;this._widthValue=null;this._targetButtonUpIDValue=null;this._targetButtonDownIDValue=null;this._serviceUpPathValue=location.pathname;this._serviceUpMethodValue=null;this._serviceDownPathValue=location.pathname;this._serviceDownMethodValue=null;this._refValuesValue=null;this._tagValue=null;this._elementTextBox=null;this._step=1;this._min=-Number.MAX_VALUE;this._max=Number.MAX_VALUE;this._bUp=null;this._bDown=null;this._stepPrecision=0;this._valuePrecision=0;this._clickUpHandler=null;this._clickDownHandler=null;this._changeHandler=null};Sys.Extended.UI.NumericUpDownBehavior.prototype={initialize:function(){var n,t;if(Sys.Extended.UI.NumericUpDownBehavior.callBaseMethod(this,"initialize"),$common.prepareHiddenElementForATDeviceUpdate(),n=this.get_element(),this._elementTextBox=n,this._elementTextBox.readOnly=this._refValuesValue||this._serviceUpMethodValue||this._serviceDownMethodValue?!0:!1,this.readValue(),this._changeHandler=Function.createDelegate(this,this._onChange),$addHandler(n,"blur",this._changeHandler),!this._targetButtonUpIDValue||!this._targetButtonDownIDValue){this._widthValue=Math.max(this._widthValue,24);n.style.width=this._widthValue-24+"px";n.style.textAlign="center";t=document.createElement("DIV");t.style.position="relative";t.style.width=this._widthValue+"px";t.style.fontSize=n.clientHeight+"px";t.style.height=n.clientHeight+"px";t.style.paddingRight="24px";t.style.display=Sys.Browser.agent==Sys.Browser.Firefox||Sys.Browser.agent==Sys.Browser.Safari?"inline-block":"inline";n.parentNode.insertBefore(t,n);var i=document.createElement("TABLE"),e=document.createElement("TBODY"),o=document.createElement("TR"),s=document.createElement("TR"),r=document.createElement("TD"),u=document.createElement("TD"),f=document.createElement("TD");r.rowSpan="2";r.style.verticalAlign="middle";u.style.verticalAlign="middle";f.style.verticalAlign="middle";o.appendChild(r);o.appendChild(u);s.appendChild(f);e.appendChild(o);e.appendChild(s);i.appendChild(e);t.appendChild(i);n.parentNode.removeChild(n);r.appendChild(n);i.style.borderCollapse="collapse";i.cellSpacing="0";i.cellPadding="0";i.style.display="inline";i.style.position="relative";r.style.padding="0";u.style.padding="0";f.style.padding="0";r.style.margin="0";u.style.margin="0";f.style.margin="0"}this._targetButtonUpIDValue||(this._bUp=document.createElement("input"),this._bUp.type="button",this._bUp.id=n.id+"_bUp",this._bUp.style.border="outset 1px",Sys.Browser.agent==Sys.Browser.InternetExplorer?(this._bUp.style.fontFamily="Webdings",this._bUp.style.fontSize="9pt",this._bUp.value="5"):(this._bUp.style.fontFamily="Tahoma, Arial, sans-serif",this._bUp.style.fontSize="5pt",this._bUp.value="▲",this._bUp.style.fontWeight="bold",this._bUp.style.lineHeight="3pt"),this._bUp.style.height="12px",this._bUp.style.width="24px",this._bUp.style.overflow="hidden",this._bUp.style.lineHeight="1em",u.appendChild(this._bUp));this._targetButtonDownIDValue||(this._bDown=document.createElement("input"),this._bDown.type="button",this._bDown.id=n.id+"_bDown",this._bDown.style.border="outset 1px",Sys.Browser.agent==Sys.Browser.InternetExplorer?(this._bDown.value="6",this._bDown.style.fontFamily="Webdings",this._bDown.style.fontSize="9pt"):(this._bDown.value="▼",this._bDown.style.fontFamily="Tahoma, Arial, sans-serif",this._bDown.style.fontSize="5pt",this._bDown.style.fontWeight="bold"),this._bDown.style.height="12px",this._bDown.style.lineHeight="3pt",this._bDown.style.width="24px",this._bDown.style.overflow="hidden",f.appendChild(this._bDown));this._bUp==null&&(this._bUp=document.getElementById(this._targetButtonUpIDValue));this._bUp&&(this._clickUpHandler=Function.createDelegate(this,this._clickUp),$addHandler(this._bUp,"click",this._clickUpHandler));this._bDown==null&&(this._bDown=document.getElementById(this._targetButtonDownIDValue));this._bDown&&(this._clickDownHandler=Function.createDelegate(this,this._clickDown),$addHandler(this._bDown,"click",this._clickDownHandler))},dispose:function(){this._changeHandler&&($removeHandler(this.get_element(),"blur",this._changeHandler),this._changeHandler=null);this._clickUpHandler&&this._bUp&&($removeHandler(this._bUp,"click",this._clickUpHandler),this._clickUpHandler=null);this._clickDownHandler&&this._bDown&&($removeHandler(this._bDown,"click",this._clickDownHandler),this._clickDownHandler=null);Sys.Extended.UI.NumericUpDownBehavior.callBaseMethod(this,"dispose")},add_currentChanged:function(n){this.get_events().addHandler("currentChanged",n)},remove_currentChanged:function(n){this.get_events().removeHandler("currentChanged",n)},raiseCurrentChanged:function(n){var t=this.get_events().getHandler("currentChanged");t&&(n||(n=Sys.EventArgs.Empty),t(this,n))},_onChange:function(){this.readValue();this._refValuesValue?(this.setCurrentToTextBox(this._refValuesValue[this._currentValue]),this._elementTextBox&&(this._elementTextBox.readOnly=!0)):(this.setCurrentToTextBox(this._currentValue),this._elementTextBox&&(this._elementTextBox.readOnly=this._serviceUpMethodValue||this._serviceDownMethodValue))},readValue:function(){var n,i,t;if(this._elementTextBox)if(n=this._elementTextBox.value,this._refValuesValue){if(n){for(i=0,t=0;t<this._refValuesValue.length;t++)n.toLowerCase()==this._refValuesValue[t].toLowerCase()&&(i=t);this._currentValue=i}else this._currentValue=0;this.setCurrentToTextBox(this._refValuesValue[this._currentValue])}else{if(n)try{this._currentValue=parseFloat(n)}catch(r){this._currentValue=this._min}else this._currentValue=this._min;isNaN(this._currentValue)&&(this._currentValue=this._min);this.setCurrentToTextBox(this._currentValue);this._valuePrecision=this._computePrecision(this._currentValue)}},setCurrentToTextBox:function(n){if(this._elementTextBox)if(this._elementTextBox.value=n,this.raiseCurrentChanged(n),document.createEvent){var t=document.createEvent("HTMLEvents");t.initEvent("change",!0,!1);this._elementTextBox.dispatchEvent(t)}else document.createEventObject&&this._elementTextBox.fireEvent("onchange")},_incrementValue:function(n){var t=parseFloat((this._currentValue+n).toFixed(Math.max(this._stepPrecision,this._valuePrecision)));this._currentValue=n>0?Math.max(Math.min(t,this._max),this._min):Math.min(Math.max(t,this._min),this._max)},_computePrecision:function(n){var i,r,t;return n==Number.Nan?this._min:(i=n.toString(),i&&(r=/\.(\d*)$/,t=i.match(r),t&&t.length==2&&t[1]))?t[1].length:this._min},get_Width:function(){return this._widthValue},set_Width:function(n){this._widthValue!=n&&(this._widthValue=n,this.raisePropertyChanged("Width"))},get_Tag:function(){return this._tagValue},set_Tag:function(n){this._tagValue!=n&&(this._tagValue=n,this.raisePropertyChanged("Tag"))},get_TargetButtonUpID:function(){return this._targetButtonUpIDValue},set_TargetButtonUpID:function(n){this._targetButtonUpIDValue!=n&&(this._targetButtonUpIDValue=n,this.raisePropertyChanged("TargetButtonUpID"))},get_TargetButtonDownID:function(){return this._targetButtonDownIDValue},set_TargetButtonDownID:function(n){this._targetButtonDownIDValue!=n&&(this._targetButtonDownIDValue=n,this.raisePropertyChanged("TargetButtonDownID"))},get_ServiceUpPath:function(){return this._serviceUpPathValue},set_ServiceUpPath:function(n){this._serviceUpPathValue!=n&&(this._serviceUpPathValue=n,this.raisePropertyChanged("ServiceUpPath"))},get_ServiceUpMethod:function(){return this._serviceUpMethodValue},set_ServiceUpMethod:function(n){this._serviceUpMethodValue!=n&&(this._serviceUpMethodValue=n,this.raisePropertyChanged("ServiceUpMethod"),this._elementTextBox&&(this._elementTextBox.readOnly=!0))},get_ServiceDownPath:function(){return this._serviceDownPathValue},set_ServiceDownPath:function(n){this._serviceDownPathValue!=n&&(this._serviceDownPathValue=n,this.raisePropertyChanged("ServiceDownPath"))},get_ServiceDownMethod:function(){return this._serviceDownMethodValue},set_ServiceDownMethod:function(n){this._serviceDownMethodValue!=n&&(this._serviceDownMethodValue=n,this.raisePropertyChanged("ServiceDownMethod"),this._elementTextBox&&(this._elementTextBox.readOnly=!0))},get_RefValues:function(){return this._refValuesValue?this._refValuesValue.join(";"):""},set_RefValues:function(n){n!=""?(this._refValuesValue=n.split(";"),this._onChange(),this._elementTextBox&&(this._elementTextBox.readOnly=!0)):(this._refValuesValue=null,this._elementTextBox&&(this._elementTextBox.readOnly=!1));this.raisePropertyChanged("RefValues")},get_Step:function(){return this._step},set_Step:function(n){n!=this._step&&(this._step=n,this._stepPrecision=this._computePrecision(n),this.raisePropertyChanged("Step"))},get_Minimum:function(){return this._min},set_Minimum:function(n){n!=this._min&&(this._min=n,this.raisePropertyChanged("Minimum"))},get_Maximum:function(){return this._max},set_Maximum:function(n){n!=this._max&&(this._max=n,this.raisePropertyChanged("Maximum"))},_clickUp:function(n){return this.readValue(),this._serviceUpPathValue&&this._serviceUpMethodValue?(Sys.Net.WebServiceProxy.invoke(this._serviceUpPathValue,this._serviceUpMethodValue,!1,{current:this._currentValue,tag:this._tagValue},Function.createDelegate(this,this._onMethodUpDownComplete)),$common.updateFormToRefreshATDeviceBuffer()):this._refValuesValue?this._currentValue+1<this._refValuesValue.length&&(this._currentValue=this._currentValue+1,this.setCurrentToTextBox(this._refValuesValue[this._currentValue])):(this._incrementValue(this._step),this.setCurrentToTextBox(this._currentValue)),n&&n.preventDefault(),!1},_clickDown:function(n){return this.readValue(),this._serviceDownPathValue&&this._serviceDownMethodValue?(Sys.Net.WebServiceProxy.invoke(this._serviceDownPathValue,this._serviceDownMethodValue,!1,{current:this._currentValue,tag:this._tagValue},Function.createDelegate(this,this._onMethodUpDownComplete)),$common.updateFormToRefreshATDeviceBuffer()):this._refValuesValue?this._currentValue-1>=0&&(this._currentValue=this._currentValue-1,this.setCurrentToTextBox(this._refValuesValue[this._currentValue])):(this._incrementValue(-this._step),this.setCurrentToTextBox(this._currentValue)),n&&n.preventDefault(),!1},_onMethodUpDownComplete:function(n){this._currentValue=n;this.setCurrentToTextBox(this._currentValue)}};Sys.Extended.UI.NumericUpDownBehavior.registerClass("Sys.Extended.UI.NumericUpDownBehavior",Sys.Extended.UI.BehaviorBase);Sys.registerComponent(Sys.Extended.UI.NumericUpDownBehavior,{name:"upDown",parameters:["Minimum","Maximum","Width"]})}window.Sys&&Sys.loader?Sys.loader.registerScript("ExtendedUpDown",["ExtendedCommon","ExtendedBase","WebServices"],n):n()})();