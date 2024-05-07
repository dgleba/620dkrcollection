if(typeof(window.console)=='undefined'){window.console={log:function(str){}};}if(typeof(window.__xatajax_included__)!='object'){window.__xatajax_included__={};};(function(){var headtg=document.getElementsByTagName("head")[0];if(!headtg)return;var linktg=document.createElement("link");linktg.type="text/css";linktg.rel="stylesheet";linktg.href="/xatapost/index.php?v=0&-action=css&--id=Sheet.css-37f454ddbee58749461330b937348b6f";linktg.title="Styles";headtg.appendChild(linktg);})();if(typeof(window.__xatajax_included__['xataface/actions/core.js'])=='undefined'){window.__xatajax_included__['xataface/actions/core.js']=true;if(typeof(window.__xatajax_included__['xataface/components/Sheet.js'])=='undefined'){window.__xatajax_included__['xataface/components/Sheet.js']=true;(function(){var $=jQuery;var idIndex=1;window.xataface=window.xataface||{};window.xataface.Sheet=Sheet;function Sheet(options){if(options){Object.assign(this,options);}
if(!this.position){this.position='bottom';}
if(!this.el){this.el=document.createElement('div');}
$(this.el).addClass('xf-sheet').addClass('xf-sheet-'+this.position);if(!this.el.id){this.el.setAttribute('id','xf-sheet-'+(idIndex++));}
this.closeButton=createCloseButton();$(this.el).append(this.closeButton);this.backgroundEl=document.createElement('div');$(this.backgroundEl).addClass('xf-sheet-background');this.loaded=false;}
function createCloseButton(){var btn=document.createElement('a');$(btn).addClass('xf-sheet-close');$(btn).html('<i class="material-icons xf-sheet-close-icon">close</i> <i class="material-icons xf-sheet-back-icon">arrow_back_ios</i>');return btn;}
function registerEvents(sheet){$(sheet.closeButton).on('click',function(e){e.stopPropagation();e.preventDefault();if(sheet.navigationStack&&sheet.navigationStack.length>0){var back=sheet.navigationStack.pop();var el=null;var top=sheet.navigationStack.length>0?sheet.navigationStack[sheet.navigationStack.length-1]:null;if(top&&top.el){el=top.el;}
if(back.back){back=back.back;}
back();adjustSize(sheet,el);if(sheet.navigationStack.length==0){$(sheet.closeButton).removeClass('xf-sheet-back-btn');}}else{sheet.close();}});$(sheet.backgroundEl).on('touchstart click',function(e){e.stopPropagation();e.preventDefault();sheet.close();});}
Object.defineProperty(Sheet.prototype,'installed',{get:function(){if(document.getElementById(this.el.id)){return true;}else{return false;}}})
Sheet.prototype.adjustSize=function(el){adjustSize(this,el);}
Sheet.prototype.load=function(url){if(url){this.url=url;this.loaded=false;}
if(this.loaded){return;}
this.loaded=true;var self=this;var spinner=$('<div class="spin xf-sheet-spinner"></div>');$(this.el).append(spinner);function onLoad(){spinner.remove();$(self.iframe).off('load',onLoad);window.activeSheet=self;adjustSize(self);}
if(!this.iframe){this.iframe=$('<iframe allowtransparency="true" class="xf-sheet-contentframe" src="'+this.url+'"/>').get(0);$(this.iframe).insertBefore(this.closeButton);}else{this.iframe.setAttribute('src',this.url);}
$(this.iframe).on('load',onLoad);}
function adjustSize(sheet,el){if(sheet.position!=='bottom'&&sheet.position!=='top'){return;}
if(!sheet.installed||!sheet.iframe){if(sheet.intervalHandle){clearInterval(sheet.intervalHandle);sheet.intervalHandle=null;}
return;}
if(!el){el=sheet.iframe.contentWindow.document.body;}
var contentHeight=el.scrollHeight;var maxHeight=window.innerHeight*0.8;sheet.iframe.style.height=Math.min(maxHeight,contentHeight)+"px";}
Sheet.prototype.show=function(){if(this.installed){return;}
var self=this;$(document.body).append(this.backgroundEl);$(document.body).append(this.el);setTimeout(function(){$(self.el).addClass('slidein');$(self.backgroundEl).addClass('fadein');},20);registerEvents(this);if(this.url){this.load();}}
Sheet.prototype.pushState=function(backFn){if(!this.navigationStack){this.navigationStack=[];}
this.navigationStack.push(backFn);var el=null;if(backFn.el){el=backFn.el;}
$(this.closeButton).addClass('xf-sheet-back-btn');adjustSize(this,el);}
Sheet.prototype.back=function(){if(!this.iframe){iframe.contentWindow.history.back();}}
Sheet.prototype.close=function(){var self=this;if(!this.installed||this.closing){return;}
this.navigationStack=null;this.closing=true;$(this.el).removeClass('slidein');$(self.backgroundEl).removeClass('fadein');function onAnimationEnd(){self.closing=false;$(self.el).remove();$(self.backgroundEl).remove();}
$(this.el).bind('webkitTransitionEnd',onAnimationEnd);$(this.el).bind('transitionend',onAnimationEnd);}})();}
(function(){window.xataface=window.xataface||{};xataface.isNode=isNode;xataface.isElement=isElement;var Sheet=xataface.Sheet;var $=jQuery;function activateSheetLinks(root){var links=root.querySelectorAll('a[data-xf-sheet-position]');links.forEach(function(link){link.addEventListener('click',function(e){var href=link.getAttribute('href');if(!href){return;}
var sheet=new Sheet({url:href,position:link.getAttribute('data-xf-sheet-position')});sheet.show();e.preventDefault();return false;});});}
registerXatafaceDecorator(activateSheetLinks);function isNode(o){return(typeof Node==="object"?o instanceof Node:o&&typeof o==="object"&&typeof o.nodeType==="number"&&typeof o.nodeName==="string");}
function isElement(o){return(typeof HTMLElement==="object"?o instanceof HTMLElement:o&&typeof o==="object"&&o!==null&&o.nodeType===1&&typeof o.nodeName==="string");}})();}
if(typeof(window.__xatajax_included__['xataface/FormTool/form.js'])=='undefined'){window.__xatajax_included__['xataface/FormTool/form.js']=true;(function(){var $=jQuery;function isMobile(){var body=document.querySelector('body');return(body&&body.classList.contains('small'));}
function installMobileSubmitButton(){if(!isMobile()){return;}
var saveBtn=document.querySelector('input[name="--session:save"]');if(saveBtn){var label=$(saveBtn).parents('[xf-submit-label]').attr('xf-submit-label');if(!label){return;}
saveBtn.style.display='none';var newBtn=$('<button class="submit-btn btn featured">'+label+'</button>');newBtn.on('click',function(e){e.preventDefault();saveBtn.click();return false;});newBtn.insertBefore(saveBtn);}}
function installFieldgroupMenu(){$('ul.xf-fieldgroup-menu > li > a').click(function(){if($(this).hasClass('disabled')){return false;}
var groupName=$(this).parent().attr('data-xf-fieldgroup-name');console.log(groupName);if(groupName){$('[data-form-group="'+groupName+'"]').removeClass('hidden');$(this).prop('disabled',true).addClass('disabled');}
return false;});}
window.addEventListener('DOMContentLoaded',installFieldgroupMenu);window.addEventListener('DOMContentLoaded',installMobileSubmitButton);})();}
if(typeof(window.__xatajax_included__['xataface/widgets/depends.js'])=='undefined'){window.__xatajax_included__['xataface/widgets/depends.js']=true;if(typeof(window.__xatajax_included__['xatajax.form.core.js'])=='undefined'){window.__xatajax_included__['xatajax.form.core.js']=true;if(typeof(window.__xatajax_included__['xatajax.core.js'])=='undefined'){window.__xatajax_included__['xatajax.core.js']=true;XataJax={};(function(){XataJax.Exception=Exception;XataJax.proxy=proxy;XataJax.extend=extend;XataJax.instanceOf=instanceOf;XataJax.publicAPI=publicAPI;XataJax.findConstructor=findConstructor;XataJax.ready=ready;XataJax.main=main;XataJax.load=load;XataJax.subclass=subclass;XataJax.namespace=load;var $=jQuery;function subclass(constructor,superConstructor){function temp(){}
temp.prototype=superConstructor.prototype;var prototypeObject=new temp();prototypeObject.constructor=constructor;constructor.prototype=prototypeObject;}
function Exception(o){var message='';var code=0;var publicProperties={message:message,code:code,toString:function(){return this.getMessage();}};$.extend(this,publicProperties);if(typeof(o)=='string'){this.message=o;}else if(typeof(o)=='object'){$.extend(this,o);}}
var Exception_publicAPI={getMessage:Exception_getMessage,getCode:Exception_getCode};Exception.prototype=Exception_publicAPI;Exception.prototype.constructor=Exception;function Exception_getMessage(){return this.message;}
function Exception_getCode(){return this.code;}
XataJax.errorcodes={};XataJax.nextErrorCode=nextErrorCode;var nextCode=1;function nextErrorCode(){return nextCode++;}
function proxy(cls,obj){var out={};for(var i in obj){if(typeof(obj[i])=='function'){out[i]=$.proxy(obj[i],cls);}else{out[i]=obj[i];}}
return out;}
function instanceOf(obj,cls){if(obj==null||typeof(obj)!='object')return false;if(cls==obj.constructor){return true;}
if(typeof(obj._super)!='undefined'){for(var i=0;i<obj._super.length;i++){var curr=obj._super[i];if(typeof(curr.instanceOf)=='function'&&curr.instanceOf(cls)){return true;}else if(curr.constructor==cls){return true;}}}
return false;}
function extend(target,source){var _super=proxy(target,source);_super.constructor=source.constructor;var oldConstructor=target.constructor;$.extend(target,_super);target.constructor=oldConstructor;if(typeof(target._super)=='undefined'){target._super=[];}
target._super.push(_super);target.getSuper=function(cls){for(var i=0;i<target._super.length;i++){if((typeof(cls)=='undefined')||(target._super[i].constructor==cls)){return target._super[i];}}
return null;};target.instanceOf=function(obj){return instanceOf(this,obj);};if(typeof(target.init)=='function'){target.init();}}
function publicAPI(obj,properties){$.extend(obj,properties);}
function findConstructor(path){var parts=path.split('.');var pkg=window;while(parts.length>0){pkg=pkg[parts.shift()];if(!pkg){return null;}}
return pkg;}
var readyFuncs=[];var mainLoaded=false;function ready(func){if(func==undefined)return main(function(){});if(mainLoaded){func();}else{readyFuncs.push(func);}}
function main(func){mainLoaded=true;$.each(readyFuncs,function(){this();});readyFuncs=[];func();}
function load(ns,createIfUndefined){if(typeof(createIfUndefined)=='undefined'){createIfUndefined=true;}
var parts=ns.split('.');var context=window;while(parts.length>0){var part=parts.shift();if(typeof(context[part])=='undefined'){if(createIfUndefined==false){return null;}
context[part]={};}
context=context[part];}
return context;}})();}
(function(){var $=jQuery;XataJax.form={findField:findField,createForm:createForm,submitForm:submitForm};function findField(startNode,fieldName){var field=null;$(startNode).parents('.xf-form-group').each(function(){if(field){return;}
field=$('[data-xf-field="'+fieldName+'"]',this).get(0);});if(!field){var parentGroup=$(startNode).parents('form').get(0);field=$('[data-xf-field="'+fieldName+'"]',parentGroup).get(0);}
return field;}
function createForm(method,params,target,action){if(typeof(action)=='undefined')action=DATAFACE_SITE_HREF;var form=$('<form></form>').attr('action',action).attr('method',method);if(target)form.attr('target',target);$.each(params,function(key,value){form.append($('<input/>').attr('type','hidden').attr('name',key).attr('value',value));});return form;}
function submitForm(method,params,target,action){var form=createForm(method,params,target,action);$('body').append(form);form.submit();}})();}
if(typeof(window.__xatajax_included__['jsonPath.js'])=='undefined'){window.__xatajax_included__['jsonPath.js']=true;(function(){XataJax.jsonPath=jsonPath;function jsonPath(obj,expr,arg){var P={resultType:arg&&arg.resultType||"VALUE",result:[],normalize:function(expr){var subx=[];return expr.replace(/[\['](\??\(.*?\))[\]']|\['(.*?)'\]/g,function($0,$1,$2){return"[#"+(subx.push($1||$2)-1)+"]";}).replace(/'?\.'?|\['?/g,";").replace(/;;;|;;/g,";..;").replace(/;$|'?\]|'$/g,"").replace(/#([0-9]+)/g,function($0,$1){return subx[$1];});},asPath:function(path){var x=path.split(";"),p="$";for(var i=1,n=x.length;i<n;i++)
p+=/^[0-9*]+$/.test(x[i])?("["+x[i]+"]"):("['"+x[i]+"']");return p;},store:function(p,v){if(p)P.result[P.result.length]=P.resultType=="PATH"?P.asPath(p):v;return!!p;},trace:function(expr,val,path){if(expr!==""){var x=expr.split(";"),loc=x.shift();x=x.join(";");if(val&&val.hasOwnProperty(loc))
P.trace(x,val[loc],path+";"+loc);else if(loc==="*")
P.walk(loc,x,val,path,function(m,l,x,v,p){P.trace(m+";"+x,v,p);});else if(loc===".."){P.trace(x,val,path);P.walk(loc,x,val,path,function(m,l,x,v,p){typeof v[m]==="object"&&P.trace("..;"+x,v[m],p+";"+m);});}
else if(/^\(.*?\)$/.test(loc))
P.trace(P.eval(loc,val,path.substr(path.lastIndexOf(";")+1))+";"+x,val,path);else if(/^\?\(.*?\)$/.test(loc))
P.walk(loc,x,val,path,function(m,l,x,v,p){if(P.eval(l.replace(/^\?\((.*?)\)$/,"$1"),v instanceof Array?v[m]:v,m))P.trace(m+";"+x,v,p);});else if(/^(-?[0-9]*):(-?[0-9]*):?([0-9]*)$/.test(loc))
P.slice(loc,x,val,path);else if(/,/.test(loc)){for(var s=loc.split(/'?,'?/),i=0,n=s.length;i<n;i++)
P.trace(s[i]+";"+x,val,path);}}
else
P.store(path,val);},walk:function(loc,expr,val,path,f){if(val instanceof Array){for(var i=0,n=val.length;i<n;i++)
if(i in val)
f(i,loc,expr,val,path);}
else if(typeof val==="object"){for(var m in val)
if(val.hasOwnProperty(m))
f(m,loc,expr,val,path);}},slice:function(loc,expr,val,path){if(val instanceof Array){var len=val.length,start=0,end=len,step=1;loc.replace(/^(-?[0-9]*):(-?[0-9]*):?(-?[0-9]*)$/g,function($0,$1,$2,$3){start=parseInt($1||start);end=parseInt($2||end);step=parseInt($3||step);});start=(start<0)?Math.max(0,start+len):Math.min(len,start);end=(end<0)?Math.max(0,end+len):Math.min(len,end);for(var i=start;i<end;i+=step)
P.trace(i+";"+expr,val,path);}},eval:function(x,_v,_vname){try{return $&&_v&&eval(x.replace(/(^|[^\\])@/g,"$1_v").replace(/\\@/g,"@"));}
catch(e){throw new SyntaxError("jsonPath: "+e.message+": "+x.replace(/(^|[^\\])@/g,"$1_v").replace(/\\@/g,"@"));}}};var $=obj;if(expr&&obj&&(P.resultType=="VALUE"||P.resultType=="PATH")){P.trace(P.normalize(expr).replace(/^\$;?/,""),obj,"$");return P.result.length?P.result:false;}}})();}
(function(){var $=jQuery;var jsonPath=XataJax.jsonPath;function findField(startNode,fieldName){return XataJax.form.findField(startNode,fieldName);}
function extractVars(str){var out=[];var len=str.length;for(var i=0;i<len;i++){var c=str.charAt(i);if(c==='{'){var varName='';for(var j=i+1;j<len;j++){var d=str.charAt(j);if(d==='}'){break;}
varName+=d;}
i=j;out.push(varName);}}
return out;}
function replaceVars(sourceField,str){var vars=extractVars(str);var len=vars.length;for(var i=0;i<len;i++){var fld=findField(sourceField,vars[i]);str=str.replace('{'+vars[i]+'}',encodeURIComponent($(fld).val()));}
return str;}
function update(field){var urlTemplate=$(field).attr('data-xf-update-url');var contentType='json';function val(){var tagName=$(field).prop("tagName").toLowerCase();if(tagName=='input'||tagName=='select'||tagName=='textarea'){return $(field).val();}else if(contentType=='html'){return $(field).html().trim();}else{return $(field).text().trim();}}
function setVal(newval){var tagName=$(field).prop("tagName").toLowerCase();if(tagName=='input'||tagName=='select'||tagName=='textarea'){return $(field).val(newval);}else if(contentType=='html'){return $(field).html(newval);}else{return $(field).text(newval);}}
if(urlTemplate.indexOf('#')<0){urlTemplate+='#';contentType='html';var tagName=$(field).prop("tagName").toLowerCase();if(tagName=='input'||tagName=='select'||tagName=='textarea'){contentType='text';}
if($(field).attr('data-xf-update-content-type')){contentType=$(field).attr('data-xf-update-content-type');}}
var updateCondition=$(field).attr('data-xf-update-condition');if(updateCondition){if(updateCondition=='empty'&&val()){return;}}
var query=urlTemplate.substr(urlTemplate.indexOf('#')+1);urlTemplate=urlTemplate.substr(0,urlTemplate.indexOf('#'));if(urlTemplate){var url=replaceVars(field,urlTemplate);$.get(url,function(res){if(contentType=='json'){var results=jsonPath(res,query);if(results&&results.length>0){var oldVal=val();if(oldVal!=results[0]){setVal(results[0]);$(field).trigger('change');}}}else{var oldVal=val();if(oldVal!=res){setVal(res);$(field).trigger('change');}}});}else{var newVal=replaceVars(field,query);var oldVal=val();if(oldVal!=newVal){setVal(newVal);$(field).trigger('change');}}}
registerXatafaceDecorator(function(node){$('[data-xf-update-url]').each(function(){var depField=this;var varNames=extractVars($(depField).attr('data-xf-update-url'));var event=$(depField).attr('data-xf-update-event')||'change';var len=varNames.length;for(var i=0;i<len;i++){var varName=varNames[i];var fld=findField(this,varName);if(fld){$(fld).on(event,function(){update(depField);});}}
update(depField);});});})();}
if(typeof(window.__xatajax_included__['xataface/fab.js'])=='undefined'){window.__xatajax_included__['xataface/fab.js']=true;if(typeof(window.__xatajax_included__['xataface/components/ActionSheet.js'])=='undefined'){window.__xatajax_included__['xataface/components/ActionSheet.js']=true;(function(){var $=jQuery;var xataface=window.xataface||{};window.xataface=xataface;xataface.ActionSheet=ActionSheet;function ActionSheet(opts){if(opts instanceof HTMLElement){opts={modelEl:opts};}else if((typeof opts)==='string'){opts={modelEl:document.querySelector(opts)};}
this.position=opts.position||'bottom';this.parent=opts.parent||null;this.modelEl=opts.modelEl;this.installed=false;this.backgroundEl=this.parent?this.parent.backgroundEl:document.createElement('div');this.closeButton=createCloseButton(this);$(this.backgroundEl).addClass('xataface-components-ActionSheet-background');this.el=null;}
ActionSheet.prototype.show=show;function build(menu){if(menu.el){return menu.el;}
var srcUl=menu.modelEl;var root=$('<ul class="xataface-components-ActionSheet xataface-components-ActionSheet-'+menu.position+'">');srcUl.classList.forEach(function(cls){if(cls.startsWith('xf-record-status')){$(root).addClass(cls);}});if($(srcUl).attr('xf-record-id')){root.attr('xf-record-id',$(srcUl).attr('xf-record-id'));}else{var xfRecordIdParent=$(srcUl).parents('[xf-record-id]').first();if(xfRecordIdParent.length>0){root.attr('xf-record-id',xfRecordIdParent.attr('xf-record-id'));xfRecordIdParent.get(0).classList.forEach(function(cls){if(cls.startsWith('xf-record-status')){$(root).addClass(cls);}});}}
var closeBackLi=$('<li class="close">');closeBackLi.append(menu.closeButton);root.append(closeBackLi);$('>li',srcUl).each(function(){var link=$('>a',this).first();var span=link.length===0?$('>span',this).first():$('>span',link).first();var labelEl=span.length>0?span:link.length>0?link:$(this);var label=labelEl.text();var icon=link.length===0?$('>i',this).first():$('>i',link).first();var node=$('<li><a><span></span></a></li>');link.each(function(){this.classList.forEach(function(cls){$('a>',node).addClass(cls);});});this.classList.forEach(function(cls){$(node).addClass(cls);});$('span',node).text(label);if(icon.length>0){$('>a',node).prepend(icon.clone());}
var subUl=$('>ul',this).first();if(subUl.length>0){if(!label){$('span',node).text('More...');}
if($('i.material-icons',node).text()=='more_vert'){$('i.material-icons',node).text('folder');}
$('>a',node).append($('<i class="material-icons">navigate_next</i>'));$('>a',node).click(function(){var subMenu=new ActionSheet({modelEl:subUl.get(0),parent:menu});subMenu.show($(menu.el).height());});}else{if(link.length>0){$('>a',node).click(function(){$(link).get(0).click();menu.close(true);});}}
root.append(node);});menu.el=root.get(0);return menu.el;}
function createCloseButton(menu){var btn=document.createElement('a');$(btn).addClass('xf-actionsheet-close');if(menu.parent){$(btn).html('<i class="material-icons xataface-components-ActionSheet-back-icon">arrow_back_ios</i>');}else{$(btn).html('<i class="material-icons xataface-components-ActionSheet-close-icon">close</i>');}
return btn;}
function registerEvents(menu){$(menu.closeButton).on('click',function(e){e.stopPropagation();e.preventDefault();menu.close();});$(menu.backgroundEl).on('touchstart click',function(e){e.stopPropagation();e.preventDefault();menu.close(true);});}
function show(startingHeight){if(this.installed){return;}
this.installed=true;var menuEl=build(this);if(startingHeight){$(menuEl).css({'height':startingHeight+"px",'max-height':'100vh'});}
var self=this;function onAnimationEnd(){}
var fadeInBackgound=false;if(!document.contains(this.backgroundEl)){fadeInBackground=true;$(document.body).append(this.backgroundEl);}
$(document.body).append(menuEl);setTimeout(function(){$(menuEl).css({'height':'','max-height':''});$(self.el).addClass('slidein');if(fadeInBackground){$(self.backgroundEl).addClass('fadein');}},20);registerEvents(this);if(this.parent){$(this.parent.el).remove();this.parent.el=null;this.parent.installed=false;}}
ActionSheet.prototype.close=function(all){var self=this;if(!this.installed||this.closing){return;}
this.closing=true;if(this.parent&&!all){this.parent.show($(this.el).height());$(this.el).remove();this.closing=false;return;}
function onAnimationEnd(){self.closing=false;$(self.el).remove();$(self.backgroundEl).remove();}
$(this.backgroundEl).bind('webkitTransitionEnd',onAnimationEnd);$(this.backgroundEl).bind('transitionend',onAnimationEnd);$(this.el).removeClass('slidein');$(self.backgroundEl).removeClass('fadein');}})();}
(function(){var ActionSheet=window.xataface.ActionSheet;function installFab(){var $=jQuery;$('#zoomBtn').click(function(){var pageActionsUl=$('div.page-actions > nav > ul').first();if(pageActionsUl.length>0){var menu=new ActionSheet(pageActionsUl.get(0));menu.show();}});var pageActionsUl=$('div.page-actions > nav > ul').first();if($('>li',pageActionsUl).length>0){$('.zoom').css('display','');}}
function updatePosition(){var zoom=document.querySelector('.zoom');if(zoom){var footer=document.querySelector('.mobile-footer');if(footer){zoom.style.bottom=(footer.offsetHeight+10)+"px";}}}
window.addEventListener('xf-viewport-changed',updatePosition);window.addEventListener('DOMContentLoaded',installFab);})();}
if(typeof(XataJax)!="undefined")XataJax.ready();