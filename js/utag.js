/* Tealium - Core library is  wrapped in a function to control firing of multiple events per page */
/* document.write removed to support async */

function _tealium_gacSend(){var f=null;var h="google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_remarketing_only google_remarketing_for_search google_conversion_items google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_is_call google_conversion_page_url".split(" ");
function k(b){return b!=f?escape(b.toString()):""}function l(b,a){var g=k(a);if(""!=g){var c=k(b);if(""!=c)return"&".concat(c,"=",g)}return""}function m(b){var a=typeof b;return b==f||"object"==a||"function"==a?f:String(b).replace(/,/g,"\\,").replace(/;/g,"\\;").replace(/=/g,"\\=")}
function n(b){var a;b=b.google_custom_params;if(!b||"object"!=typeof b||"function"==typeof b.join)a="";else{var g=[];for(a in b)if(Object.prototype.hasOwnProperty.call(b,a)){var c=b[a];if(c&&"function"==typeof c.join){for(var d=[],e=0;e<c.length;++e){var s=m(c[e]);s!=f&&d.push(s)}c=0==d.length?f:d.join(",")}else c=m(c);(d=m(a))&&c!=f&&g.push(d+"="+c)}a=g.join(";")}return""==a?"":"&".concat("data=",encodeURIComponent(a))}
function p(b){return"number"!=typeof b&&"string"!=typeof b?"":k(b.toString())}function q(b){if(!b)return"";b=b.google_conversion_items;if(!b)return"";for(var a=[],g=0,c=b.length;g<c;g++){var d=b[g],e=[];d&&(e.push(p(d.value)),e.push(p(d.quantity)),e.push(p(d.item_id)),e.push(p(d.adwords_grouping)),e.push(p(d.sku)),a.push("("+e.join("*")+")"))}return 0<a.length?"&item="+a.join(""):""}
function r(b,a,g){var c=[];if(b){var d=b.screen;d&&(c.push(l("u_h",d.height)),c.push(l("u_w",d.width)),c.push(l("u_ah",d.availHeight)),c.push(l("u_aw",d.availWidth)),c.push(l("u_cd",d.colorDepth)));b.history&&c.push(l("u_his",b.history.length))}g&&"function"==typeof g.getTimezoneOffset&&c.push(l("u_tz",-g.getTimezoneOffset()));a&&("function"==typeof a.javaEnabled&&c.push(l("u_java",a.javaEnabled())),a.plugins&&c.push(l("u_nplug",a.plugins.length)),a.mimeTypes&&c.push(l("u_nmime",a.mimeTypes.length)));
return c.join("")}function t(b,a,g){var c="";if(a){var c=c+l("ref",a.referrer!=f?a.referrer.toString().substring(0,256):""),d;a=2;try{if(b.top.document==b.document)a=0;else{var e=b.top;try{d=!!e.location.href||""===e.location.href}catch(s){d=!1}d&&(a=1)}}catch(K){}d=a;e="";e=g?g:1==d?b.top.location.href:b.location.href;c+=l("url",e!=f?e.toString().substring(0,256):"");c+=l("frm",d)}return c}
function u(b){return b&&b.location&&b.location.protocol&&"https:"==b.location.protocol.toString().toLowerCase()?"https:":"http:"}function v(b){return b.google_remarketing_only?"googleads.g.doubleclick.net":b.google_conversion_domain||"www.googleadservices.com"}
function w(b,a){var g=navigator,c=document,d="/?";"landing"==a.google_conversion_type&&(d="/extclk?");var d=u(b)+"//"+v(a)+"/pagead/"+[a.google_remarketing_only?"viewthroughconversion/":"conversion/",k(a.google_conversion_id),d,"random=",k(a.google_conversion_time)].join(""),e;a:{e=a.google_conversion_language;if(e!=f){e=e.toString();if(2==e.length){e=l("hl",e);break a}if(5==e.length){e=l("hl",e.substring(0,2))+l("gl",e.substring(3,5));break a}}e=""}return d+=[l("cv",a.google_conversion_js_version),
l("fst",a.google_conversion_first_time),l("num",a.google_conversion_snippets),l("fmt",a.google_conversion_format),l("value",a.google_conversion_value),l("label",a.google_conversion_label),l("oid",a.google_conversion_order_id),l("bg",a.google_conversion_color),e,l("guid","ON"),l("disvt",a.google_disable_viewthrough),l("is_call",a.google_is_call),q(a),r(b,g,a.google_conversion_date),t(b,c,a.google_conversion_page_url),n(a),a.google_remarketing_for_search&&!a.google_conversion_domain?"&srr=n":""].join("")}
function x(){var b=y,a=z,g=u(b)+"//www.google.com/ads/user-lists/"+[k(a.google_conversion_id),"/?random=",Math.floor(1E9*Math.random())].join("");return g+=[l("label",a.google_conversion_label),l("fmt","3"),t(b,document,a.google_conversion_page_url)].join("")}
function A(){var b=y,a=y,g=w(b,a),c=function(a,b,c){
//return'<img height="'+c+'" width="'+b+'" border="0" src="'+a+'" />'
var i = new Image();i.src=a;
};
return 0==a.google_conversion_format&&a.google_conversion_domain==f?'<a href="'+(u(b)+"//services.google.com/sitestats/"+({ar:1,bg:1,cs:1,da:1,de:1,el:1,en_AU:1,en_US:1,en_GB:1,es:1,et:1,fi:1,fr:1,hi:1,hr:1,hu:1,id:1,is:1,it:1,iw:1,ja:1,ko:1,lt:1,nl:1,no:1,pl:1,pt_BR:1,pt_PT:1,ro:1,ru:1,sk:1,sl:1,sr:1,sv:1,th:1,tl:1,tr:1,vi:1,zh_CN:1,zh_TW:1}[a.google_conversion_language]?a.google_conversion_language+
".html":"en_US.html")+"?cid="+k(a.google_conversion_id))+'" target="_blank">'+c(g,135,27)+"</a>":1<a.google_conversion_snippets||3==a.google_conversion_format?c(g,1,1):'<iframe name="google_conversion_frame" width="'+(2==a.google_conversion_format?200:300)+'" height="'+(2==a.google_conversion_format?26:13)+'" src="'+g+'" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no">'+c(g.replace(/\?random=/,"?frame=0&random="),1,1)+"</iframe>"}
function B(){return new Image}function C(){var b=z,a=x(),g=B;"function"===typeof b.opt_image_generator&&(g=b.opt_image_generator);b=g();a+=l("async","1");b.src=a;b.onload=function(){}};var y=window;
if(y)if(/[\?&;]google_debug/.exec(document.URL)!=f){var D=y,E=document.getElementsByTagName("head")[0];E||(E=document.createElement("head"),document.getElementsByTagName("html")[0].insertBefore(E,document.getElementsByTagName("body")[0]));var F=document.createElement("script");F.src=u(window)+"//"+v(D)+"/pagead/conversion_debug_overlay.js";E.appendChild(F)}else{try{var G;var H=y;"landing"==H.google_conversion_type||!H.google_conversion_id||H.google_remarketing_only&&H.google_disable_viewthrough?G=
!1:(H.google_conversion_date=new Date,H.google_conversion_time=H.google_conversion_date.getTime(),H.google_conversion_snippets="number"==typeof H.google_conversion_snippets&&0<H.google_conversion_snippets?H.google_conversion_snippets+1:1,"number"!=typeof H.google_conversion_first_time&&(H.google_conversion_first_time=H.google_conversion_time),H.google_conversion_js_version="7",0!=H.google_conversion_format&&(1!=H.google_conversion_format&&2!=H.google_conversion_format&&3!=H.google_conversion_format)&&
(H.google_conversion_format=1),G=!0);if(G&&(A(),y.google_remarketing_for_search&&!y.google_conversion_domain)){var z=y;C()}}catch(I){}for(var J=y,L=0;L<h.length;L++)J[h[L]]=f};}

