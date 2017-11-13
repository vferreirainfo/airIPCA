// -- Revision 2.1.3 -->
// -- Copyright (c) 2007-2009 e-dynamics GmbH  All rights reserved. -->
// -- $DateTime: 2011/02/24 10:15:00 $ -->
function Supermap(){
    // configure
	this.collectData = true; // tracking on/off
	this.randomtracking = 1;  // 1 = every user
	this.dom = 'upi.e-heat.de';
	this.accountID = 'eh303031_6161';
	this.maxHeight = 5000; // maximum height
	this.interval = 1000; // time between clicks in milliseconds
	this.startPointID = ['head', 'ch-wrp']; // id of the upper left corner
	
	this.debug = false; // debugging on (no requests will be send)
}
// define global segments
Supermap.prototype.globalSegments = function(){   
};
Supermap.prototype.loadEvent=function(){var a=this;this.bind=function(b){a.getClick(b);};this.win.document.attachEvent?this.win.document.attachEvent("onmousedown",this.bind):this.win.document.addEventListener("mousedown",this.bind,false);};
Supermap.prototype.removeEvent=function(){this.win.document.attachEvent?this.win.document.detachEvent("onmousedown",this.bind):this.win.document.removeEventListener("mousedown",this.bind,false);};
Supermap.prototype.getClick=function(b){b=b||this.win.event;if((b.which&&b.which==3)||(b.button&&b.button==2)){return;}var a=new Date();if(a.getTime()-this.timeDiff<this.interval){return;}this.timeDiff=a.getTime();this.x=(b.pageX||(b.clientX+(this.win.pageXOffset||this.win.document.documentElement.scrollLeft||this.win.document.body.scrollLeft)));this.y=(b.pageY||(b.clientY+(this.win.pageYOffset||this.win.document.documentElement.scrollTop||this.win.document.body.scrollTop)));if(this.x>this.getInnerWidth()||this.y>this.maxHeight){return;}var c=this.getOffset(0,0);this.x+=c[0];this.y+=c[1];this.request();};
Supermap.prototype.request=function(){var a="http"+(this.win.location.protocol.indexOf("https:")===0?"s":"")+"://"+this.dom+"/"+this.accountID+"/img.gif?";a+="x="+this.x+"&y="+this.y+"&t="+(this.timeDiff-this.time)+"&w="+this.getWidth()+"&p="+encodeURIComponent(this.getPage());a+=this.getSegments()?this.getSegments():"";if(this.debug){alert(decodeURIComponent(a));}else{this.sendRequest(a);}};
Supermap.prototype.sendRequest=function(a){if(this.win.document.images){this.images[this.index]=new Image();this.images[this.index].src=a;this.index++;}else{this.win.document.write('<img alt="" border="0" name="heatimage" width="1" height="1" src="'+a+'">');}};
Supermap.prototype.go=function(){this.images=[];this.index=0;this.myframes=[];this.myMaps=[];this.IE=(navigator.appName=="Microsoft Internet Explorer")?true:false;this.loadEvent();};
Supermap.prototype.deleteMap=function(){for(var a in this.myMaps){if(typeof(this.myMaps.hasOwnProperty)!==undefined&&this.myMaps.hasOwnProperty(a)){this.myMaps[a].deleteMap();delete this.myMaps[a];}}if(this.win.document!==null){this.removeEvent();}};
Supermap.prototype.defSegment=function(a,b){if(this.segm){this.segm[a]=b;}};
Supermap.prototype.getInnerWidth=function(){return this.IE?this.win.document.body.clientWidth:this.win.innerWidth;};
Supermap.prototype.getInnerHeight=function(){return this.IE?this.win.document.body.clientHeight:this.win.innerHeight;};
Supermap.prototype.getWidth=function(){return this.IE?this.win.document.body.clientWidth:this.win.innerWidth;};
Supermap.prototype.onload=function(){var a=this;if(this.win.document.addEventListener){this.win.document.addEventListener("DOMContentLoaded",function(){a.win.document.removeEventListener("DOMContentLoaded",arguments.callee,false);a.init();},false);}else{if(this.win.document.attachEvent){this.win.document.attachEvent("onreadystatechange",function(){if(a.win.document.readyState==="complete"){a.win.document.detachEvent("onreadystatechange",arguments.callee);a.init();}});}}};
Supermap.prototype.init=function(){var a=this.win.document.getElementsByTagName("frame");var d=this.win.document.getElementsByTagName("iframe");this.intervalID=0;var c=0;var g=this;for(var b=0;b<a.length;b++){this.myframes[c]=a[b];c++;}for(var f=0;f<d.length;f++){this.myframes[c]=d[f];c++;}if(this.IE){for(f=0;f<this.myframes.length;f++){try{this.myMaps[f]=new Childmap(this.myframes[f],this);}catch(h){continue;}}}else{this.intervalID=setInterval(function(){g.checkWindow(g.myframes);},10);this.timeoutID=setTimeout(function(){clearInterval(g.intervalID);},50000);}};
Supermap.prototype.checkWindow=function(c){var b=[];for(var a=0;a<c.length;a++){try{if(c[a].contentWindow===undefined||c[a].contentWindow.document===undefined||c[a].contentWindow.document.URL===undefined||c[a].contentWindow.document.URL.indexOf("about:blank")===0){return;}else{b[b.length]=c[a];}}catch(d){continue;}}clearInterval(this.intervalID);clearTimeout(this.timeoutID);for(a=0;a<b.length;a++){try{this.myMaps[a]=new Childmap(b[a],this);}catch(d){}}};
Supermap.prototype.setPos=function(a){this.offX=this.offY=0;if(a.offsetParent){do{this.offX+=a.offsetLeft;this.offY+=a.offsetTop;}while(a=a.offsetParent);}else{if(a.x){this.offX+=a.x;this.offY+=a.y;}}};
Supermap.prototype.getOffset=function(b,a){this.setPos(this.startPoint);return[b-this.offX,a-this.offY];};
Heatmap.prototype=new Supermap;
Heatmap.prototype.constructor=Heatmap;function Heatmap(){Supermap.call(this);this.win=top.window;for(var a=this.startPointID.length;a--;){if(this.win.document.getElementById(this.startPointID[a])){this.startPoint=this.win.document.getElementById(this.startPointID[a]);break;}}if(!this.pagename){this.pagename=this.win.location.pathname;}if(this.collectData===true){this.go();}}
Heatmap.prototype.go=function(){var a=Math.random()*this.randomtracking;if(a>1){return;}Supermap.prototype.go.call(this);this.segm={};this.timeDiff=new Date();this.time=this.timeDiff=this.timeDiff.getTime();if(!this.pagename){this.pagename=this.win.location.pathname;}if(!this.startPoint){this.startPoint=this.win.document.getElementsByTagName("body")[0].childNodes[1];}this.globalSegments();this.init();};
Heatmap.prototype.getPage=function(){return this.pagename;};
Heatmap.prototype.getSegments=function(){var a="";for(var b in this.segm){if(typeof(this.segm.hasOwnProperty)!="undefined"&&this.segm.hasOwnProperty(b)){a+="&s_"+b+"="+encodeURIComponent(this.segm[b]);}}return a;};
Childmap.prototype=new Supermap;
Childmap.prototype.constructor=Childmap;function Childmap(a,b){Supermap.call(this);this.frm=a;this.win=a.contentWindow;this.daddy=b;if(this.collectData===true){this.go();}}
Childmap.prototype.go=function(){Supermap.prototype.go.call(this);this.time=this.timeDiff=this.daddy.time;this.init();};
Childmap.prototype.getPage=function(){return this.daddy.getPage();};
Childmap.prototype.defSegment=function(a,b){this.daddy.defSegment(a,b);};
Childmap.prototype.getSegments=function(){return this.daddy.getSegments();};
Childmap.prototype.getWidth=function(){return this.daddy.getWidth();};Childmap.prototype.getOffset=function(b,a){var c=this.frm;if(this.IE){b+=2;a+=2;}b+=(c.offsetWidth-c.clientWidth)/2;a+=(c.offsetHeight-c.clientHeight)/2;this.setPos(c);return this.daddy.getOffset(this.offX+b,this.offY+a);};

