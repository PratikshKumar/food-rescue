﻿// (c) 2010 CodePlex Foundation
Type.registerNamespace("Sys.Extended.UI.Seadragon");Type.registerNamespace("Seadragon");Sys.Extended.UI.Seadragon.ButtonState=function(){throw Error.invalidOperation();};Sys.Extended.UI.Seadragon.ButtonState.prototype={REST:0,GROUP:1,HOVER:2,DOWN:3};Sys.Extended.UI.Seadragon.ButtonState.registerEnum("Sys.Extended.UI.Seadragon.ButtonState",!1);Sys.Extended.UI.Seadragon.Button=function(){Sys.Extended.UI.Seadragon.Button.initializeBase(this);this._tooltip=null;this._srcRest=null;this._srcGroup=null;this._srcHover=null;this._srcDown=null;this._button=null;this.config=null};Sys.Extended.UI.Seadragon.Button.prototype={initialize:function(){Sys.Extended.UI.Seadragon.Button.callBaseMethod(this,"initialize");this._button=Seadragon.Utils.makeNeutralElement("span");this._currentState=Sys.Extended.UI.Seadragon.ButtonState.GROUP;this._tracker=new Seadragon.MouseTracker(this._button,this.config.clickTimeThreshold,this.config.clickDistThreshold);this._imgRest=Seadragon.Utils.makeTransparentImage(this._srcRest);this._imgGroup=Seadragon.Utils.makeTransparentImage(this._srcGroup);this._imgHover=Seadragon.Utils.makeTransparentImage(this._srcHover);this._imgDown=Seadragon.Utils.makeTransparentImage(this._srcDown);this._fadeDelay=0;this._fadeLength=2e3;this._fadeBeginTime=null;this._shouldFade=!1;this._button.style.display="inline-block";this._button.style.position="relative";this._button.title=this._tooltip;this._button.appendChild(this._imgRest);this._button.appendChild(this._imgGroup);this._button.appendChild(this._imgHover);this._button.appendChild(this._imgDown);var r=this._imgRest.style,i=this._imgGroup.style,n=this._imgHover.style,t=this._imgDown.style;i.position=n.position=t.position="absolute";i.top=n.top=t.top="0px";i.left=n.left=t.left="0px";n.visibility=t.visibility="hidden";Seadragon.Utils.getBrowser()==Seadragon.Browser.FIREFOX&&Seadragon.Utils.getBrowserVersion()<3&&(i.top=n.top=t.top="");this._tracker.enterHandler=Function.createDelegate(this,this._enterHandler);this._tracker.exitHandler=Function.createDelegate(this,this._exitHandler);this._tracker.pressHandler=Function.createDelegate(this,this._pressHandler);this._tracker.releaseHandler=Function.createDelegate(this,this._releaseHandler);this._tracker.clickHandler=Function.createDelegate(this,this._clickHandler);this._tracker.setTracking(!0);this._outTo(Sys.Extended.UI.Seadragon.ButtonState.REST)},dispose:function(){},_scheduleFade:function(){window.setTimeout(Function.createDelegate(this,this._updateFade),20)},_updateFade:function(){if(this._shouldFade){var t=(new Date).getTime(),i=t-this._fadeBeginTime,n=1-i/this._fadeLength;n=Math.min(1,n);n=Math.max(0,n);Seadragon.Utils.setElementOpacity(this._imgGroup,n,!0);n>0&&this._scheduleFade()}},_beginFading:function(){this._shouldFade=!0;this._fadeBeginTime=(new Date).getTime()+this._fadeDelay;window.setTimeout(Function.createDelegate(this,this._scheduleFade),this._fadeDelay)},_stopFading:function(){this._shouldFade=!1;Seadragon.Utils.setElementOpacity(this._imgGroup,1,!0)},_inTo:function(n){n>=Sys.Extended.UI.Seadragon.ButtonState.GROUP&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.REST&&(this._stopFading(),this._currentState=Sys.Extended.UI.Seadragon.ButtonState.GROUP);n>=Sys.Extended.UI.Seadragon.ButtonState.HOVER&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.GROUP&&(this._imgHover.style.visibility="",this._currentState=Sys.Extended.UI.Seadragon.ButtonState.HOVER);n>=Sys.Extended.UI.Seadragon.ButtonState.DOWN&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.HOVER&&(this._imgDown.style.visibility="",this._currentState=Sys.Extended.UI.Seadragon.ButtonState.DOWN)},_outTo:function(n){n<=Sys.Extended.UI.Seadragon.ButtonState.HOVER&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.DOWN&&(this._imgDown.style.visibility="hidden",this._currentState=Sys.Extended.UI.Seadragon.ButtonState.HOVER);n<=Sys.Extended.UI.Seadragon.ButtonState.GROUP&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.HOVER&&(this._imgHover.style.visibility="hidden",this._currentState=Sys.Extended.UI.Seadragon.ButtonState.GROUP);this._newState<=Sys.Extended.UI.Seadragon.ButtonState.REST&&this._currentState==Sys.Extended.UI.Seadragon.ButtonState.GROUP&&(this._beginFading(),this._currentState=Sys.Extended.UI.Seadragon.ButtonState.REST)},_enterHandler:function(n,t,i,r){i?(this._inTo(Sys.Extended.UI.Seadragon.ButtonState.DOWN),this._raiseEvent("onEnter",this)):r||this._inTo(Sys.Extended.UI.Seadragon.ButtonState.HOVER)},_exitHandler:function(n,t,i){this._outTo(Sys.Extended.UI.Seadragon.ButtonState.GROUP);i&&this._raiseEvent("onExit",this)},_pressHandler:function(){this._inTo(Sys.Extended.UI.Seadragon.ButtonState.DOWN);this._raiseEvent("onPress",this)},_releaseHandler:function(n,t,i,r){i&&r?(this._outTo(Sys.Extended.UI.Seadragon.ButtonState.HOVER),this._raiseEvent("onRelease",this)):i?this._outTo(Sys.Extended.UI.Seadragon.ButtonState.GROUP):this._inTo(Sys.Extended.UI.Seadragon.ButtonState.HOVER)},_clickHandler:function(n,t,i){i&&this._raiseEvent("onClick",this)},_raiseEvent:function(n,t){var i=this.get_events().getHandler(n);i&&(t||(t=Sys.EventArgs.Empty),i(this,t))},get_element:function(){return this._button},get_tooltip:function(){return this._tooltip},set_tooltip:function(n){this._tooltip=n},get_config:function(){return this.config},set_config:function(n){this.config=n},get_srcRest:function(){return this._srcRest},set_srcRest:function(n){this._srcRest=n},get_srcGroup:function(){return this._srcGroup},set_srcGroup:function(n){this._srcGroup=n},get_srcHover:function(){return this._srcHover},set_srcHover:function(n){this._srcHover=n},get_srcDown:function(){return this._srcDown},set_srcDown:function(n){this._srcDown=n},add_onPress:function(n){this.get_events().addHandler("onPress",n)},remove_onPress:function(n){this.get_events().removeHandler("onPress",n)},add_onClick:function(n){this.get_events().addHandler("onClick",n)},remove_onClick:function(n){this.get_events().removeHandler("onClick",n)},add_onEnter:function(n){this.get_events().addHandler("onEnter",n)},remove_onEnter:function(n){this.get_events().removeHandler("onEnter",n)},add_onRelease:function(n){this.get_events().addHandler("onRelease",n)},remove_onRelease:function(n){this.get_events().removeHandler("onRelease",n)},add_onExit:function(n){this.get_events().addHandler("onExit",n)},remove_onExit:function(n){this.get_events().removeHandler("onExit",n)},notifyGroupEnter:function(){this._inTo(Sys.Extended.UI.Seadragon.ButtonState.GROUP)},notifyGroupExit:function(){this._outTo(Sys.Extended.UI.Seadragon.ButtonState.REST)}};Sys.Extended.UI.Seadragon.Button.registerClass("Sys.Extended.UI.Seadragon.Button",Sys.Component);Sys.Extended.UI.Seadragon.ButtonGroup=function(){Sys.Extended.UI.Seadragon.ButtonGroup.initializeBase(this);this._buttons=null;this._group=null;this.config=null};Sys.Extended.UI.Seadragon.ButtonGroup.prototype={initialize:function(){var i,n,t;for(Sys.Extended.UI.Seadragon.ButtonGroup.callBaseMethod(this,"initialize"),this._group=Seadragon.Utils.makeNeutralElement("span"),i=this._buttons.concat([]),n=new Seadragon.MouseTracker(this._group,this.config.clickTimeThreshold,this.config.clickDistThreshold),this._group.style.display="inline-block",t=0;t<i.length;t++)this._group.appendChild(i[t].get_element());n.enterHandler=Function.createDelegate(this,this._enterHandler);n.exitHandler=Function.createDelegate(this,this._exitHandler);n.releaseHandler=Function.createDelegate(this,this._releaseHandler);n.setTracking(!0)},dispose:function(){},get_buttons:function(){return this._buttons},set_buttons:function(n){this._buttons=n},get_element:function(){return this._group},get_config:function(){return this.config},set_config:function(n){this.config=n},_enterHandler:function(){for(var n=0;n<this._buttons.length;n++)this._buttons[n].notifyGroupEnter()},_exitHandler:function(n,t,i){if(!i)for(var r=0;r<this._buttons.length;r++)this._buttons[r].notifyGroupExit()},_releaseHandler:function(n,t,i,r){if(!r)for(var u=0;u<this._buttons.length;u++)this._buttons[u].notifyGroupExit()},emulateEnter:function(){this._enterHandler()},emulateExit:function(){this._exitHandler()}};Sys.Extended.UI.Seadragon.ButtonGroup.registerClass("Sys.Extended.UI.Seadragon.ButtonGroup",Sys.Component);