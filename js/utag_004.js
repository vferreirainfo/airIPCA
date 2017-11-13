//tealium universal tag - utag.loader ut4.004.201605121457, Copyright 2016 Tealium.com Inc. All Rights Reserved. 
var utag_condload=false;try{(function(){function ul(src,a,b){a=document;b=a.createElement('script');b.language='javascript';b.type='text/javascript';b.src=src;a.getElementsByTagName('head')[0].appendChild(b)};if((""+document.cookie).match("utag_env_lufthansa_main=([^\S;]*)")){if(RegExp.$1.indexOf("/prod/") === -1) {ul(RegExp.$1);utag_condload=true;__tealium_default_path='//tags.tiqcdn.com/utag/lufthansa/main/prod/';}}})();}catch(e){};try{
//Bug fix to force preloaders to go inside the if(utag_condload) block
}catch(e){};
if(!utag_condload){try{
/*
 * @author: Kevin Thomas Faurholt - Tealium, Inc.
 * cookie helper methods
 */
(function() {
  window.TEALIUM = window.TEALIUM || {};
  window.TEALIUM.CookieHandler = window.TEALIUM.CookieHandler || function() {
    var cookieFactory={"_lib":"Tealium Client Services","_author":"Kevin Thomas Faurholt","_version":"1.1"};
    var add=function(_3,_4,_5){_3[_4]=_5;_5.parent=_3;return 1;};
    add(cookieFactory,"util",{"version":"1.0","escape":function(_6){var _7=window.encodeURIComponent||window.escape;return _7.apply(this,[_6]);},"unescape":function(_8){var _9=window.decodeURIComponent||window.unescape;return _9.apply(this,[_8]);},"isEmpty":function(_a){return (!_a||0===_a.length||/^\s*$/.test(_a));},"decodeBase64":function(_b){var e={},i,b=0,c,x,l=0,a,r="",w=String.fromCharCode,L=_b.length;var A="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";for(i=0;i<64;i++){e[A.charAt(i)]=i;}for(x=0;x<L;x++){c=e[_b.charAt(x)];b=(b<<6)+c;l+=6;while(l>=8){((a=(b>>>(l-=8))&255)||(x<(L-2)))&&(r+=w(a));}}return r;}});
    add(cookieFactory,"cookie",{"version":"1.1","domain":function(){var _17=document.domain;if(!/\.[0-9]{1,3}$/.test(_17)){var _18=_17.lastIndexOf(".");if(_18<0){return "";}_18=_17.lastIndexOf(".",_18-1);if(-1<_18&&_17.match(/.*[.](co|com|net|org|ltd|gov)[.][A-Za-z]*$/i)){_18=_17.lastIndexOf(".",_18-1);}if(0<_18){_17=_17.substring(_18);}return _17.length>5?_17:"";}},"get":function(_19){var _1a=_19+"=";var _1b=document.cookie.split(";");for(var i=0;i<_1b.length;i++){var _1d=_1b[i].replace(/^(\s|\xa0)*/,"");if(_1d.indexOf(_1a)===0){return this.parent.util.unescape(_1d.substring(_1a.length,_1d.length));}}return null;},"set":function(_1e,_1f,_20,_21){var _22="",_23="",_24="";if(_20){if(_20===-1){_22=";expires=Thu, 01-Jan-70 00:00:01 GMT";}else{var _25=new Date();_25.setTime(_25.getTime()+(_20*24*60*60*1000));_22=";expires="+_25.toGMTString();}}if(_21){_24=";path="+_21;}else{_24=";path=/";}var _26=this.domain();if(_26){_23=";domain="+_26;}document.cookie=(_1e+"="+this.parent.util.escape(_1f)+_22+_24+_23);return 1;},"remove":function(_27){return this.set(_27,"",-1);}});
    add(cookieFactory,"subcookie",{"version":"1.0","nameValueSeparator":"$$:$$","subcookieSeparator":"$$/$$","get":function(_28,_29){var _2a=this.parent.cookie.get(_28);if(!_2a){return null;}var _2b=_2a.split(this.subcookieSeparator);var _2c={};for(var i=0,_2e=_2b.length;i<_2e;i++){var _2f=_2b[i].split(this.nameValueSeparator);_2c[_2f[0]]=_2f[1];}if(_29){if(_2c.hasOwnProperty(_29)){return _2c[_29];}return null;}return _2c;},"set":function(_30,_31,_32,_33){var _34=this.get(_30);if(_34){for(var i in _34){if(!(_31.hasOwnProperty(i))){_31[i]=_34[i];}}}var _36=[];for(var u in _31){if(_31.hasOwnProperty(u)){_36.push(u+this.nameValueSeparator+_31[u]);}}_36=_36.join(this.subcookieSeparator);return this.parent.cookie.set(_30,_36,_32,_33);},"remove":function(_38,_39,_3a,_3b){var _3c=this.parent.cookie.get(_38);if(!_3c){return 0;}var _3d=[];var _3e=_3c.split(this.subcookieSeparator);for(var i=0,_40=_3e.length;i<_40;i++){var _41=_3e[i].split(this.nameValueSeparator);if(_41[0]!==_39){_3d.push(_41[0]+this.nameValueSeparator+_41[1]);}}_3d=_3d.join(this.subcookieSeparator);return this.parent.cookie.set(_38,_3d,_3a,_3b);}});Object.hasOwnProperty=(function(){if(Object.prototype.hasOwnProperty){return function(_42,_43){return Object.prototype.hasOwnProperty.call(_42,_43);};}var _44={};var _45="__proto__";if(_44[_45]){return function(_46,_47){var _48;var _49=_46[_45];_46[_45]=null;_48=_46[_47]?true:false;_46[_45]=_49;return _48;};}return function(_4a,_4b){return _4a.constructor&&_4a.constructor.prototype[_4b]!==_4a[_4b];};})();
    return cookieFactory;
  }
})();
}catch(e){}};
if(!utag_condload){try{
// syntax: see notes
var blacklist = [
  [ "", ".lufthansa.com", "/online/portal/lh/de/my_account/irreg_corner"]
]

// do not edit below
for (var i=0; i<blacklist.length; i++){
  if (blacklist[i].length == 3){
    if (blacklist[i][0] == "" || blacklist[i][0].toLowerCase() == window.location.protocol.toLowerCase()){
      if (window.location.hostname.toLowerCase().indexOf(blacklist[i][1].toLowerCase()) > -1){
	if (window.location.pathname == blacklist[i][2]){
	  utag_condload = true;
	  break;
	}
      }
    }
  }
}
  
}catch(e){}};
if (typeof utag == "undefined" && !utag_condload) {
  var utag = {
    id:"lufthansa.main",
    o:{},
    sender: {},
    send: {},
    rpt: {
      ts: {
        a: new Date()
      }
    },
    dbi: [],
    loader: {
      q: [],
      lc: 0,
      f: {},
      p: 0,
      ol: 0,
      wq: [],
      ft: 0,
      rf: 0,
      ri: 0,
      rp: 0,
      rq: [],
      lh: function(a, b, c) {
        a = "" + location.hostname;
        b = a.split(".");
        c = (/\.co\.|\.com\.|\.org\./.test(a)) ? 3 : 2;
        return b.splice(b.length - c, c).join(".");
      },
      WQ: function(a, b, c, d) {
        utag.DB('WQ:' + utag.loader.wq.length);
        c = true;
        try {
          utag.loader.GET()
        } catch (e) {};
        var lq = [];
        for (a = 0; a < utag.loader.wq.length; a++) {
          b = utag.loader.wq[a];
	  b.load = utag.loader.cfg[b.id].load;
          if (b.load>0&&b.send) {
            c = false;
            utag.send[b.id] = b;
          }
	  if(b.load!=0&&b.load!=4){
	    lq.push(b);
            this.f[b.id] = 0;
	  }
        }
        if (c) {
          d = false;
          for (b in utag.loader.GV(utag.send)) d = true;
          if (c && d) this.LOAD('WAIT_FORCE');
        }
        this.wq = [];
        for (a = 0; a < lq.length; a++) {
          utag.DB('utag.loader.WAIT: loading ' + lq[a].id);
          utag.loader.AS(lq[a])
        }
        if(lq.length==0)utag.handler.INIT();
      },
      AS: function(a, b, c, d) {
        utag.sender[a.id] = a;
        if (typeof a.src == 'undefined') {
          a.src = utag.cfg.path + ((typeof a.name != 'undefined') ? a.name : 'utag.' + a.id + '.js')
        }
        if (utag.cfg.v) a.src += (a.src.indexOf('?') > 0 ? '&' : '?') + 'utv=' + utag.cfg.v;
        utag.rpt['l_' + a.id] = a.src;
        b = document;
        if (a.load == 2) {
          b.write('<script id="utag_' + a.id + '" src="' + a.src + '"></scr' + 'ipt>')
        } else if(a.load==1||a.load==3) {
          if (b.createElement) {
            c = 'utag_lufthansa.main_'+a.id;
            if (!b.getElementById(c)) {
              if (a.load == 3) {
                d = b.createElement('iframe');
                d.setAttribute('height', '1');
                d.setAttribute('width', '1');
                d.setAttribute('style', 'display:none');
                d.setAttribute('src', a.src)
              } else {
                d = b.createElement('script');
                d.language = 'javascript';
                d.type = 'text/javascript';
                d.src = a.src;
              }
 	      d.id = c;
              b.getElementsByTagName('head')[0].appendChild(d)
            }
          }
        }
      },
      GV: function(a, b, c) {
        b = {};
        for (c in a) {
          if (typeof a[c] != "function") b[c] = a[c];
        }
        return b
      },
      RD: function(o, a, b, c, d, e, f, g) {
        a = document.getElementsByTagName("meta");
        for (b = 0; b < a.length; b++) {
          if (a[b].name && a[b].name != "") o["meta." + a[b].name.toLowerCase()] = a[b].content.toLowerCase();
        }
        a = location.search.toLowerCase();
        if (a.length > 1) {
          b = a.substring(1).split('&');
          for (a = 0; a < b.length; a++) {
            c = b[a].split("=");
            o["qp." + c[0]] = unescape(c[1])
          }
        }
        a = (new Date()).getTime();
        b = utag.loader.RC();
        c = a + parseInt(utag.cfg.session_timeout);
        d = a + (Math.ceil(Math.random() * 1000000));
        if ((b.utag_main && (typeof b.utag_main._st == "undefined" || (typeof b.utag_main._st != "undefined" && parseInt(b.utag_main._st) < a))) || !b.utag_main) {
          if (b.utag_main) {
            b.utag_main._st = c;
            b.utag_main.ses_id = d;
          } else {
            b.utag_main = {
              _st: c,
              ses_id: d
            }
          }
          utag.loader.SC("utag_main", {
            "_st": c,
            "ses_id": d + ";exp-session"
          });
        } else {
          utag.loader.SC("utag_main", {
            "_st": c
          })
        }
        for (d in b) {
          if (d.match(/utag_(.*)/)) {
            for (c in utag.loader.GV(b[d])) {
              o["cp.utag_" + RegExp.$1 + "_" + c] = b[d][c];
            }
          }
        }
        for (c in utag.loader.GV((utag.cl && !utag.cl['_all_']) ? utag.cl : b)) {
          if (c.indexOf("utag_") < 0 && typeof b[c] != "undefined") o["cp." + c] = b[c];
        }
        o["dom.referrer"] = eval("document." + "referrer");
        o["dom.title"] = "" + document.title;
        o["dom.domain"] = "" + location.hostname;
        o["dom.query_string"] = "" + (location.search).substring(1);
        o["dom.url"] = "" + document.URL;
        o["dom.pathname"] = "" + location.pathname;
      },
      RC: function(a, x, b, c, d, e, f, g, h, i, j, k, l, m, n, o, v, ck, cv) {
        o = {};
        b = ("" + document.cookie != "") ? (document.cookie).split("; ") : [];
        for (c = 0; c < b.length; c++) {
          if (b[c].match(/^(.*?)=(.*)$/)) {
            ck = RegExp.$1;
            cv = RegExp.$2;
          }
	  try{e = decodeURIComponent(cv); }catch(er){e=""};
          if (typeof ck!="undefined" && (ck.indexOf("ulog") == 0 || ck.indexOf("utag_") == 0)) {
            e = e.split("$");
            g = [];
            j = {};
            for (f = 0; f < e.length; f++) {
              try{
                g = e[f].split(":");
                if (g.length > 2) {
                  g[1] = g.slice(1).join(":");
                }
                v = "";
                if (("" + g[1]).indexOf("~") == 0) {
                  h = g[1].substring(1).split("|");
                  for (i = 0; i < h.length; i++) h[i] = decodeURIComponent(h[i]);
                  v = h
                } else v = decodeURIComponent(g[1]);
                j[g[0]] = v;
              }catch(er){};
            }
            o[ck] = {};
            e = (new Date()).getTime();
            for (f in utag.loader.GV(j)) {
              if (j[f] instanceof Array) {
                n = [];
                for (m = 0; m < j[f].length; m++) {
                  if (j[f][m].match(/^(.*);exp-(.*)$/)) {
                    k = (RegExp.$2 == "session") ? (typeof j._st != "undefined" ? j._st : e - 1) : parseInt(RegExp.$2);
                    if (k > e) n[m] = (x == 0) ? j[f][m] : RegExp.$1;
                  }
                }
                j[f] = n.join("|");
              } else {
                j[f] = "" + j[f];
                if (j[f].match(/^(.*);exp-(.*)$/)) {
                  k = (RegExp.$2 == "session") ? (typeof j._st != "undefined" ? j._st : e - 1) : parseInt(RegExp.$2);
                  j[f] = (k < e) ? null : (x == 0 ? j[f] : RegExp.$1);
                }
              }
              if (j[f]) o[ck][f] = j[f];
            }
          } else if (utag.cl[ck] || utag.cl['_all_']) {
            o[ck] = e
          }
        }
        return (a) ? (o[a] ? o[a] : {}) : o;
      },
      SC: function(a, b, c, d, e, f, g, h, i, j, k, x, v) {
        if (!a) return 0;
        v = "";
        x = "Thu, 31 Dec 2099 00:00:00 GMT";
        if (c && c == "da") {
          x = "Thu, 31 Dec 2009 00:00:00 GMT";
        } else if (a.indexOf("utag_") != 0 && a.indexOf("ulog") != 0) {
          if (typeof b != "object") {
            v = b
          }
        } else {
          d = utag.loader.RC(a, 0);
          for (e in utag.loader.GV(b)) {
            f = "" + b[e];
            if (f.match(/^(.*);exp-(\d+)(\w)$/)) {
              g = (new Date()).getTime() + parseInt(RegExp.$2) * ((RegExp.$3 == "h") ? 3600000 : 86400000);
              if (RegExp.$3 == "u") g = parseInt(RegExp.$2);
              f = RegExp.$1 + ";exp-" + g;
            }
            if (c == "i") {
              if (d[e] == null) d[e] = f;
            } else if (c == "d") delete d[e];
            else if (c == "a") d[e] = (d[e] != null) ? (f - 0) + (d[e] - 0) : f;
            else if (c == "ap" || c == "au") {
              if (d[e] == null) d[e] = f;
              else {
                if (d[e].indexOf("|") > 0) {
                  d[e] = d[e].split("|")
                }
                g = (d[e] instanceof Array) ? d[e] : [d[e]];
                g.push(f);
                if (c == "au") {
                  h = {};
                  k = {};
                  for (i = 0; i < g.length; i++) {
                    if (g[i].match(/^(.*);exp-(.*)$/)) {
                      j = RegExp.$1;
                    }
                    if (typeof k[j] == "undefined") {
                      k[j] = 1;
                      h[g[i]] = 1;
                    }
                  }
                  g = [];
                  for (i in utag.loader.GV(h)) {
                    g.push(i);
                  }
                }
                d[e] = g
              }
            } else d[e] = f;
          }
          h = new Array();
          for (g in utag.loader.GV(d)) {
            if (d[g] instanceof Array) {
              for (c = 0; c < d[g].length; c++) {
                d[g][c] = encodeURIComponent(d[g][c])
              }
              h.push(g + ":~" + d[g].join("|"))
            } else h.push(g + ":" + encodeURIComponent(d[g]))
          };
          if (h.length == 0) {
            h.push("");
            x = ""
          }
          v = (h.join("$"));
        }
        document.cookie = a + "=" + v + ";path=/;domain=" + utag.cfg.domain + ";expires=" + x;
        return 1
      },
      LOAD: function(a, b, c, d) {
        utag.DB('utag.loader.LOAD:' + a);
        if (this.f[a] == 0) {
          utag.DB('utag.loader.LOAD:add sender-' + a);
          this.f[a] = 1;
          if (utag.loader.wq.length > 0) return;
          for (b in utag.loader.GV(this.f)) {
            if (this.f[b] == 0) return
          };
          utag.DB('CLEAR FORCE');
          clearTimeout(utag.loader.ft);
          //utag.DB('utag.handler.INIT');
          utag.handler.INIT()
        }
      },
      EV: function(a, b, c, d) {
        if (b == "ready") {
          if (document.readyState === "complete") setTimeout(c, 1);
          else {
            if(typeof utag.loader.ready_q=="undefined"){
              utag.loader.ready_q=[]; 
              utag.loader.run_ready_q=function(){
                for(var i=0;i<utag.loader.ready_q.length;i++){
                  utag.DB("READY_Q:"+i);
                  try{utag.loader.ready_q[i]()}catch(e){};
                }
              }
            }
            utag.loader.ready_q.push(c);

            var RH;

            if(utag.loader.ready_q.length<=1){
              if (document.addEventListener) {
                RH = function() {
                  document.removeEventListener("DOMContentLoaded", RH, false);
                  utag.loader.run_ready_q()
                };
                document.addEventListener("DOMContentLoaded", RH, false);
                window.addEventListener("load", utag.loader.run_ready_q, false);
              } else if (document.attachEvent) {
                RH = function() {
                  if (document.readyState === "complete") {
                    document.detachEvent("onreadystatechange", RH);
                    utag.loader.run_ready_q()
                  }
                };
                document.attachEvent("onreadystatechange", RH);
                window.attachEvent("onload", utag.loader.run_ready_q);
              }
            }
          }
        } else {
          if (a.addEventListener) {
            a.addEventListener(b, c, false)
          } else if (a.attachEvent) {
            a.attachEvent(((d == 1) ? "" : "on") + b, c)
          }
        }
      }
    },
    DB: function(a, b) {
      // return right away if we've already checked the cookie (reduce performance hit of many utag.DB calls) 
      if(utag.cfg.utagdb===false){
        return;
      }else if(typeof utag.cfg.utagdb=="undefined"){
        b = document.cookie+'';
        utag.cfg.utagdb=((b.indexOf('utagdb=true') >= 0)?true:false);
      }
      if(utag.cfg.utagdb===true){
        try{console.log(a)}catch(e){}
      }
    },
    RP: function(a, b, c) {
      if (typeof a != 'undefined' && typeof a.src != 'undefined' && a.src != '') {
        b = [];
        for (c in utag.loader.GV(a)) {
          if (c != 'src') b.push(c + '=' + escape(a[c]));
        }
        this.dbi.push((new Image()).src = a.src + '?utv=' + utag.cfg.v + '&utid=' + utag.cfg.utid + '&' + (b.join('&')));
      }
    },
    view: function(a,c) {
      return this.track('view',a,c);
    },
    link: function(a,c) {
      return this.track('link',a,c);
    },
    track: function(a,b,c) {
      for(var i in utag.loader.GV(utag.o)){
        try{utag.o[i].handler.trigger(a,b)}catch(e){};
      }
      if(c)try{c()}catch(e){};
      return true;
    },
    handler: {
      base: "",
      df: {},
      o: {},
      send: {},
      iflag: 0,
      INIT: function(a, b, c) {
        this.iflag = 1;
        utag.DB('utag.handler.INIT');
        a = utag.loader.q.length;
        if (a > 0) {
          for (b = 0; b < a; b++) {
            c = utag.loader.q[b];
            utag.handler.trigger(c.a, c.b)
          }
        }
	if(utag.cfg.noview!=true)utag.handler.trigger('view', utag.data);
      },
      test: function() {
        return 1
      },
      trigger: function(a, b, c, d) {
        utag.DB('trigger:'+a);
        b = b || {};
        if (!this.iflag) {
          utag.loader.q.push({
            a: a,
            b: b
          });
          return;
        }
        for (c in utag.loader.GV(this.df)) {
          if (typeof this.df[c] != "function" && typeof b[c] == "undefined") b[c] = this.df[c]
        }
        utag.DB('All Tags EXTENSIONS');
        for (c = 0; c < this.extend.length; c++) {
          try {
            this.extend[c](a, b);
            utag.rpt['ex_' + c] = 0
          } catch (e) {
            utag.rpt['ex_' + c] = 1;
	    if(typeof utag_err!="undefined"){utag_err.push({e:e.message,s:utag.cfg.path+'utag.js',l:c,t:'ge'})};
          }
        };
        for (c in utag.loader.GV(utag.send)) {
          if (typeof utag.sender[c] != "undefined") {
            try {
              utag.sender[c].send(a, utag.handler.C(b));
              utag.rpt['s_' + c] = 0
            } catch (e) {
              utag.rpt['s_' + c] = 1
            };
            utag.rpt.ts['s'] = new Date();
            utag.RP(utag.rpt);
          }
        }
        c = this.base.split(",");
        for (d = 0; d < c.length; d++) {
          if (typeof b[c[d]] != "undefined") this.df[c[d]] = b[c[d]]
        };
	for(d in utag.loader.GV(b)){if(d.indexOf('dom.')==0)this.df[d]=b[d]};
        this.o = b;
	
      },
      C: function(a, b, c, d) {
        b = {};
        for (c in utag.loader.GV(a)) {
          if (typeof a[c] != "function") b[c] = a[c]
        }
        return b
      }
    }
  };
  utag.o['lufthansa.main']=utag;
  utag.cfg = {
    v: "ut4.004.201605121457",
    session_timeout: 1800000,
    readywait: 0,
    noload: 0,
    forcetimeout: 3000,
    domain: utag.loader.lh(),
    path: "//tags.tiqcdn.com/utag/lufthansa/main/prod/",
    utid: "lufthansa/main/201605121457"
  };utag.cond={10:0,11:0,12:0,13:0,15:0,17:0,18:0,22:0,24:0,28:0,29:0,30:0,33:0,39:0,40:0,41:0,45:0,46:0,47:0,48:0,4:0,57:0,60:0,6:0,7:0,8:0,9:0};
utag.pagevars=function(ud){ud = ud || utag.data;try{ud['js_page.DCSext.PNRAmount']=DCSext.PNRAmount}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFBooClass_Selected']=DCSext.BFBooClass_Selected}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFBooClass_Offert']=DCSext.BFBooClass_Offert}catch(e){utag.DB(e)};try{ud['js_page.DCSext.ShownPage']=DCSext.ShownPage}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFCurrency']=DCSext.BFCurrency}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Market']=DCSext.Market}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Channel']=DCSext.Channel}catch(e){utag.DB(e)};try{ud['js_page.DCSext.MICECode']=DCSext.MICECode}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFO']=DCSext.BFO}catch(e){utag.DB(e)};try{ud['js_page.v_netfare']=v_netfare}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFD']=DCSext.BFD}catch(e){utag.DB(e)};try{ud['js_page.mmPageID']=mmPageID}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFTaxes']=DCSext.BFTaxes}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Booseg1depdate']=DCSext.Booseg1depdate}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Booseg3depdate']=DCSext.Booseg3depdate}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFI']=DCSext.BFI}catch(e){utag.DB(e)};try{ud['js_page.WT.si_n']=WT.si_n}catch(e){utag.DB(e)};try{ud['js_page.navigator.appName']=navigator.appName}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Language']=DCSext.Language}catch(e){utag.DB(e)};try{ud['js_page.DCSext.Screen']=DCSext.Screen}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFDepDate']=DCSext.BFDepDate}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFRetDate']=DCSext.BFRetDate}catch(e){utag.DB(e)};try{ud['js_page.WT.mc_id']=WT.mc_id}catch(e){utag.DB(e)};try{ud['js_page.DCSext.BFFare_booked']=DCSext.BFFare_booked}catch(e){utag.DB(e)};};
utag.loader.initdata = function() {   try {       utag.data = (typeof utag_data != 'undefined') ? utag_data : {};       utag.udoname='utag_data';    } catch (e) {       utag.data = {};       utag.DB('idf:'+e);   }};utag.loader.loadrules = function(_pd,_pc) {var d = _pd || utag.data; var c = _pc || utag.cond;for (var l in utag.loader.GV(c)) {switch(l){
case '10':try{c[10]|=(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)}catch(e){utag.DB(e)}; break;
case '11':try{c[11]|=(/^Info_and_Services>Partner/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '12':try{c[12]|=(/^BKCO/.test(d['js_page.DCSext.Screen'])&&d['js_page.DCSext.Market'].toString().toLowerCase()=='DE'.toLowerCase())||(d['dom.url'].toString().indexOf('/lh/dyn/air-lh/common/book')>-1&&d['js_page.DCSext.Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '13':try{c[13]|=(/^BKCO/.test(d['js_page.DCSext.Screen'])&&d['js_page.DCSext.Market'].toString().toLowerCase().indexOf('DE'.toLowerCase())<0)||(d['dom.url'].toString().indexOf('/lh/dyn/air-lh/common/book')>-1&&d['js_page.DCSext.Market'].toString().toLowerCase().indexOf('DE'.toLowerCase())<0)}catch(e){utag.DB(e)}; break;
case '15':try{c[15]|=(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '17':try{c[17]|=(d['js_page.DCSext.Screen']=='BKCO'&&d['js_page.DCSext.Market']=='RU')||(d['js_page.DCSext.Screen']=='PURF'&&d['js_page.DCSext.Market']=='RU')||(d['js_page.DCSext.Screen']=='ITCO'&&d['js_page.DCSext.Market']=='RU')||(d['js_page.DCSext.Screen']=='ALPI'&&d['js_page.DCSext.Market']=='RU')||(/^ITCO_RU_/.test(d['js_page.mmPageID']))||(/^ALPI_RU_/.test(d['js_page.mmPageID']))||(/^PURF_RU_/.test(d['js_page.mmPageID']))||(/^BKCO_RU_/.test(d['js_page.mmPageID']))}catch(e){utag.DB(e)}; break;
case '18':try{c[18]|=(/_DE_de$/.test(d['js_page.mmPageID']))||(/_DE_en$/.test(d['js_page.mmPageID']))||(/_UK_en$/.test(d['js_page.mmPageID']))||(/_US_en$/.test(d['js_page.mmPageID']))||(/_AT_de$/.test(d['js_page.mmPageID']))||(/_AT_en$/.test(d['js_page.mmPageID']))||(/_NL_en$/.test(d['js_page.mmPageID']))||(/_DK_en$/.test(d['js_page.mmPageID']))||(/_SE_en$/.test(d['js_page.mmPageID']))||(/_NO_en$/.test(d['js_page.mmPageID']))||(/_FI_en$/.test(d['js_page.mmPageID']))||(/_ZA_en$/.test(d['js_page.mmPageID']))||(/_IN_en$/.test(d['js_page.mmPageID']))||(/_AE_en$/.test(d['js_page.mmPageID']))||(/_SG_en$/.test(d['js_page.mmPageID']))||(/_AU_en$/.test(d['js_page.mmPageID']))||(/_BH_en$/.test(d['js_page.mmPageID']))||(/_HK_en$/.test(d['js_page.mmPageID']))||(/_RU_en$/.test(d['js_page.mmPageID']))||(/_FR_en$/.test(d['js_page.mmPageID']))||(/_IT_en$/.test(d['js_page.mmPageID']))||(/_CH_de$/.test(d['js_page.mmPageID']))||(/_CH_en$/.test(d['js_page.mmPageID']))||(/_ES_en$/.test(d['js_page.mmPageID']))||(/_PL_en$/.test(d['js_page.mmPageID']))||(/_DE_gb$/.test(d['js_page.mmPageID']))||(/_GB_gb$/.test(d['js_page.mmPageID']))||(/_US_gb$/.test(d['js_page.mmPageID']))||(/_AT_gb$/.test(d['js_page.mmPageID']))||(/_NL_gb$/.test(d['js_page.mmPageID']))||(/_DK_gb$/.test(d['js_page.mmPageID']))||(/_SE_gb$/.test(d['js_page.mmPageID']))||(/_NO_gb$/.test(d['js_page.mmPageID']))||(/_FI_gb$/.test(d['js_page.mmPageID']))||(/_ZA_gb$/.test(d['js_page.mmPageID']))||(/_IN_gb$/.test(d['js_page.mmPageID']))||(/_AE_gb$/.test(d['js_page.mmPageID']))||(/_SG_gb$/.test(d['js_page.mmPageID']))||(/_AU_gb$/.test(d['js_page.mmPageID']))||(/_BH_gb$/.test(d['js_page.mmPageID']))||(/_HK_gb$/.test(d['js_page.mmPageID']))||(/_RU_gb$/.test(d['js_page.mmPageID']))||(/_FR_gb$/.test(d['js_page.mmPageID']))||(/_IT_gb$/.test(d['js_page.mmPageID']))||(/_CH_gb$/.test(d['js_page.mmPageID']))||(/_ES_gb$/.test(d['js_page.mmPageID']))||(/_PL_gb$/.test(d['js_page.mmPageID']))||(/_IE_en$/.test(d['js_page.mmPageID']))||(/_IE_gb$/.test(d['js_page.mmPageID']))||(/_BE_en$/.test(d['js_page.mmPageID']))||(/_BE_gb$/.test(d['js_page.mmPageID']))||(/_CZ_en$/.test(d['js_page.mmPageID']))||(/_CZ_gb$/.test(d['js_page.mmPageID']))||(/_TR_en$/.test(d['js_page.mmPageID']))||(/_TR_gb$/.test(d['js_page.mmPageID']))||(/_GR_en$/.test(d['js_page.mmPageID']))||(/_GR_gb$/.test(d['js_page.mmPageID']))||(/_NG_en$/.test(d['js_page.mmPageID']))||(/_NG_gb$/.test(d['js_page.mmPageID']))||(/_SA_en$/.test(d['js_page.mmPageID']))||(/_SA_gb$/.test(d['js_page.mmPageID']))||(/_CN_en$/.test(d['js_page.mmPageID']))||(/_CN_gb$/.test(d['js_page.mmPageID']))||(/_JP_en$/.test(d['js_page.mmPageID']))||(/_JP_gb$/.test(d['js_page.mmPageID']))||(/_KR_en$/.test(d['js_page.mmPageID']))||(/_KR_gb$/.test(d['js_page.mmPageID']))||(d['js_page.mmPageID'].toString().indexOf('CPIT__gb___disabled!')>-1)||(d['js_page.mmPageID'].toString().indexOf('CPIT__de')>-1)||(/_TN_en$/.test(d['js_page.mmPageID']))||(/_TN_gb$/.test(d['js_page.mmPageID']))||(/_MA_en$/.test(d['js_page.mmPageID']))||(/_MA_gb$/.test(d['js_page.mmPageID']))||(/_DZ_en$/.test(d['js_page.mmPageID']))||(/_DZ_gb$/.test(d['js_page.mmPageID']))||(/_CY_en$/.test(d['js_page.mmPageID']))||(/_CY_gb$/.test(d['js_page.mmPageID']))||(/_EG_en$/.test(d['js_page.mmPageID']))||(/_EG_gb$/.test(d['js_page.mmPageID']))||(/_LB_en$/.test(d['js_page.mmPageID']))||(/_LB_gb$/.test(d['js_page.mmPageID']))||(/_MT_en$/.test(d['js_page.mmPageID']))||(/_MT_gb$/.test(d['js_page.mmPageID']))||(/_KW_en$/.test(d['js_page.mmPageID']))||(/_KW_gb$/.test(d['js_page.mmPageID']))||(/_QA_en$/.test(d['js_page.mmPageID']))||(/_QA_gb$/.test(d['js_page.mmPageID']))||(/_IL_en$/.test(d['js_page.mmPageID']))||(/_IL_gb$/.test(d['js_page.mmPageID']))||(/_LY_en$/.test(d['js_page.mmPageID']))||(/_LY_gb$/.test(d['js_page.mmPageID']))||(/_OM_en$/.test(d['js_page.mmPageID']))||(/_OM_gb$/.test(d['js_page.mmPageID']))||(/_IR_en$/.test(d['js_page.mmPageID']))||(/_IR_gb$/.test(d['js_page.mmPageID']))||(/_IQ_en$/.test(d['js_page.mmPageID']))||(/_IQ_gb$/.test(d['js_page.mmPageID']))||(/_GH_en$/.test(d['js_page.mmPageID']))||(/_GH_gb$/.test(d['js_page.mmPageID']))||(/_BG_en$/.test(d['js_page.mmPageID']))||(/_BG_gb$/.test(d['js_page.mmPageID']))||(/_HU_en$/.test(d['js_page.mmPageID']))||(/_HU_gb$/.test(d['js_page.mmPageID']))||(/_HR_en$/.test(d['js_page.mmPageID']))||(/_HR_gb$/.test(d['js_page.mmPageID']))||(/_RO_en$/.test(d['js_page.mmPageID']))||(/_RO_gb$/.test(d['js_page.mmPageID']))||(/_RS_en$/.test(d['js_page.mmPageID']))||(/_RS_gb$/.test(d['js_page.mmPageID']))||(/_SI_en$/.test(d['js_page.mmPageID']))||(/_SI_gb$/.test(d['js_page.mmPageID']))||(/_CA_en$/.test(d['js_page.mmPageID']))||(/_CA_gb$/.test(d['js_page.mmPageID']))||(/_CA_fr$/.test(d['js_page.mmPageID']))||(/_FR_fr$/.test(d['js_page.mmPageID']))||(/_TN_fr$/.test(d['js_page.mmPageID']))||(/_MA_fr$/.test(d['js_page.mmPageID']))||(/_DZ_fr$/.test(d['js_page.mmPageID']))||(/_ES_es$/.test(d['js_page.mmPageID']))||(/_AR_es$/.test(d['js_page.mmPageID']))||(/_CL_es$/.test(d['js_page.mmPageID']))||(/_CO_es$/.test(d['js_page.mmPageID']))||(/_MX_es$/.test(d['js_page.mmPageID']))||(/_VE_es$/.test(d['js_page.mmPageID']))||(d['js_page.mmPageID'].toString().indexOf('CPIT__fr')>-1)||(d['js_page.mmPageID'].toString().indexOf('CPIT__es')>-1)||(d['js_page.mmPageID'].toString().indexOf('CPIT__po')>-1)||(d['js_page.mmPageID'].toString().indexOf('CPIT__cn')>-1)||(d['js_page.mmPageID'].toString().indexOf('CPIT__tw')>-1)||(/_BR_pt$/.test(d['js_page.mmPageID']))||(/_BR_po$/.test(d['js_page.mmPageID']))||(/_CN_mi$/.test(d['js_page.mmPageID']))||(/_CN_cn$/.test(d['js_page.mmPageID']))||(/_HK_ka$/.test(d['js_page.mmPageID']))||(/_HK_tw$/.test(d['js_page.mmPageID']))||(d['Market'].toString().toLowerCase()=='TW'.toLowerCase()&&d['Language'].toString().toLowerCase()=='ka'.toLowerCase())||(/_TW_tw$/.test(d['js_page.mmPageID']))}catch(e){utag.DB(e)}; break;
case '22':try{c[22]|=(/^BKCO/.test(d['js_page.mmPageID']))||(d['js_page.DCSext.Screen'].toString().indexOf('BKCO')>-1)}catch(e){utag.DB(e)}; break;
case '24':try{c[24]|=(!/^BKCO_/.test(d['js_page.mmPageID']))}catch(e){utag.DB(e)}; break;
case '28':try{c[28]|=(d['js_page.mmPageID']=='PURF_DE_de')}catch(e){utag.DB(e)}; break;
case '29':try{c[29]|=(d['js_page.mmPageID']=='BKCO_DE_de')}catch(e){utag.DB(e)}; break;
case '30':try{c[30]|=(d['dom.domain'].toString().toLowerCase().indexOf('lufthansa.com'.toLowerCase())>-1&&!/^uat/i.test(d['dom.domain']))}catch(e){utag.DB(e)}; break;
case '33':try{c[33]|=(d['dom.domain'].toString().toLowerCase().indexOf('lufthansa.com'.toLowerCase())>-1&&d['dom.pathname'].toString().toLowerCase().indexOf('/flight_services/cti'.toLowerCase())<0)}catch(e){utag.DB(e)}; break;
case '39':try{c[39]|=(d['Market'].toString().toLowerCase()=='US'.toLowerCase())||(d['js_page.DCSext.Market'].toString().toLowerCase()=='US'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '4':try{c[4]|=(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '40':try{c[40]|=(/^Homepage/i.test(d['ShownPage']))||(/^TopOffers/i.test(d['ShownPage']))||(/^Booking/i.test(d['ShownPage']))||(/^FOFP/i.test(d['js_page.DCSext.Screen']))||(/^FOMS/i.test(d['js_page.DCSext.Screen']))||(/^FOSD/i.test(d['js_page.DCSext.Screen']))||(/^ITCO/i.test(d['js_page.DCSext.Screen']))||(/^INSU/i.test(d['js_page.DCSext.Screen']))||(/^SEAT/i.test(d['js_page.DCSext.Screen']))||(/^CART/i.test(d['js_page.DCSext.Screen']))||(/^ALPI/i.test(d['js_page.DCSext.Screen']))||(/^PURF/i.test(d['js_page.DCSext.Screen']))||(/^BKCO/i.test(d['js_page.DCSext.Screen']))}catch(e){utag.DB(e)}; break;
case '41':try{c[41]|=(/^de_bS-10-/.test(d['js_page.mmPageID']))||(/^en_bS-21-/.test(d['js_page.mmPageID']))||(/^en_bS-17-/.test(d['js_page.mmPageID']))||(/^en_bS-74-/.test(d['js_page.mmPageID']))||(/^fr_bS-48-/.test(d['js_page.mmPageID']))||(/^br_bS-51-/.test(d['js_page.mmPageID']))||(/^es_bS-47-/.test(d['js_page.mmPageID']))}catch(e){utag.DB(e)}; break;
case '45':try{c[45]|=(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())||(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='NL'.toLowerCase())||(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='CA'.toLowerCase())||(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='BR'.toLowerCase())||(/^Homepage/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='MX'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '46':try{c[46]|=(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('DE')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('NL')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('NL')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('NL')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('CA')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('CA')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('CA')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('BR')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('BR')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('BR')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOFP')>-1&&d['js_page.DCSext.Market'].toString().indexOf('MX')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOMS')>-1&&d['js_page.DCSext.Market'].toString().indexOf('MX')>-1)||(d['js_page.DCSext.Screen'].toString().indexOf('FOSD')>-1&&d['js_page.DCSext.Market'].toString().indexOf('MX')>-1)}catch(e){utag.DB(e)}; break;
case '47':try{c[47]|=(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('BKCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('BKCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='NL'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('BKCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='CA'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('BKCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='BR'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('BKCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='MX'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '48':try{c[48]|=(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='NL'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='CA'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='BR'.toLowerCase())||(d['js_page.DCSext.Screen'].toString().toLowerCase().indexOf('ITCO'.toLowerCase())>-1&&d['Market'].toString().toLowerCase()=='MX'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '57':try{c[57]|=(d['js_page.mmPageID']=='535650301_DE_de')||(d['js_page.mmPageID']=='1171791909_DE_en')}catch(e){utag.DB(e)}; break;
case '6':try{c[6]|=(/^Booking/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '60':try{c[60]|=(d['Market']=='CA'&&/FOFP|FOSD|FOMS|ITCO|ALPI|PURF|BKCO|ADVS/.test(d['js_page.DCSext.Screen']))||(/^homepage/i.test(d['ShownPage'])&&d['Market']=='CA')}catch(e){utag.DB(e)}; break;
case '7':try{c[7]|=(/^TopOffers/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '8':try{c[8]|=(/^InformationService/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;
case '9':try{c[9]|=(/^My_Account/i.test(d['ShownPage'])&&d['Market'].toString().toLowerCase()=='DE'.toLowerCase())}catch(e){utag.DB(e)}; break;}}};utag.pre=function() {    utag.loader.initdata();utag.pagevars();    try{utag.loader.RD(utag.data)}catch(e){utag.DB(e)};    utag.loader.loadrules();        };utag.loader.GET=function(){utag.cl={'_all_':1};utag.pre();
  utag.handler.extend=[function(a,b,c,d){
  b._ccity='';
  b._ccountry=(typeof b['js_page.DCSext.Market']!='undefined')?b['js_page.DCSext.Market']:'';
  b._ccurrency=(typeof b['js_page.DCSext.BFCurrency']!='undefined')?b['js_page.DCSext.BFCurrency']:'';
  b._ccustid='';
  b._corder=(typeof b['DCSext.FileKey']!='undefined')?b['DCSext.FileKey']:'';
  b._cpromo=(typeof b['js_page.DCSext.MICECode']!='undefined')?b['js_page.DCSext.MICECode']:'';
  b._cship='';
  b._cstate='';
  b._cstore=(typeof b['js_page.DCSext.Channel']!='undefined')?b['js_page.DCSext.Channel']:'web';
  b._csubtotal='';
  b._ctax=(typeof b['js_page.DCSext.BFTaxes']!='undefined')?b['js_page.DCSext.BFTaxes']:'';
  b._ctotal=(typeof b['DCSext.BFRev_Booked']!='undefined')?b['DCSext.BFRev_Booked']:'';
  b._ctype='';
  b._czip='';
  b._cprod=(typeof b['DCSext.FileKey']!='undefined'&&b['DCSext.FileKey'].length>0)?b['DCSext.FileKey'].split(','):[];
  b._cprodname=[];
  b._cbrand=[];
  b._ccat=[];
  b._ccat2=[];
  b._cquan=[];
  b._cprice=(typeof b['js_page.DCSext.PNRAmount']!='undefined'&&b['js_page.DCSext.PNRAmount'].length>0)?b['js_page.DCSext.PNRAmount'].split(','):[];
  b._csku=(typeof b['DCSext.FileKey']!='undefined'&&b['DCSext.FileKey'].length>0)?b['DCSext.FileKey'].split(','):[];
  b._cpdisc=(typeof b['js_page.DCSext.MICECode']!='undefined'&&b['js_page.DCSext.MICECode'].length>0)?b['js_page.DCSext.MICECode'].split(','):[];
  if(b._cprod.length==0){b._cprod=b._csku.slice()};
  if(b._cprodname.length==0){b._cprodname=b._csku.slice()};
  function tf(a){if(a=='' || isNaN(parseFloat(a))){return a}else{return (parseFloat(a)).toFixed(2)}};
  b._ctotal=tf(b._ctotal);b._csubtotal=tf(b._csubtotal);b._ctax=tf(b._ctax);b._cship=tf(b._cship);for(c=0;c<b._cprice.length;c++){b._cprice[c]=tf(b._cprice[c])};for(c=0;c<b._cpdisc.length;c++){b._cpdisc[c]=tf(b._cpdisc[c])};
}];
  utag.handler.cfg_extend=[{"alr":1,"bwq":0,"id":"6","blr":0,"end":0}];
  utag.loader.initcfg = function(){
    utag.loader.cfg={"45":{load:utag.cond[4],send:1,v:201510300821,wait:1,tid:20067},"46":{load:utag.cond[6],send:1,v:201510300821,wait:1,tid:20067},"47":{load:utag.cond[7],send:1,v:201510300821,wait:1,tid:20067},"48":{load:utag.cond[8],send:1,v:201510300821,wait:1,tid:20067},"49":{load:utag.cond[9],send:1,v:201510300821,wait:1,tid:20067},"50":{load:utag.cond[11],send:1,v:201510300821,wait:1,tid:20067},"51":{load:utag.cond[10],send:1,v:201510300821,wait:1,tid:20067},"53":{load:utag.cond[15],send:1,v:201510300821,wait:1,tid:20067},"56":{load:utag.cond[12],send:1,v:201510300821,wait:1,tid:20067},"59":{load:utag.cond[13],send:1,v:201510300821,wait:1,tid:20067},"77":{load:utag.cond[17],send:1,v:201510300821,wait:1,tid:19050},"87":{load:utag.cond[22],send:1,v:201510300821,wait:1,tid:7117},"38":{load:1,send:1,v:201510300821,wait:1,tid:7114},"55":{load:utag.cond[24],send:1,v:201512091454,wait:1,tid:4001},"99":{load:utag.cond[28],send:1,v:201510300821,wait:1,tid:20067},"100":{load:utag.cond[29],send:1,v:201510300821,wait:1,tid:20067},"104":{load:utag.cond[22],send:1,v:201512091454,wait:1,tid:20067},"105":{load:(utag.cond[33] && utag.cond[18] && utag.cond[30]),send:1,v:201510300821,wait:1,tid:20010},"118":{load:utag.cond[45],send:1,v:201511161238,wait:1,tid:20010},"111":{load:utag.cond[46],send:1,v:201511161238,wait:1,tid:20010},"112":{load:utag.cond[48],send:1,v:201511161238,wait:1,tid:20010},"113":{load:utag.cond[47],send:1,v:201511161238,wait:1,tid:20010},"124":{load:utag.cond[41],send:1,v:201511161238,wait:1,tid:20010},"123":{load:(utag.cond[40] && utag.cond[39]),send:1,v:201510300821,wait:1,tid:2033},"126":{load:1,send:1,v:201511231039,wait:1,tid:20010},"140":{load:utag.cond[57],send:1,v:201512111027,wait:1,tid:20010},"149":{load:utag.cond[39],send:1,v:201604011350,wait:1,tid:6026},"159":{load:utag.cond[60],send:1,v:201605121457,wait:1,tid:20010}};
utag.loader.cfgsort=["45","46","47","48","49","50","51","53","56","59","77","87","38","55","99","100","104","105","118","111","112","113","124","123","126","140","149","159"];
  }
utag.loader.initcfg();
}

  if(typeof utag_cfg_ovrd!='undefined'){for(var i in utag.loader.GV(utag_cfg_ovrd))utag.cfg[i]=utag_cfg_ovrd[i];};
  utag.loader.SETFORCE = function(a) {
    utag.DB('SETFORCE:' + a);
    if (utag.loader.ft > 0) clearTimeout(utag.loader.ft);
    utag.loader.ft = (utag.cfg.forcetimeout != 0) ? setTimeout(utag.loader.FORCE, utag.cfg.forcetimeout) : 0
  }
  utag.loader.FORCE = function(a, b, c, d) {
    a = utag.sender;
    b = utag.loader.f;
    utag.DB('FORCE:'+a+':'+b);
    for (c in utag.loader.GV(b)) {
      d = a[c].id;
      if (typeof b[c] != 'undefined' && b[c] == 0) {
        utag.DB('FORCEERROR:' + d);
        utag.rpt['f_' + d] = 1;
	if(typeof utag_err!="undefined"){utag_err.push({e:'load error',s:utag.cfg.path+'utag.'+d+'.js',l:0,t:'le'})};
        delete utag.sender[d];
        delete utag.send[d];
        utag.loader.LOAD(d)
      }
    }
  }
  utag.loader.INIT = function(a, b, c, d) {
    utag.DB('utag.loader.INIT');
    if (this.ol == 1) return -1;
    else this.ol = 1;
    utag.rpt.ts['i'] = new Date();
    if (!utag.cfg.noload) {
      try {
        this.GET()
      } catch (e) {};
      var lq = [];
      for (a in this.GV(this.cfg)) {
        b = this.cfg[a];
        b.id = a;
        if (b.wait == 1) {
          this.wq.push(b)
        } else if (b.load > 0) {
          if (b.send) {
            c = false;
            utag.send[b.id] = b;
          }
	  if(b.load!=4){
	    lq.push(b);
            this.f[b.id] = 0;
	  }
        }
      }
      for (a = 0; a < lq.length; a++) {
        utag.DB('utag.loader.INIT: loading ' + b.id);
        utag.loader.AS(lq[a])
      }
      if (utag.loader.wq.length > 0) utag.loader.EV('', 'ready', function(a) {
	if(utag.loader.rf==0){
	  utag.loader.rf=1;
          utag.DB('READY:utag.loader.wq');
	  utag.loader.rf=1;
	  utag.loader.WQ();
	  utag.loader.SETFORCE('WAIT')
	}
      });
      else if(lq.length==0)utag.handler.INIT();
      else utag.loader.SETFORCE('INIT')
    }
    return 1
  };
  utag.loader.EV('', 'ready', function(a) {if(utag.loader.efr!=1){utag.loader.efr=1;try{
//scrape data sources from DCSExt or DCSext
window.DCSparams = window.DCSparams || {};
for (var x in window) {
	if (Object.prototype.hasOwnProperty.call(window, x)) {
		if (/(DCSExt|DCSext)/.test(x) && window[x] instanceof Array) {
			for (var i = 0; i < window[x].length; i++) {
				if (i % 2 == 0) {
					window.DCSparams[x + "." + window[x][i]] = window[x][i + 1];
				}
			}
		} else if (/(DCSExt|DCSext)/.test(x) && !(window[x] instanceof Array)) {
			for (var i in window[x]) {
				if (window[x].hasOwnProperty(i)) {
					window.DCSparams[x + "." + i] = window[x][i];
				}
			}
		}
	}
}

if (typeof window.utag_data === "undefined") {
	window.utag_data = window.DCSparams || "";
} else {
	//	utag_data = {};
	for (var prop in window.DCSparams) {
		if (!window.utag_data.hasOwnProperty(prop)) {
			window.utag_data[prop] = window.DCSparams[prop];
		}
	}
};
// special dummy parameter:
utag_data._blank = "";

function getRandom(min, max) {
	var r;
	do {
		r = Math.random();
	}
	while (r == 1.0);
	return min + parseInt(r * (max - min + 1));
}
utag_data._random = getRandom(10000, 99999);

try { // Session-ID for Adara Tag
  var x = '';
  x = document.cookie.match(new RegExp('utagSess' + '=([^;]+)'))[1];
} catch (e) {  var x = ''; }
if (typeof utag_data.CustNo !== 'undefined' && utag_data.CustNo !== '') {
  utag_data._aysess = utag_data.CustNo;
  if (x !== utag_data._aysess || x === '') document.cookie = 'utagSess=' + utag_data._aysess + ';domain=.lufthansa.com;path=/';
} else { // no CustNo
  if (x !== '') {
    utag_data._aysess = x;
  } else {
    utag_data._aysess = getRandom(1000000000, 9999999999);
    document.cookie = 'utagSess=' + utag_data._aysess + ';domain=.lufthansa.com;path=/'; // Session-Cookie
  }
}

utag_data.search_form_data = {};
/*
var cookies = document.cookie.split("; ");
for (var cookie = 0; cookie < cookies.length; cookie++) {
	if (cookies[cookie].indexOf("FMPA.SearchInfo") > -1) {
		var tempCookie = cookies[cookie].split("^");
		for (var i = 0; i < tempCookie.length; i++) {
			if (i % 2 === 0) {
				utag_data.search_form_data[tempCookie[i]] = tempCookie[i + 1];
			}
		}
	}
}
*/


//Parameters for Search and Order Dropout
utag_data.loged_in = "no";
utag_data.logged_in = 'no';

if (typeof (utag_data['CustStatus']) !== 'undefined' && utag_data['CustStatus'] !== '') {
	utag_data.logged_in = 'yes';
} else if (typeof (DCSext.CustStatus) !== 'undefined' && DCSext.CustStatus !== 'ANONYMOUS') {
	utag_data.logged_in = 'yes';
}

//if (typeof utag_data.Market === 'undefined' && utag_data['DCSext.Market']) utag_data.Market = utag_data['DCSext.Market'];
if ((typeof utag_data.Market === 'undefined' || utag_data.Market === 'XX') && DCSext.Market) utag_data.Market = DCSext.Market;
if (typeof utag_data.Language === 'undefined' && utag_data['DCSext.Language']) utag_data.Language = utag_data['DCSext.Language'];

if (typeof (utag_data['Portal']) !== 'undefined' && utag_data['Portal'] !== '') {
	utag_data.portal = utag_data['Portal'];
} else if (typeof (DCSext.Portal) !== 'undefined' && DCSext.Portal !== '') {
	utag_data.portal = DCSext.Portal;
}

utag_data.flight_itinery = (typeof (DCSext.BFI) !== 'undefined' && DCSext.BFI !== '') ? DCSext.BFI : '';
utag_data.booking_type = (typeof (DCSext.BKGType) !== 'undefined' && DCSext.BKGType !== '') ? DCSext.BKGType : '';

var localDate = new Date();
utag_data.date_of_booking = ("0" + localDate.getDate()).slice(-2) + ("0" + (localDate.getMonth() + 1)).slice(-2) + localDate.getFullYear();
/*
//set variable for DFA country id
utag_data.dfa_country_id = "";
utag_data.dfa_country_id_without_s = "";
utag_data.adition_country_id = "";
*/
// Initialiaze Pagetype
utag_data.pagetype = '';


// No Booking-Flow
if (utag_data['ShownPage']) {
	var shownPage = utag_data['ShownPage'];

	if (shownPage.indexOf("Homepage") > -1) {
		utag_data.pagetype = "home";
		utag_data.current_page = "Homepage";
	} else if (shownPage.indexOf("Booking") > -1) {
		utag_data.current_page = "Plan & Book";
	} else if (shownPage.indexOf("TopOffers") > -1) {
		utag_data.current_page = "Offers & Ideas";
	} else if (shownPage.indexOf("Web_Checkin") > -1) {
		utag_data.current_page = "Checkin";
	} else if (shownPage.indexOf("InformationService") > -1) {
		utag_data.current_page = "Information & Services";
	} else if (shownPage.indexOf("My_Bookings") > -1) { // TODO
		utag_data.current_page = "My Bookings";
	} else if (shownPage.indexOf("Profile_Login") > -1) {
		utag_data.current_page = "Profile Login";
	} else if (shownPage.indexOf("My_Account>Profile") > -1) {
		utag_data.current_page = "My account welcome page after login";
	} else if (shownPage.indexOf("/info_and_services/partner") > -1) { // TODO
		utag_data.current_page = "Corporate Customers";
	}
	
} else if (utag_data['DCSext.ShownPage'] && utag_data['DCSext.Screen']) {
// Booking-Flow
	var shownPage = utag_data['DCSext.ShownPage'];

	var outbound = '';
	var inbound = '';
	var dep = '';
	var dest = '';
	var boClass = '';
	var paxAm = '';

	// reset cookies on search result - otherwise read it:
	if (shownPage.indexOf("FOFP.jsp") > -1 || shownPage.indexOf("FOMS.jsp") > -1 || shownPage.indexOf("FOSD.jsp") > -1) {
		var exp = '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/'; 
		document.cookie = 'utagDepDat' + exp;
		document.cookie = 'utagRetDat' + exp;
		document.cookie = 'utagDepAir' + exp;
		document.cookie = 'utagDesAir' + exp;
		document.cookie = 'utagBooCl' + exp;
		document.cookie = 'utagPaxAm' + exp;
	} else {
		try {
			outbound = document.cookie.match(new RegExp('utagDepDat' + '=([^;]+)'))[1];
			inbound = document.cookie.match(new RegExp('utagRetDat' + '=([^;]+)'))[1];
		} catch (e) {}
		try {
			dep = document.cookie.match(new RegExp('utagDepAir' + '=([^;]+)'))[1];
			dest = document.cookie.match(new RegExp('utagDesAir' + '=([^;]+)'))[1];
		} catch (e) {}
		try {
			boClass = document.cookie.match(new RegExp('utagBooCl' + '=([^;]+)'))[1];
		} catch (e) {}
		try {
			paxAm = document.cookie.match(new RegExp('utagPaxAm' + '=([^;]+)'))[1];
		} catch (e) {}
	}
	
	if (typeof (DCSext.BFAmountofPax) !== 'undefined' && DCSext.BFAmountofPax.split(';').length === 3) {
		utag_data.pax_adult_amt = DCSext.BFAmountofPax.split(';')[0];
		utag_data.pax_child_amt = DCSext.BFAmountofPax.split(';')[1];
		utag_data.pax_baby_amt = DCSext.BFAmountofPax.split(';')[2];
		utag_data.pax_amt = (parseInt(DCSext.BFAmountofPax.split(';')[0]) + parseInt(DCSext.BFAmountofPax.split(';')[1]) + parseInt(DCSext.BFAmountofPax.split(';')[2])).toString();
	} else {
		utag_data.pax_adult_amt = paxAm.split('-')[0];
		utag_data.pax_child_amt = paxAm.split('-')[1];
		utag_data.pax_baby_amt = paxAm.split('-')[2];
		utag_data.pax_amt = (parseInt(paxAm.split('-')[0]) + parseInt(paxAm.split('-')[1]) + parseInt(paxAm.split('-')[2])).toString();
	}
	
	if (typeof (DCSext.BFDepDate) !== 'undefined' && DCSext.BFDepDate.length == 8) {
		utag_data.outboundDate = DCSext.BFDepDate.substr(0, 4) + '-' + DCSext.BFDepDate.substr(4, 2) + '-' + DCSext.BFDepDate.substr(6, 2);
	} else {
		utag_data.outboundDate = outbound;
	}
	utag_data.outboundDateDDM = '';
	utag_data.outboundDateDMY = '';
	if (utag_data.outboundDate !== '' && utag_data.outboundDate.length == 10) {
		utag_data.outboundDateDDM = utag_data.outboundDate.substr(5, 2) + '-' + utag_data.outboundDate.substr(0, 4);
		utag_data.outboundDateDMY = utag_data.outboundDate.substr(8, 2) + '-' + utag_data.outboundDate.substr(5, 2) + '-' + utag_data.outboundDate.substr(0, 4);
	}

	if (typeof (DCSext.BFRetDate) !== 'undefined' && DCSext.BFRetDate.length == 8) {
		utag_data.inboundDate = DCSext.BFRetDate.substr(0, 4) + '-' + DCSext.BFRetDate.substr(4, 2) + '-' + DCSext.BFRetDate.substr(6, 2);
	} else {
		utag_data.inboundDate = inbound;
	}
	utag_data.inboundDateDMY = '';
	if (utag_data.inboundDate !== '' && utag_data.inboundDate.length == 10) {
		utag_data.inboundDateDMY = utag_data.inboundDate.substr(8, 2) + '-' + utag_data.inboundDate.substr(5, 2) + '-' + utag_data.inboundDate.substr(0, 4);
	}

	if (boClass.length > 0) utag_data.booking_class = boClass;
	if (dep.length == 3) utag_data.departure_airport = dep;
	if (dest.length == 3) utag_data.destination_airport = dest;
	
	if (shownPage.indexOf("FOFP.jsp") > -1 || shownPage.indexOf("FOMS.jsp") > -1 || shownPage.indexOf("FOSD.jsp") > -1) {
	
		dep = dest = '';
		if (typeof (utag_data['BFO']) !== 'undefined' && utag_data['BFO'] !== '') dep = utag_data['BFO']
		else if (typeof (DCSext.BFO) !== 'undefined' && DCSext.BFO !== '') dep = DCSext.BFO;
		if (typeof (utag_data['BFD']) !== 'undefined' && utag_data['BFD'] !== '') dest = utag_data['BFD']
		else if (typeof (DCSext.BFD) !== 'undefined' && DCSext.BFD !== '') dest = DCSext.BFD;

		utag_data.departure_airport = dep.split(';').length > 1 ? dep.split(';')[0] : dep;
		
		if (typeof (DCSext.BFTripType) !== 'undefined' && DCSext.BFTripType === 'M') {
			utag_data.destination_airport = dest.split(';').length > 1 ? dest.split(';')[dest.split(';').length - 1] : dest;
		} else {
			utag_data.destination_airport = dest.split(';').length > 1 ? dest.split(';')[0] : dest;
		}

		if (typeof (DCSext.BKGClass) !== 'undefined' && DCSext.BKGClass !== '') {
			if (DCSext.BKGClass.indexOf('Premium') > -1) {
				utag_data.booking_class = "DEPALL";
			} else if(DCSext.BKGClass.indexOf('Eco') > -1) {
				utag_data.booking_class = "DEMALL";
			} else if(DCSext.BKGClass.indexOf('Business') > -1) {
				utag_data.booking_class = "DECALL"
			} else if(DCSext.BKGClass.indexOf('First') > -1) {
				utag_data.booking_class = "DEFALL";
			}
		}

		utag_data.pagetype = 'searchresults';
		utag_data.current_page = "Search Results";
		document.cookie = 'utagDepDat=' + utag_data.outboundDate + ';path=/';
		document.cookie = 'utagRetDat=' + utag_data.inboundDate + ';path=/';
		document.cookie = 'utagDepAir=' + utag_data.departure_airport + ';path=/';
		document.cookie = 'utagDesAir=' + utag_data.destination_airport + ';path=/';
		document.cookie = 'utagBooCl=' + utag_data.booking_class + ';path=/';
		document.cookie = 'utagPaxAm=' + utag_data.pax_adult_amt + '-' + utag_data.pax_child_amt + '-' + utag_data.pax_baby_amt + ';path=/';
	} else {
		// Servicing Flow: pagetype = product NOT cart
		if (window.location.pathname.indexOf('air-lh/servicing/') > -1){
			utag_data.pagetype = "product";
		} else {
			utag_data.pagetype = "cart";
		}
	}

	utag_data.BFNetfare = '';
/* Gesamt - airport taxes, fees: ccard fee included
	if (typeof(DCSext.BFRev_Booked) !== 'undefined' && DCSext.BFRev_Booked !== '' && typeof(DCSext.BFTaxes) !== 'undefined' && DCSext.BFTaxes !== ''){
		var utRev = parseFloat(DCSext.BFRev_Booked);
		var utTax = parseFloat(DCSext.BFTaxes);
		if (utRev === utRev && utTax === utTax){ // check if both are not NaN
			utag_data.BFNetfare = (utRev - utTax).toFixed(2).toString();
		}
	}
*/
	if (typeof(DCSext.BFFare_booked) !== 'undefined' && DCSext.BFFare_booked !== ''){
		var utRev = parseFloat(DCSext.BFFare_booked);
		if (utRev === utRev) utag_data.BFNetfare = utRev.toFixed(2).toString();
	}

	if (shownPage.indexOf("ITCO.jsp") > -1) {
		utag_data.current_page = "Flight Option";
	} else if (shownPage.indexOf("RAIL.jsp") > -1) {
		utag_data.current_page = "Rail Ticket Option";
	} else if (shownPage.indexOf("SEAT.jsp") > -1) {
		utag_data.current_page = "Seat Reservation Option";
	} else if (shownPage.indexOf("INSU.jsp") > -1) {
		utag_data.current_page = "Insurance Option";
	} else if (shownPage.indexOf("CART.jsp") > -1) {
		utag_data.current_page = "Booking Cart";
	} else if (shownPage.indexOf("ALPI.jsp") > -1) {
		utag_data.current_page = "Passenger Details";
	} else if (shownPage.indexOf("PURF.jsp") > -1) {
		utag_data.current_page = "Payment Details";
	} else if (shownPage.indexOf("BKCO.jsp") > -1) {
		utag_data.pagetype = "purchase";
		utag_data.current_page = "Booking Confirmation";
		utag_data.insu = (typeof(DCSext.INSUBooked) !== 'undefined' && DCSext.INSUBooked.toString() === '1') ? 'Yes' : 'No';
	}
}
// else {
//	utag_data.pagetype = "unknown";
//	utag_data.current_page = "unknown";
//}

// Set Pagetype if empty
if (utag_data.pagetype == ''){
	// check if seo page, else default:
	if (utag_data['meta.wt.cg_n'] && utag_data['meta.wt.cg_n'].toLowerCase() === 'seo'){
		utag_data.pagetype = "parser";
		utag_data.current_page = "SEO page";
	} else {
		utag_data.pagetype = "product";
	}
}

// get Webtrends Campaign
if (typeof(WT) !== 'undefined' && typeof(WT.mc_id) !== 'undefined'){
	utag_data.wt_campaign = WT.mc_id;
} else if (typeof(DCS) !== 'undefined' && typeof(DCS.dcsqry) !== 'undefined'){
	var erg = /WT\.mc_id=([^&]*)/i.exec(DCS.dcsqry);
	if (erg != null && erg[1] != ''){
		utag_data.wt_campaign = erg[1];
	}
} //else if dwmwr noch einbauen?

}catch(e){utag.DB(e)};
try{
if (document.location.host === 'www.lufthansa.com') {
	window.setTimeout(function(){
		if (typeof(Heatmap) === 'function' && typeof(e_h) === 'undefined') var e_h = new Heatmap();
	}, 1000);
}

}catch(e){utag.DB(e)};}})

  utag.cfg.readywait ? utag.loader.EV('', 'ready', function(a) {
    if(utag.loader.rf==0){
      utag.loader.rf=1;
      utag.DB('READY:utag.cfg.readywait');
      utag.loader.INIT()
    }
  }) : utag.loader.INIT();
}
