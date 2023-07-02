﻿// (c) 2010 CodePlex Foundation
Type.registerNamespace("Sys.Extended.UI.Seadragon");Type.registerNamespace("Seadragon");Seadragon.Utils=function(){function o(n,t){return t&&n!=document.body?document.body:n.offsetParent}var t={UNKNOWN:0,IE:1,FIREFOX:2,SAFARI:3,CHROME:4,OPERA:5};Seadragon.Browser=t;var n=this,u=["Msxml2.XMLHTTP","Msxml3.XMLHTTP","Microsoft.XMLHTTP"],s={bmp:!1,jpeg:!0,jpg:!0,png:!0,tif:!1,wdp:!1},i=t.UNKNOWN,r=0,f=!1,e={};(function(){var h=navigator.appName,w=navigator.appVersion,n=navigator.userAgent,c,y,p,a,u,o,s;if(h!="Microsoft Internet Explorer"||!window.attachEvent||!window.ActiveXObject)if(h!="Netscape"||!window.addEventListener)h!="Opera"||!window.opera||!window.attachEvent||(i=t.OPERA,r=parseFloat(w));else{var v=n.indexOf("Firefox"),l=n.indexOf("Safari"),b=n.indexOf("Chrome");v>=0?(i=t.FIREFOX,r=parseFloat(n.substring(v+8))):l>=0&&(y=n.substring(0,l).lastIndexOf("/"),i=b>=0?t.CHROME:t.SAFARI,r=parseFloat(n.substring(y+1,l)))}else c=n.indexOf("MSIE"),i=t.IE,r=parseFloat(n.substring(c+5,n.indexOf(";",c)));for(p=window.location.search.substring(1),a=p.split("&"),u=0;u<a.length;u++)o=a[u],s=o.indexOf("="),s>0&&(e[o.substring(0,s)]=decodeURIComponent(o.substring(s+1)));f=i==t.IE||i==t.CHROME&&r<2})();this.getBrowser=function(){return i};this.getBrowserVersion=function(){return r};this.getElement=function(n){return typeof n=="string"&&(n=document.getElementById(n)),n};this.getElementPosition=function(t){for(var t=n.getElement(t),i=new Seadragon.Point,r=n.getElementStyle(t).position=="fixed",u=o(t,r);u;)i.x+=t.offsetLeft,i.y+=t.offsetTop,r&&(i=i.plus(n.getPageScroll())),t=u,r=n.getElementStyle(t).position=="fixed",u=o(t,r);return i};this.getElementSize=function(t){var t=n.getElement(t);return new Seadragon.Point(t.clientWidth,t.clientHeight)};this.getElementStyle=function(t){var t=n.getElement(t);if(t.currentStyle)return t.currentStyle;if(window.getComputedStyle)return window.getComputedStyle(t,"");Seadragon.Debug.fail("Unknown element style, no known technique.")};this.getEvent=function(n){return n?n:window.event};this.getMousePosition=function(t){var t=n.getEvent(t),i=new Seadragon.Point;return typeof t.pageX=="number"?(i.x=t.pageX,i.y=t.pageY):typeof t.clientX=="number"?(i.x=t.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,i.y=t.clientY+document.body.scrollTop+document.documentElement.scrollTop):Seadragon.Debug.fail("Unknown event mouse position, no known technique."),i};this.getPageScroll=function(){var n=new Seadragon.Point,t=document.documentElement||{},i=document.body||{};return typeof window.pageXOffset=="number"?(n.x=window.pageXOffset,n.y=window.pageYOffset):i.scrollLeft||i.scrollTop?(n.x=i.scrollLeft,n.y=i.scrollTop):(t.scrollLeft||t.scrollTop)&&(n.x=t.scrollLeft,n.y=t.scrollTop),n};this.getWindowSize=function(){var n=new Seadragon.Point,t=document.documentElement||{},i=document.body||{};return typeof window.innerWidth=="number"?(n.x=window.innerWidth,n.y=window.innerHeight):t.clientWidth||t.clientHeight?(n.x=t.clientWidth,n.y=t.clientHeight):i.clientWidth||i.clientHeight?(n.x=i.clientWidth,n.y=i.clientHeight):Seadragon.Debug.fail("Unknown window size, no known technique."),n};this.imageFormatSupported=function(n){var n=n?n:"";return!!s[n.toLowerCase()]};this.makeCenteredNode=function(t){var t=Seadragon.Utils.getElement(t),r=n.makeNeutralElement("div"),i=[],u,f;for(i.push('<div style="display:table; height:100%; width:100%;'),i.push("border:none; margin:0px; padding:0px;"),i.push('#position:relative; overflow:hidden; text-align:left;">'),i.push('<div style="#position:absolute; #top:50%; width:100%; '),i.push("border:none; margin:0px; padding:0px;"),i.push('display:table-cell; vertical-align:middle;">'),i.push('<div style="#position:relative; #top:-50%; width:100%; '),i.push("border:none; margin:0px; padding:0px;"),i.push('text-align:center;"><\/div><\/div><\/div>'),r.innerHTML=i.join(""),r=r.firstChild,u=r,f=r.getElementsByTagName("div");f.length>0;)u=f[0],f=u.getElementsByTagName("div");return u.appendChild(t),r};this.makeNeutralElement=function(n){var i=document.createElement(n),t=i.style;return t.background="transparent none",t.border="none",t.margin="0px",t.padding="0px",t.position="static",i};this.makeTransparentImage=function(u){var e=n.makeNeutralElement("img"),f=null;return i==t.IE&&r<7?(f=n.makeNeutralElement("span"),f.style.display="inline-block",e.onload=function(){f.style.width=f.style.width||e.width+"px";f.style.height=f.style.height||e.height+"px";e.onload=null;e=null},e.src=u,f.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+u+"', sizingMethod='scale')"):(f=e,f.src=u),f};this.setElementOpacity=function(t,i,r){var t=n.getElement(t),o,u,e;if(r&&f&&(i=Math.round(i)),t.style.opacity=i<1?i:"",i==1){o=t.style.filter||"";t.style.filter=o.replace(/alpha\(.*?\)/g,"");return}u=Math.round(100*i);e=" alpha(opacity="+u+") ";try{t.filters&&t.filters.alpha?t.filters.alpha.opacity=u:t.style.filter+=e}catch(s){t.style.filter+=e}};this.addEvent=function(t,i,r,u){var t=n.getElement(t);t.addEventListener?t.addEventListener(i,r,u):t.attachEvent?(t.attachEvent("on"+i,r),u&&t.setCapture&&t.setCapture()):Seadragon.Debug.fail("Unable to attach event handler, no known technique.")};this.removeEvent=function(t,i,r,u){var t=n.getElement(t);t.removeEventListener?t.removeEventListener(i,r,u):t.detachEvent?(t.detachEvent("on"+i,r),u&&t.releaseCapture&&t.releaseCapture()):Seadragon.Debug.fail("Unable to detach event handler, no known technique.")};this.cancelEvent=function(t){var t=n.getEvent(t);t.preventDefault&&t.preventDefault();t.cancel=!0;t.returnValue=!1};this.stopEvent=function(t){var t=n.getEvent(t);t.stopPropagation&&t.stopPropagation();t.cancelBubble=!0};this.createCallback=function(n,t){for(var r=[],i=2;i<arguments.length;i++)r.push(arguments[i]);return function(){for(var u=r.concat([]),i=0;i<arguments.length;i++)u.push(arguments[i]);return t.apply(n,u)}};this.getUrlParameter=function(n){var t=e[n];return t?t:null};this.makeAjaxRequest=function(n,t){var r=typeof t=="function",i=null,e,t,f;if(r&&(e=t,t=function(){window.setTimeout(Seadragon.Utils.createCallback(null,e,i),1)}),window.ActiveXObject)for(f=0;f<u.length;f++)try{i=new ActiveXObject(u[f]);break}catch(o){continue}else window.XMLHttpRequest&&(i=new XMLHttpRequest);i||Seadragon.Debug.fail("Browser doesn't support XMLHttpRequest.");r&&(i.onreadystatechange=function(){i.readyState==4&&(i.onreadystatechange=new Function,t())});try{i.open("GET",n,r);i.send(null)}catch(o){Seadragon.Debug.log(o.name+" while making AJAX request: "+o.message);i.onreadystatechange=null;i=null;r&&t()}return r?null:i};this.parseXml=function(n){var t=null,r;if(window.ActiveXObject)try{t=new ActiveXObject("Microsoft.XMLDOM");t.async=!1;t.loadXML(n)}catch(i){Seadragon.Debug.log(i.name+" while parsing XML (ActiveX): "+i.message)}else if(window.DOMParser)try{r=new DOMParser;t=r.parseFromString(n,"text/xml")}catch(i){Seadragon.Debug.log(i.name+" while parsing XML (DOMParser): "+i.message)}else Seadragon.Debug.fail("Browser doesn't support XML DOM.");return t}};Seadragon.Utils=new Seadragon.Utils;