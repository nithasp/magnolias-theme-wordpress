function wHELPERS(){};wHELPERS.prototype.addEvent=function(obj,type,fn){if(!obj){return;}
if(obj.attachEvent){obj['e'+type+fn]=fn;obj[type+fn]=function(){obj['e'+type+fn](window.event);}
obj.attachEvent('on'+type,obj[type+fn]);}else if(obj.addEventListener){obj.addEventListener(type,fn,false);}else{var originalHandler=obj["on"+type];if(originalHandler){obj["on"+type]=function(e){originalHandler(e);fn(e);};}else{obj["on"+type]=fn;}}}
wHELPERS.prototype.removeEvent=function(obj,type,fn){if(obj.detachEvent){if(obj[type+fn]){obj.detachEvent('on'+type,obj[type+fn]);obj[type+fn]=null;}}else if(obj.removeEventListener)
obj.removeEventListener(type,fn,false);else{obj["on"+type]=null;}}
wHELPERS.prototype.getSourceElement=function(e){if(!e)e=window.event;if(e.target)
var srcE=e.target;else
var srcE=e.srcElement;if(!srcE)return null;if(srcE.nodeType==3)srcE=srcE.parentNode;if(srcE.tagName.toUpperCase()=='LABEL'&&e.type=='click'){if(srcE.getAttribute('for')){srcE=document.getElementById(srcE.getAttribute('for'));}}
return srcE;}
wHELPERS.prototype.preventEvent=function(e){if(!e)e=window.event;if(e.preventDefault)e.preventDefault();else e.returnValue=false;return false;}
wHELPERS.prototype.stopPropagation=function(e){if(!e)var e=window.event;e.cancelBubble=true;if(e.stopPropagation)e.stopPropagation();}
wHELPERS.prototype.randomId=function(){var seed=(new Date()).getTime();seed=seed.toString().substr(6);for(var i=0;i<6;i++)
seed+=String.fromCharCode(48+Math.floor((Math.random()*10)));return"id-"+seed;}
wHELPERS.prototype.activateStylesheet=function(sheetref){if(document.getElementsByTagName){var ss=document.getElementsByTagName('link');}else if(document.styleSheets){var ss=document.styleSheets;}
for(var i=0;ss[i];i++){if(ss[i].href.indexOf(sheetref)!=-1){ss[i].disabled=true;ss[i].disabled=false;}}}
wHELPERS.prototype.hasClass=function(element,className){if(element&&element.className){if((' '+element.className+' ').indexOf(' '+className+' ')!=-1){return true;}}
return false;}
wHELPERS.prototype.hasClassPrefix=function(element,className){if(element&&element.className){if((' '+element.className).indexOf(' '+className)!=-1){return true;}}
return false;}
wHELPERS.prototype.hasIdPrefix=function(element,idPrefix){if(element&&element.id){if(element.id.indexOf(idPrefix)!=-1){return true;}}
return false;}
wHELPERS.prototype.getTop=function(obj){var cur=0;if(obj.offsetParent){while(obj.offsetParent){if((new wHELPERS()).getComputedStyle(obj,'position')=='relative'){return cur;}
cur+=obj.offsetTop;obj=obj.offsetParent;}}
return cur;}
wHELPERS.prototype.getLeft=function(obj){var cur=0;if(obj.offsetParent){while(obj.offsetParent){if((new wHELPERS()).getComputedStyle(obj,'position')=='relative'){return cur;}
cur+=obj.offsetLeft;obj=obj.offsetParent;}}
return cur;}
wHELPERS.prototype.getComputedStyle=function(element,styleName){if(window.getComputedStyle){return window.getComputedStyle(element,"").getPropertyValue(styleName);}else if(element.currentStyle){return element.currentStyle[styleName];}
return false;}
var wHelpers=wHELPERS;if(!Array.prototype.push){Array.prototype.push=function(){for(var i=0;i<arguments.length;++i){this[this.length]=arguments[i];}
return this.length;};}
if(wHELPERS){var wFORMS={debugLevel:0,helpers:new wHELPERS(),behaviors:{},onLoadComplete:new Array(),processedForm:null,onLoadHandler:function(){for(var behaviorName in wFORMS.behaviors){wFORMS.debug('wForms/loaded behavior: '+behaviorName);}
for(var i=0;i<document.forms.length;i++){wFORMS.debug('wForms/initialize: '+(document.forms[i].name||document.forms[i].id));wFORMS.processedForm=document.forms[i];wFORMS.addBehaviors(document.forms[i]);}},addBehaviors:function(node){if(!node)return;var deep=arguments[1]?arguments[1]:true;if(!node.nodeType){node=document.getElementById(node);}
if(!node||node.nodeType!=1)return;deep=(arguments.length>1)?arguments[1]:true;wFORMS._addBehaviors(node,deep);},_addBehaviors:function(node,deep){if(node.getAttribute('rel')=='no-behavior'){return false;}
if(node.nodeType==1){for(var behaviorName in wFORMS.behaviors){wFORMS.behaviors[behaviorName].evaluate(node);}
if(deep){for(var i=0,l=node.childNodes.length,cn=node.childNodes;i<l;i++){if(cn[i].nodeType==1)
wFORMS._addBehaviors(cn[i],deep);}}
if(node.tagName.toUpperCase()=='FORM'){for(var i=0;i<wFORMS.onLoadComplete.length;i++){wFORMS.onLoadComplete[i]();}
if(wFORMS.onLoadComplete.length>0){wFORMS.onLoadComplete=new Array();}}}},hasBehavior:function(behaviorName){if(wFORMS.behaviors[behaviorName])return true;return false;},debug:function(txt){msgLevel=arguments[1]||10;if(wFORMS.debugLevel>0&&msgLevel>=wFORMS.debugLevel){if(!wFORMS.debugOutput)
wFORMS.initDebug();if(wFORMS.debugOutput)
wFORMS.debugOutput.innerHTML+="<br />"+txt;}},initDebug:function(){var output=document.getElementById('debugOutput');if(!output){output=document.createElement('div');output.id='debugOutput';output.style.position='absolute';output.style.right='10px';output.style.top='10px';output.style.zIndex='300';output.style.fontSize='x-small';output.style.fontFamily='courier';output.style.backgroundColor='#DDD';output.style.padding='5px';if(document.body)
wFORMS.debugOutput=document.body.appendChild(output);}
if(wFORMS.debugOutput)
wFORMS.debugOutput.ondblclick=function(){this.innerHTML=''};}};wFORMS.NAME="wForms";wFORMS.VERSION="2.0";wFORMS.__repr__=function(){return"["+this.NAME+" "+this.VERSION+"]";};wFORMS.toString=function(){return this.__repr__();};wFORMS.utilities=wFORMS.helpers;var wf=wFORMS;wf.utilities.getSrcElement=wFORMS.helpers.getSourceElement;wf.utilities.XBrowserPreventEventDefault=wFORMS.helpers.preventEvent;wFORMS.helpers.activateStylesheet('wforms-jsonly.css');wFORMS.helpers.addEvent(window,'load',wFORMS.onLoadHandler);}