//tealium universal tag - utag.sender.googleadwords ut4.0.201502251554, Copyright 2015 Tealium.com Inc. All Rights Reserved.
try{
(function(id,loader,u){
  try{u=utag.o[loader].sender[id]={}}catch(e){u=utag.sender[id]};
  u.ev={'view':1};
  u.cnv_label='NgmlCOCwzwUQuPaE2gM';
  u.cnv_id='994130744';
  u.cnv_val='0';
  u.event_lookup={"prodview" : 1, "cartview" : 1, "purchase" : 1};
  u.map={"outboundDate":"google_custom_params.flight_startdate","inboundDate":"google_custom_params.flight_enddate","departure_airport":"google_custom_params.flight_originid","destination_airport":"google_custom_params.flight_destid","pagetype":"google_custom_params.flight_pagetype","booking_class":"google_custom_params.flight_class"};
  u.extend=[function(a,b){ try{ if(1){b['_cprice']='';b['_cbrand']='';try{b['_corder']=function(){ if (b['_corder'] && b['_corder'] != ''){return b['_random']} else {return ''};}();}catch(e){};b['_cprod']='';b['_ccat']='';b['_cprodname']='';b['_csubtotal']=''} } catch(e){ utag.DB(e) }  }];

  u.send=function(a,b,c,d,e,f){
    if(u.ev[a]||typeof u.ev.all!='undefined'){    
      var gcp={};
      var g={};
      for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};  
      c=[];for(d in utag.loader.GV(u.map)){if(typeof b[d]!='undefined'&&b[d]!=''){e=u.map[d].split(',');for(f=0;f<e.length;f++){
        if(e[f].indexOf("google_custom_params.")==0){
	  gcp[e[f].substring(21)]=b[d]; 
        }else{
          g[e[f]]=b[d];
        }
      }}else{
        c=d.split(":");if(c.length==2 && b[c[0]]==c[1]){g=""+u.event_lookup[u.map[d]];if(g!=""){b._cevent=u.map[d]}}
      }}

      if(typeof gcp.pagetype=="undefined"){
         if(b._cevent=="prodview"){gcp.pagetype="product"};
         if(b._cevent=="cartview"){gcp.pagetype="cart"};
         if(b._corder || b._cevent=="purchase"){gcp.pagetype="purchase"};
      }

      if(gcp.pagetype){
        gcp.prodid=gcp.prodid || b._cprod;
        gcp.price=gcp.price || b._csubtotal;
        gcp.pname=gcp.pname || b._cprodname;
        gcp.pcat=gcp.pcat || b._ccat;
        gcp.value=gcp.value || b._cprice;
      }

      u.cnv_label = g.google_conversion_label || u.cnv_label;
      u.cnv_id = g.google_conversion_id || u.cnv_id;

      u.cnv_label=u.cnv_label.replace(/\s+/g,""); 
      c=u.cnv_label.split(",");
      u.cnv_id=u.cnv_id.replace(/\s+/g,""); 
      e=u.cnv_id.split(",");
      
      for(f=0;f<c.length;f++){
        
        if(typeof b._cprod!='undefined'&&b._cprod.length>0){
          var o = [];
          for(d=0;d<b._cprod.length;d++){
            o.push({value:(b._cprice[d]?b._cprice[d]:"0"),quantity:(b._cquan[d]?b._cquan[d]:"1"),item_id:b._cprod[d],adwords_grouping:"",sku:(b._csku[d]?b._csku[d]:b._cprod[d])});
          }
          g.google_conversion_items=o;
        }

        g.google_conversion_id=parseInt((e[f]?e[f]:e[0]));
        g.google_conversion_format=3;
        g.google_conversion_label=c[f];
        g.google_conversion_value = g.google_conversion_value || ((u.cnv_val!="") ? u.cnv_val : b._csubtotal);
        g.google_conversion_order_id = g.google_conversion_order_id || b._corder;
        g.google_remarketing_only = g.google_remarketing_only || true;
        g.google_custom_params = g.google_custom_params || gcp;

        for(d in g){
          window[d]=g[d];
        }

        window._tealium_gacSend();
      }
    }
  }
  try{utag.o[loader].loader.LOAD(id)}catch(e){utag.loader.LOAD(id)}
})('38','lufthansa.main');
}catch(e){}
//end tealium universal tag
//~~tv:7114.standard.20130320