function ed_write_cookie(s_coo){var d_now=new Date();var d_exp=new Date(d_now.getTime()+36806400000);var expiry="; expires="+d_exp.toGMTString();document.cookie='e_coo='+escape(s_coo)+expiry+'; path=/'+(((typeof(gFpcDom)!='undefined')&&(gFpcDom!=''))?('; domain='+gFpcDom):(''))}
function ed_is_new(){var s_coo='';var d_now=new Date();d_now=Math.round(d_now.getTime()/1000000);if(dcsGetCookie('e_coo')){s_coo=dcsGetCookie('e_coo');/^(\d*?),/i.exec(s_coo);var i_time=parseInt(RegExp.$1,10);/^\d*?,([rf])/i.exec(s_coo);var s_nor=RegExp.$1;if(i_time+2<d_now){ed_write_cookie(s_coo.replace(/^\d*?,[rf]/i,d_now.toString()+',r'));return'returning'}else{ed_write_cookie(s_coo.replace(/^\d*?,/i,d_now.toString()+','));return(s_nor=='f')?'new':'returning'}}else{ed_write_cookie(d_now.toString()+',f');return'new'}}
function ed_build_page(pagename) {
    try {
        if (top.e_h != undefined) {
            top.e_h.deleteMap();
            delete top.e_h;
        }
        top.e_h = new Heatmap();
        top.e_h.pagename = pagename;
        top.e_h.defSegment('h_nvr', ed_is_new());
        _ed.heatmap.segments.init(); // Start segments module from wtedyn.js
        _ed.heatmap.segments.setSegments(top.e_h);
        if (gImages[0]) {
            top.e_h.defSegment('h_wtstring', gImages[0].src.substring(gImages[0].src.indexOf('dcs.gif?') + 8));
        }
    } catch(e) {_ed.err.push(e);}
}
function ed_track(){
    try {
        var cases = DCSext.ShownPage.replace(/http:\/\/.*?\//,'/');
        /(nodeid=[^\&]*)/i.exec(cases);
        var r_node = RegExp.$1;
        /(l=[^\&]*)/i.exec(cases);
        var r_l =  RegExp.$1; 
        /(cid=[^\&]*)/i.exec(cases);
        var r_cid =  RegExp.$1;
        cases = cases.slice(0,cases.indexOf('?')+1)+r_node+'&'+r_l+'&'+r_cid;     
        
        switch (cases){
            case '/online/portal/lh/de/homepage?nodeid=1649106&l=de&cid=18002': // DE (DE)
            case '/online/portal/lh/us/homepage?nodeid=1678690&l=en&cid=1000390': // US (EN)
            case '/online/portal/lh/it/homepage?nodeid=1680030&l=it&cid=1000273': // IT (IT)
            case '/online/portal/lh/uk/homepage?nodeid=1679381&l=en&cid=1000243': // UK (EN)
            case '/online/portal/lh/fr/homepage?nodeid=1681382&l=fr&cid=1000241': // FR (FR)
            case '/online/portal/lh/es/homepage?nodeid=1680697&l=es&cid=1000233': // ES (ES)
            case '/online/portal/lh/jp/homepage?nodeid=1665490&l=ja&cid=1000276': // JP (JA)
            case '/online/portal/lh/in/homepage?nodeid=1662862&l=en&cid=1000267': // IN (EN)
            case '/online/portal/lh/ru/homepage?nodeid=1672090&l=ru&cid=1000348': // RU (RU)
            case '/online/portal/lh/at/homepage?nodeid=1648585&l=de&cid=18001': // AT (DE)
            case '/online/portal/lh/hk/homepage?nodeid=1661530&l=en&cid=1000259': // HK (EN)                       
            // Expert Traveller          
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=3139037&l=de&cid=18002': // DE (DE)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1678690&l=en&cid=1000390': // US (EN)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1680030&l=it&cid=1000273': // IT (IT)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1679381&l=en&cid=1000243': // UK (EN)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1681382&l=fr&cid=1000241': // FR (FR)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1680697&l=es&cid=1000233': // ES (ES)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1665490&l=ja&cid=1000276': // JP (JA)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1662862&l=en&cid=1000267': // IN (EN)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1672090&l=ru&cid=1000348': // RU (RU)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1648585&l=de&cid=18001': // AT (DE)
            case '/online/portal/lh/de/homepage/myhomepage/expert_traveller?nodeid=1661530&l=en&cid=1000259': // HK (EN) 
                if(window.location.search && window.location.search.indexOf('action=CheckInAction')!=-1){
                    ed_build_page('/checkin'+cases);                 
                }else{
                    ed_build_page(cases);
                }
                break;  
            case '/online/portal/lh/de/specials?nodeid=1649181&l=de&cid=18002': // DE Specials 
            case '/online/portal/lh/de/info_and_services/flightinfo/arrivals_departures?nodeid=1649230&l=de&cid=18002': // DE Ankunft
                ed_build_page(cases);
                break;
        }         
        var travel = DCSext.ShownPage;
        switch (travel){
            case 'http://book.lufthansa.com:80/Lufthansa/wds/FFCR.jsp': // Faredriven Flow Matrix
            case 'http://book.lufthansa.com:80/Lufthansa/wds/FFPR.jsp': // Faredriven Flow Upsell
            case 'http://book.lufthansa.com:80/Lufthansa/wds/FARE.jsp': // Faredriven Flow Fare
            case 'http://book.lufthansa.com:80/Lufthansa/wds/ALPI.jsp': // Faredriven Flow Alpi
            case 'http://book.lufthansa.com:80/Lufthansa/wds/PURF.jsp': // Faredriven Flow Purf
            case 'http://book.lufthansa.com:80/Lufthansa/wds/COFD.jsp': // faredriven Flow Cofd
            case 'http://book.lufthansa.com:80/Lufthansa/wds/AVAI.jsp': // Schedule Driven Flow
            case 'http://book.lufthansa.com:80/Lufthansa/wds/FFCO.jsp': // Oneway Flow
            case 'http://book.lufthansa.com:80/Lufthansa/wds/AVAC.jsp': // Complex Search Flow
                ed_build_page(travel);
                break;
        }               
    } catch(e) {_ed.err.push(e);}    
}
ed_track();