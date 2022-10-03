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