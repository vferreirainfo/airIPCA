//~~tv:20010.20140827
//~~tc: Tealium Custom Container

/*
  Tealium Custom Container Notes:
  - Add sending code between "Start Tag Sending Code" and "End Tag Sending Code".
  - Add JavaScript tag library code between "Start Tag Library Code" and "End Tag Library Code".
  - Add JavaScript code only, do not add HTML code in this file.
  - Remove any <script> and </script> tags from the code you place in this file.

  Loading external JavaScript files (Loader):
  - If you need to load an additional external JavaScript file, un-comment the singe-line JavaScript comments ("//") within the following Loader sections near the bottom of this file:
      - "Start Loader Function Call"
      - "End Loader Function Call"
      - "Start Loader Callback Function"
      - "End Loader Callback Function"
  - After un-commenting, insert the path to the external JavaScript file you want to load.
  - Finally, within the Loader callback function, insert the JavaScript code that should run after the external JavaScript file has loaded.
*/

/* Start Tag Library Code */


/* End Tag Library Code */

//tealium universal tag - utag.sender.custom_container ut4.0.201511231039, Copyright 2015 Tealium.com Inc. All Rights Reserved.
try {
  (function (id, loader) {
    var u = {};
    utag.o[loader].sender[id] = u;

    // Start Tealium loader 4.32
    // Please do not modify
    if (utag === undefined) { utag = {}; } if (utag.ut === undefined) { utag.ut = {}; } if (utag.ut.loader === undefined) { u.loader = function (o) { var a, b, c, l; a = document; if (o.type === "iframe") { b = a.createElement("iframe"); b.setAttribute("height", "1"); b.setAttribute("width", "1"); b.setAttribute("style", "display:none"); b.setAttribute("src", o.src); } else if (o.type === "img") { utag.DB("Attach img: " + o.src); b = new Image(); b.src = o.src; return; } else { b = a.createElement("script"); b.language = "javascript"; b.type = "text/javascript"; b.async = 1; b.charset = "utf-8"; b.src = o.src; } if (o.id) { b.id = o.id; } if (typeof o.cb === "function") { if (b.addEventListener) { b.addEventListener("load", function () { o.cb(); }, false); } else { b.onreadystatechange = function () { if (this.readyState === "complete" || this.readyState === "loaded") { this.onreadystatechange = null; o.cb(); } }; } } l = o.loc || "head"; c = a.getElementsByTagName(l)[0]; if (c) { utag.DB("Attach to " + l + ": " + o.src); if (l === "script") { c.parentNode.insertBefore(b, c); } else { c.appendChild(b); } } }; } else { u.loader = utag.ut.loader; }
    // End Tealium loader

    u.ev = {'view' : 1};

    u.initialized = false;

      u.map={};
  u.extend=[];


    u.send = function(a, b) {
      if (u.ev[a] || u.ev.all !== undefined) {
        //##UTENABLEDEBUG##utag.DB("send:##UTID##");

        var c, d, e, f, i;

        u.data = {
          /* Initialize default tag parameter values here */
          /* Examples: */
          /* "account_id" : "1234567" */
          /* "base_url" : "//insert.your.javascript.library.url.here.js" */
          /* A value mapped to "account_id" or "base_url" in TiQ will replace these default values. */
        };


        /* Start Tag-Scoped Extensions Code */
        /* Please Do Not Edit This Section */
        
        /* End Tag-Scoped Extensions Code */


        /* Start Mapping Code */
        for (d in utag.loader.GV(u.map)) {
          if (b[d] !== undefined && b[d] !== "") {
            e = u.map[d].split(",");
            for (f = 0; f < e.length; f++) {
              u.data[e[f]] = b[d];
            }
          }
        }
        /* End Mapping Code */


        /* Start Tag Sending Code */

// ########### RFA Custom Code by BlueSummit #############

var RFA_OID = "481";



var RFA_SEO_AID = "6799";

var RFA_GENERIC_AID = "6800";

var RFA_DIRECT_AID = "6801";

var RFA_GOOGLE_FLIGHT_SEARCH_AID = "6802";

var RFA_SOCIALMEDIA_AID = "6815";



var RFA_WEBTREND_LHNEWSLETTER_AID = "6803";

var RFA_WEBTREND_EMAILINGS_AID = "6804";

var RFA_WEBTREND_DISPLAY_AID = "6805";

var RFA_WEBTREND_AFFILIATE_AID = "6806";

var RFA_WEBTREND_METASEARCH_AID = "6807";

var RFA_WEBTREND_SOCIALCAMPAIGNS_AID = "6808";

var RFA_WEBTREND_GAME_AID = "6809";





// Konfiguration Visit

// Innerhalb eines Visits wird nur ein Aufruf getrackt

var RFA_COOKIE_LIFETIME = 30; // Minuten (rolling window)

var RFA_COOKIE_NAME = "806f3443885555c4d38acc5ed280ecb4a8cdf334";

var RFA_COOKIE_DOMAIN = "lufthansa.com"; // Domain (ohne www), die als ein Visit betrachtet wird, Subdomains sind automatisch berücksichtigt



// Ignoriere ALLE diese Referer (z.B. interne Subdomains), auch wenn Sie in der RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES aufgelistet sind.

var RFA_IGNORE_REFERRER_HOSTNAMES = ['lufthansa.com', 'paypal.com', 'datacash.com'];

// Beispiel: var RFA_IGNORE_REFERRER_HOSTNAMES = ['www.beispiel.de', 'beispiel.de'];



// Ignoriere URLs, die diese CGI Parameter enthalten (z.B. bezahlter Traffic)

var RFA_IGNORE_CGI_PARAMETER = ['WT.srch', 'wt.srch'];

// Beispiel: var RFA_IGNORE_CGI_PARAMETER = ['gclid', 'xyz'];




// Erkenne all diese Referer an, auch wenn sie einen Parameter der RFA_IGNORE_CGI_PARAMETER Liste enthalten. Referer, die in der   RFA_IGNORE_REFERRER_HOSTNAMES Liste aufgelistet sind, werden trotzdem ignoriert, da diese Liste stärker gewichtet wird als die  RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES Liste.
var RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES = [''];
// Beispiel: var RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES = ['test.test.de', 'test.de'];

// Country und Language für LH.com (z.B. "GB_en"), Language aus Query String für Mobile (z.B. "_de")
var res = '';
if (typeof utag_data !== 'undefined'){
	if (typeof utag_data.Market !== 'undefined' && typeof utag_data.Language !== 'undefined') { //IBM, AMA, SEO
		res = utag_data.Market + '_' + utag_data.Language;
	} else if (typeof utag_data['wt_dcsext_market'] !== 'undefined' && typeof utag_data['wt_dcsext_language'] !== 'undefined') { //mobile
		res = utag_data['wt_dcsext_market'] + '_' + utag_data['wt_dcsext_language'];
	} else if (typeof utag_data['meta.DCSext.Market'] !== 'undefined' && typeof utag_data['meta.DCSext.Language'] !== 'undefined') { //travelguide
		res = utag_data['meta.DCSext.Market'] + '_' + utag_data['meta.DCSext.Language'];
	}
} 
if (res === '') { //mobile Fallback
	res = window.location.search.match(/[?&]l=(\w+)/i);
	if (res && res[1]) res = '_' + res[1];
	else res = '';
}
var RFA_COUNTRY_LANGUAGE = res; 



var RFA_REFERRER_WEBTRENDS_HOSTS = {

	'tradedoubler.com': RFA_WEBTREND_AFFILIATE_AID,

	'go.redirectingat.com': RFA_WEBTREND_AFFILIATE_AID,

	

	'doubleclick.net': RFA_WEBTREND_DISPLAY_AID,

	'travelaudience.com': RFA_WEBTREND_DISPLAY_AID,

	

	'qunar.': RFA_WEBTREND_METASEARCH_AID,

	'skyscanner.': RFA_WEBTREND_METASEARCH_AID,

	'kayak.': RFA_WEBTREND_METASEARCH_AID,

	'momondo.': RFA_WEBTREND_METASEARCH_AID,

	'hipmunk.': RFA_WEBTREND_METASEARCH_AID,

	'fly.com': RFA_WEBTREND_METASEARCH_AID,

	'fly.co.uk': RFA_WEBTREND_METASEARCH_AID,

	'fly.hm': RFA_WEBTREND_METASEARCH_AID,

	'fly.ro': RFA_WEBTREND_METASEARCH_AID,

	'viajala.': RFA_WEBTREND_METASEARCH_AID,

	'dohop.': RFA_WEBTREND_METASEARCH_AID,

	'algofly.': RFA_WEBTREND_METASEARCH_AID,

	'farecompare.': RFA_WEBTREND_METASEARCH_AID,

	'idealo.': RFA_WEBTREND_METASEARCH_AID,

	'aviasales.': RFA_WEBTREND_METASEARCH_AID,

	'swoodoo.': RFA_WEBTREND_METASEARCH_AID,

	'checkfelix.': RFA_WEBTREND_METASEARCH_AID

};




// Social Referrer Hosts getrennt mit Newline

var RFA_SOCIAL_HOSTS = {

	"twitter.com": "Twitter",

	"facebook.com": "Facebook",

	"linkedin.com": "LinkedIn",

	"stumbleupon.com": "StumbleUpon",

	"tumblr.com": "Tumblr",

	"digg.com": "Digg",

	"reddit.com": "reddit",

	"myspace.com": "Myspace",

	"flickr.com": "Flickr",

	"youtube.com": "YouTube",

	"ning.com": "Ning",

	"www.ning.com": "Ning",

	"flixster.com": "Flixster",

	"friendster.com": "Friendster",

	"delicious.com": "Delicious",

	"mixx.com": "Mixx",

	"badoo.com": "Badoo",

	"bebo.com": "Bebo",

	"classmates.com": "Classmates",

	"douban.com": "Douban",

	"fotolog.com": "Fotolog",

	"friendsreunited": "Friendsreunited",

	"hi5.com": "hi5",

	"kaixin001.com": "Kaixin001",

	"mylife.com": "MyLife",

	"myyearbook.com": "myYearbook",

	"orkut.com": "Orkut",

	"qzone.qq": "Qzone",

	"skyrock.com": "Skyrock",

	"sonico.com": "Sonico",

	"studivz": "StudiVZ",

	"trombi.com": "Trombi",

	"tuenti.com": "Tuenti",

	"viadeo.com": "Viadeo",

	"xing.com": "Xing",

	"tagged.com": "Tagged",

	"yelp.com": "Yelp",

	"blogster": "Blogster",

	"foursquare": "Foursquare",

	"mixi.jp": "mixi",

	"gree.jp": "GREE",

	"yahoo-mbga.jp": "Yahoo! Mobage",

	"plus.google.com": "Google Plus",

	"plus.url.google.com": "Google Plus",

	"urbanspoon.com": "Urban Spoon",

	"blogger.com": "Blogger",

	"friendfeed.com": "FriendFeed",

	"hyves.nl": "Hyves",

	"iwiw.hu": "iWiW",

	"me2day.net": "me2day",

	"mxit.com": "MXit",

	"netlog.be": "Netlog",

	"renren.com": "Renren",

	"seesmic.com": "Seesmic",

	"t.qq.com": "t.qq",

	"vkontakte.com": "Vkontakte",

	"vk.com": "Vkontakte",

	"weibo.com": "Weibo",

	"pulse.yahoo.com": "Yahoo! Pulse",

	"t.co": "Twitter t.co",

	"pinterest.com": "Pinterest",

	"odnoklassniki": "odnoklassniki",

	"cyworld.com": "cyworld.com",

	"nate.com": "nate.com",

	"geni.com": "geni.com",

	"buzznet.com": "buzznet.com",

	"instagram.com": "Instagram",

	"instagr.am": "Instagram",

	"perfspot.com": "PerfSpot",

	"zorpia.com": "Zorpia",

	"deviantart.com": "deviantART",

	"livejournal.com": "LiveJournal",

	"cafemom.com": "CafeMom",

	"meetup.com": "Meetup",

	"xanga.com": "Xanga",

	"migente.com": "MiGente",

	"ryze.com": "Ryze",

	"meetme.com": "MeetMe"

};



// SEO Referrer Hosts

var RFA_SEO_HOSTS = {

	"ameta.de": "@meta",

	"nifty.com": "@nifty",

	".infoweb.ne.jp": "@nifty",

	"163.com": "163.com",

	"1blink.com": "1blink.com",

	"3721.com": "3721.com",

	"7search.com": "7search.com",

	".abacho.com": "Abacho",

	".abacho.de": "Abacho",

	"about.com": "About.com",

	".acoon.de": "Acoon",

	"advalvas": "AdValvas",

	"Ah-ha.com": "ah-ha.com",

	"akooe.": "Akooe",

	"alltheweb": "All The Web",

	"allthesites.com": "allthesites.com",

	"au.altavista.com": "AltaVista Australia",

	"at.altavista.com": "AltaVista Austria",

	"be.altavista.com": "AltaVista Belgium",

	"br.altavista.com": "AltaVista Brazil",

	"ca.altavista.com": "AltaVista Canada",

	"dk.altavista.com": "AltaVista Denmark",

	"de.altavista.com": "AltaVista Germany",

	"in.altavista.com": "AltaVista India",

	"nl.altavista.com": "AltaVista Netherlands",

	"nz.altavista.com": "AltaVista New Zealand",

	"pt.altavista.com": "AltaVista Portugal",

	"se.altavista.com": "AltaVista Sweden",

	"ch.altavista.com": "AltaVista Switzerland",

	"uk.altavista.com": "AltaVista United Kingdom",

	".ananzi.": "Ananzi",

	"au.search.anzwers.yahoo.com": "Anzwers Australia",

	"search.aol.ca": "AOL Canada",

	"www.recherche.aol.fr": "AOL France",

	"search.jp.aol.com": "AOL Japan",

	"busqueda.aol.com.mx": "AOL Mexico",

	"search.aol.co.uk": "AOL United Kingdom",

	"netfind": "AOL NetFind",

	".aol.": "AOL NetFind",

	"americaonline": "AOL NetFind",

	".aonde.": "Aonde",

	".arabul.": "Arabul",

	".arama.com": "arama!com",

	"www.arcor.de": "Arcor",

	"search.asiaco.com": "Asiaco",

	"ask.com": "Ask",

	"askjeeves.com": "Ask",

	"ajkids.com": "Ask Jeeves Kids",

	"ask.co.uk": "Ask Jeeves UK",

	"austronaut.": "Austronaut",

	"baidu.com": "Baidu",

	"www.bbc.co.uk": "BBCi",

	"search.biglobe": "Biglobe",

	".bluewin.": "BluWin",

	".bluewindow.": "BluWin",

	"businessweek": "Business Week",

	"cade.": "Cadê",

	"canada.com": "Canada.com",

	".chollian.": "Chollian",

	"pesquisa.clix.pt": "Clix",

	"club-internet.": "Club-Internet",

	"cmpnet": "CMPNet",

	".search.com": "CNET Search.com",

	"cnet": "CNET Search.com",

	"websearch.cs": "CompuServe",

	"compuserve": "CompuServe",

	"daum.net": "Daum.net",

	"dmoz": "dmoz",

	"dogpile": "dogpile",

	"dreamwiz": "DreamWiz",

	"search.earthlink.net": "Earthlink",

	".e-kolay.": "e-kolay.net",

	"empas": "Empas",

	"www.entireweb.com": "Entireweb",

	".euroseek.": "Euroseek",

	"evreka.": "Evreka",

	"excite.fr": "Excite France",

	"excite.de": "Excite Germany",

	"excite.it": "Excite Italy",

	"excite.co.jp": "Excite Japan",

	"excite.co.uk": "Excite UK",

	"find.dk": "Find.dk",

	"findall.de": "FindAll",

	"findwhat.com": "FindWhat",

	".fireball.de": "Fireball",

	"freeserve.com": "Freeserve",

	".fresheye.": "Fresh Eye",

	"froogle.": "Froogle",

	".galaxy.": "Galaxy",

	"gee-wiz": "Gee-Wiz",

	"globetrotter.net": "Globetrotter",

	"search.go.com": "Go",

	"goeureka.com": "GoEureka",

	"gohip.com": "GoHip",

	"www.google.ar": "Google Argentina",

	"www.google.com.ar": "Google Argentina",

	"www.google.com.au": "Google Australia",

	"www.google.at": "Google Austria",

	"www.google.be": "Google Belgium",

	"www.google.com.br": "Google Brazil",

	"www.google.ca": "Google Canada",

	"www.google.cl": "Google Chile",

	"www.google.com.co": "Google Colombia",

	"www.google.dk": "Google Denmark",

	"www.google.fi": "Google Finland",

	"www.google.fr": "Google France",

	"www.google.de": "Google Germany",

	"www.google.com.gr": "Google Greece",

	"www.google.gr": "Google Greece",

	"groups-beta.google.com": "Google Groups",

	"www.google.com.hk": "Google Hong Kong",

	"www.google.co.in": "Google India",

	"www.google.ie": "Google Ireland",

	"www.google.co.il": "Google Israel",

	"www.google.it": "Google Italy",

	"www.google.co.jp": "Google Japan",

	"www.google.co.kr": "Google Korea",

	"www.google.com.mx": "Google Mexico",

	"www.google.nl": "Google Netherlands",

	"www.google.co.nz": "Google New Zealand",

	"www.google.no": "Google Norway",

	"www.google.com.pe": "Google Peru",

	"www.google.pl": "Google Poland",

	"www.google.pt": "Google Portugal",

	"www.google.com.pr": "Google Puerto Rico",

	"www.google.ro": "Google Romania",

	"www.google.ru": "Google Russia",

	"www.google.co.za": "Google South Africa",

	"www.google.es": "Google Spain",

	"www.google.se": "Google Sweden",

	"www.google.ch": "Google Switzerland",

	"www.google.com.tw": "Google Taiwan",

	"www.google.co.th": "Google Thailand",

	"www.google.com.tr": "Google Turkey",

	"www.google.ae": "Google UAE",

	"www.google.co.uk": "Google UK",

	"www.google.com.ua": "Google Ukraine",

	"www.google.co.ve": "Google Venezuela",

	"gulasidorna.se": "Gula Sidorna",

	"gulesider.no": "Gule Sider",

	"hanmir": "Hanmir",

	"highway61.com": "Highway 61",

	"buscar.hispavista.com": "HispaVista",

	"hotbot": "HotBot",

	"www.icq.com": "ICQSearch",

	"be.ilse.n": "Ilse Belgium",

	"search.ilse.nl": "Ilse Netherlands",

	"find.in.gr": "In",

	"inetg.com": "iNET Guide",

	"www.infoseek.co.jp": "Infoseek Japan",

	"websearch.rakuten.co.jp": "Infoseek Japan",

	".infospace.": "InfoSpace",

	"infotiger": "InfoTiger",

	".isize.com": "ISIZE",

	"www.isleuth.com": "Isleuth",

	"iwon.com": "iWon",

	"ixquick": "Ixquick",

	"ixquick.com": "Ixquick Netherlands",

	"dir.jayde.com": "Jayde",

	"jubii.dk": "Jubii",

	"kanoodle": "Kanoodle",

	"kvasir.no": "Kvasir",

	"kvasir.sol": "Kvasir",

	"soeg.sol": "Kvasir",

	"toile.qc.ca": "LaToile",

	".toile.com": "LaToile",

	"lawcrawler": "Lawcrawler",

	"findlaw": "Lawcrawler",

	"libero.it": "Libero",

	"looksmart.com.au": "LookSmart Australia",

	"canada.looksmart": "LookSmart Canada",

	"looksmart.fr": "LookSmart France",

	"looksmart.co.nz": "LookSmart New Zealand",

	"looksmart.co.uk": "LookSmart UK",

	"suche.lycos.at": "Lycos Austria",

	"lycos.com.cn": "Lycos China",

	"lycos.fr": "Lycos France",

	"lycos.de": "Lycos Germany",

	"hk.lycosasia": "Lycos Hong Kong",

	"in.lycosasia": "Lycos India",

	"id.lycosasia": "Lycos Indonesia",

	"lycos.it": "Lycos Italy",

	"lycos.co.jp": "Lycos Japan",

	"my.lycosasia": "Lycos Malaysia",

	"multimedia.lycos": "Lycos Multimedia",

	"lycos.nl": "Lycos Netherlands",

	"ph.lycosasia": "Lycos Phillipines",

	"sg.lycosasia": "Lycos Singapore",

	"lycos.es": "Lycos Spain",

	"lycos.ch": "Lycos Switzerland",

	"tw.lycosasia": "Lycos Taiwan",

	"lycos.co.uk": "Lycos UK",

	"mamma": "Mamma",

	"metacrawler.com": "metacrawler",

	".mirago.": "Mirago",

	".molisearch.": "Molisearch",

	"monstercrawler": "Monstercrawler",

	"search.msn.at": "MSN Austria",

	"search.msn.be": "MSN Belgium",

	"search.msn.com.br": "MSN Brazil",

	"search.msn.dk": "MSN Denmark",

	"search.msn.fi": "MSN Finland",

	"search.msn.fr": "MSN France",

	"search.msn.de": "MSN Germany",

	"search.msn.com.hk": "MSN Hong Kong",

	"search.msn.co.in": "MSN India",

	"search.msn.it": "MSN Italy",

	"search.msn.co.jp": "MSN Japan",

	"search.msn.co.kr": "MSN Korea",

	"search.msn.my": "MSN Malaysia",

	"search.t1msn.com.mx": "MSN Mexico",

	"search.msn.nl": "MSN Netherlands",

	"search.msn.no": "MSN Norway",

	"search.msn.com.sg": "MSN Singapore",

	"search.msn.co.za": "MSN South Africa",

	"search.msn.es": "MSN Spain",

	"search.msn.se": "MSN Sweden",

	"search.msn.ch": "MSN Switzerland",

	"search.msn.com.tw": "MSN Taiwan",

	"search.msn.co.uk": "MSN United Kingdom",

	"www.mweb.co.za": "Mweb",

	".mynet.com": "MyNet",

	"mytelus.com": "MyTELUS",

	".nana.co.il": "Nana.il",

	"nate.com": "Nate.com",

	".nathan.de": "Nathan",

	"naver.jp": "Naver Japan",

	"netscape": "Netscape",

	"nettavisen.no": "Nettavisen",

	"search.ninemsn": "NineMSN",

	"rechercher.nomade": "Nomade",

	"ocn.goo.ne.jp": "OCN",

	".navi.ocn.ne.jp": "OCN",

	"ocnsearch.goo.ne.jp": "OCN",

	"Opplysningen1881.no": "Opplysningen 1881",

	"1881.no": "Opplysningen 1881",

	"websearch.optusnet.com.au": "OptusNet",

	"picsearch.": "Picsearch",

	".porta.": "Porta",

	"profusion.com": "Profusion",

	"qango.": "Qango",

	"radaruol.": "Radar UOL",

	"rambler.ru": "Rambler",

	"redesearch": "RedeSearch",

	"rex-search": "REX Skyline",

	"skyline": "REX Skyline",

	"rr.looksmart.com": "Roadrunner",

	"www.robby.gr": "Robby",

	".sapo.pt": "Sapo",

	"savvy.com": "Savvy",

	"scrubtheweb": "Scrub the Web",

	"www.search.ch": "Search",

	"search123": "Search 123",

	"searchalot": "Searchalot",

	"www.searchfeed.com": "SearchFeed",

	"searchfuel": "SearchFuel",

	"searchking.com": "SearchKing",

	"www.sensis.com.au": "Sensis",

	".sharelook.": "ShareLook",

	"search.sify.com": "Sify",

	"search.simmani": "Simmani",

	"sina": "Sina",

	".slider.com": "Slider",

	"sohu": "Sohu",

	".proff.no": "Proff",

	".soneraplaza.": "Sonera Plaza",

	"splatsearch": "Splatsearch",

	".spray.se": "Spray",

	"lycossvar.spray.se": "Spray",

	".starmedia.": "Star Media",

	"startsiden.no": "Startsiden",

	"sunsteam.com": "SunSteam",

	"suomi24.": "Suomi24",

	"supercrawler": "SuperCrawler",

	"arama.superonline": "SuperOnline",

	"sympatico.ca": "Sympatico.ca",

	".tapuz.co.il": "Tapuz",

	"find.tdconline": "TDC Online",

	"s.teoma.": "Teoma",

	"buscador.terra.": "TerraLycos",

	"tiscali.fr": "Tiscali France",

	"tiscali.de": "Tiscali Germany",

	"tiscali.it": "Tiscali Italy",

	"tiscali.nl": "Tiscali Netherlands",

	"www.tiscali.co.uk": "Tiscali United Kingdom",

	"tjohoo.se": "Tjohoo",

	"t-online.de": "TOnline Germany",

	"tricus.de": "Tricus",

	"www.tygo.com": "Tygo",

	".ukplus.": "UKPlus",

	"verizon.net": "Verizon.net",

	"search.virgilio.it": "Virgilio",

	"vivisimo.": "Vivisimo",

	".voila.com": "Voila geeks",

	".voila.fr": "Voila.fr",

	".walla.co.il": "Walla.il",

	"www.wanadoo.fr": "Wanadoo France",

	"search.wanadoo.co.uk": "Wanadoo UK",

	"webwombat": "Web Wombat",

	".web.de": "Web.de",

	"webcrawler": "WebCrawler",

	"manifest": "What's New Too",

	"widow.com": "Widow",

	"www.wisenut.com": "WiseNut",

	"woyaa": "WoYaa",

	"xtramsn.co.nz": "XtraMSN New Zealand",

	"xupiter.com": "Xupiter",

	"xuppa.com": "Xuppa (Bay9)",

	"bay9": "Xuppa (Bay9)",

	"ya.com": "Ya Spain",

	"au.search.yahoo.": "Yahoo Australia & New Zealand",

	"ca.search.yahoo.": "Yahoo Canada",

	"cn.search.yahoo.": "Yahoo China",

	"fr.search.yahoo.": "Yahoo France",

	"de.search.yahoo.": "Yahoo Germany",

	"hk.search.yahoo.": "Yahoo Hong Kong",

	"in.search.yahoo.": "Yahoo India",

	"it.search.yahoo.": "Yahoo Italy",

	"jp.search.yahoo.": "Yahoo Directory Japan",

	"my.search.yahoo.": "Yahoo Directory Malaysia",

	"sg.search.yahoo.": "Yahoo Singapore",

	"es.search.yahoo.": "Yahoo Spain",

	"tw.search.yahoo.": "Yahoo Taiwan",

	"uk.search.yahoo.": "Yahoo UK & Ireland",




	"ar.search.yahoo.": "Yahoo Argentina",

	"search.asia.yahoo.": "Yahoo Asia",

	"br.busca.yahoo.": "Yahoo Brazil",

	"br.search.yahoo.": "Yahoo Brazil",

	"chinese.search.yahoo.": "Yahoo China",

	"cn.yahoo.": "Yahoo China",

	"dk.search.yahoo.": "Yahoo Denmark",

	"hk.yahoo.": "Yahoo Hong Kong",

	"mobile.yahoo.co.jp": "Yahoo Japan Mobile",

	"yahoo.co.jp": "Yahoo Japan",

	"search.yahoo.co.jp": "Yahoo Japan",

	"kr.search.yahoo.": "Yahoo Korea",

	"kr.yahoo.": "Yahoo Korea",

	"mx.search.yahoo.": "Yahoo Mexico",

	"nl.search.yahoo.": "Yahoo Netherlands",

	"no.search.yahoo.": "Yahoo Norway",

	"se.search.yahoo.": "Yahoo Sweden",

	"search.espanol.yahoo.": "Yahoo US (Spanish)",

	"overture.com": "Yahoo Search Marketing",




	"search.yahooligans.com": "Yahooligans",

	"yandex.ru": "Yandex",

	"zerx": "Zerx",

	"zhongsou": "Zhongsou",

	"kr.altavista.com": "AltaVista Korea",

	"excite.com": "Excite",

	"looksmart.com": "LookSmart",

	".lycos.com": "Lycos",

	"search.lycos.com": "Lycos",

	"search.msn.": "MSN",

	".goo.ne.jp": "Goo",

	".googlesyndication.com": "Google Affiliate Network",

	".seznam.cz": "Seznam",

	".centrum.cz": "Centrum.cz",

	".atlas.cz": "Atlas.cz",

	"jyxo.cz": "Jyxo",

	".tiscali.cz": "Tiscali Czech Republic",

	".quick.cz": "Quick",

	"redbox.cz": "Redbox",

	".volny.cz": "Volný",

	".cent.cz": "Cent",

	".idnes.cz": "iDnes",

	".opendir.cz": "OpenDir",

	".zoohoo.cz": "Zoohoo",

	".1.cz": "1.cz",

	".atila.cz": "Atila",

	".yo.cz": "Yo.cz",

	".caramba.cz": "Caramba",

	"search.microsoft.com": "Microsoft Search",

	"search.live.com": "search.live.com",

	"search.orange.co.uk": "search.orange.co.uk",

	"smarter.com": "smarter.com",

	".eniro.": "Eniro",

	".sesam.": "Sesam",

	".abcsok.": "ABCSok",

	"www.google.cz": "Google Czech",

	"www.google.sk": "Google Slovakia",

	"www.google.hu": "Google Hungary",

	"www.zoznam.sk": "Zosnam Slovakia",

	"www.azet.sk": "Azet Slovakia",

	"hladaj.atlas.sk": "Atlas Slovakia",

	"szukaj.onet.pl": "Onet Poland",

	"szukaj.wp.pl": "Wirtualna Poland",

	"www.ok.hu": "OK Hungary",

	"derdubor.no": "DerDuBor",

	"search.jword.jp": "JWord",

	"ask.jp": "Ask.jp",

	"www.google.cn": "Google China",

	".411.ca": "411.ca",

	".canoe.ca": "Canoe",

	"baidu.jp": "Baidu Japan",

	"www.google.lu": "Google Luxembourg",

	"www.google.com.sa": "Google Saudi Arabia",

	"www.google.com.eg": "Google Egypt",

	"www.google.jo": "Google Jordan",

	"www.google.com.bh": "Google Bahrain",

	"www.google.com.qa": "Google Qatar",

	"www.google.com.pk": "Google Pakistan",

	"www.google.com.om": "Google Oman",

	"www.google.com.my": "Google Malaysia",

	"www.google.com.sg": "Google Singapore",

	"www.google.com.ph": "Google Philippines",

	"www.google.co.ma": "Google Morocco",

	"www.google.com.ly": "Google Libya",

	"www.google.com.af": "Google Afghanistan",

	"www.google.as": "Google American Samoa",

	"www.google.ad": "Google Andorra",

	"www.google.it.ao": "Google Angola",

	"www.google.com.ai ": "Google Anguilla",

	"www.google.com.ag ": "Google Antigua and Barbuda",

	"www.google.am": "Google Armenia",

	"www.google.az": "Google Azerbaijan",

	"www.google.bs ": "Google Bahamas",

	"www.google.com.bd": "Google Bangladesh",

	"www.google.com.by": "Google Belarus",

	"www.google.com.bz ": "Google Belize",

	"www.google.com.bo": "Google Bolivia",

	"www.google.ba": "Google Bosnia and Herzegovina",

	"www.google.co.bw": "Google Botswana",

	"www.google.vg ": "Google British Virgin Islands",

	"www.google.com.bn": "Google Brunei",

	"www.google.bg": "Google Bulgaria",

	"www.google.bi": "Google Burundi",

	"www.google.kh": "Google Cambodia",

	"www.google.com.kh": "Google Cambodia",

	"www.google.co.ck": "Google Cook Islands",

	"www.google.co.cr ": "Google Costa Rica",

	"www.google.ci": "Google Cote d'Ivoire",

	"www.google.hr ": "Google Croatia",

	"www.google.com.cu ": "Google Cuba",

	"www.google.cd": "Google Democratic Republic of the Congo",

	"www.google.dj": "Google Djibouti",

	"www.google.dm ": "Google Dominica",

	"www.google.com.do ": "Google Dominican Republic",

	"www.google.com.ec": "Google Ecuador",

	"www.google.com.sv ": "Google El Salvador",

	"www.google.ee ": "Google Estonia",

	"www.google.com.et": "Google Ethiopia",

	"www.google.fm": "Google Federated States of Micronesia",

	"www.google.com.fj": "Google Fiji",

	"www.google.gm": "Google Gambia",

	"www.google.ge": "Google Georgia",

	"www.google.com.gh": "Google Ghana",

	"www.google.com.gi": "Google Gibraltar",

	"www.google.gl ": "Google Greenland",

	"www.google.gp ": "Google Guadeloupe",

	"www.google.com.gt ": "Google Guatemala",

	"www.google.gg": "Google Guernsey",

	"www.google.com.gy": "Google Guyana",

	"www.google.gy": "Google Guyana",

	"www.google.ht ": "Google Haiti",

	"www.google.hn ": "Google Honduras",

	"www.google.is ": "Google Iceland",

	"www.google.co.id": "Google Indonesia",

	"www.google.im": "Google Isle of Man",

	"www.google.com.jm ": "Google Jamaica",

	"www.google.je": "Google Jersey",

	"www.google.kz": "Google Kazakhstan",

	"www.google.co.ke": "Google Kenya",

	"www.google.ki": "Google Kiribati",

	"www.google.kg": "Google Kyrgyzstan",

	"www.google.la": "Google Laos",

	"www.google.lv ": "Google Latvia",

	"www.google.co.ls": "Google Lesotho",

	"www.google.li ": "Google Liechtenstein",

	"www.google.lt ": "Google Lithuania",

	"www.google.mw": "Google Malawi",

	"www.google.mv": "Google Maldives",

	"www.google.mt ": "Google Malta",

	"www.google.mu": "Google Mauritius",

	"www.google.md ": "Google Moldova",

	"www.google.mn": "Google Mongolia",

	"www.google.ms ": "Google Montserrat",

	"www.google.com.na": "Google Namibia",

	"www.google.nr": "Google Nauru",

	"www.google.com.np": "Google Nepal",

	"www.google.com.ni ": "Google Nicaragua",

	"www.google.com.ng": "Google Nigeria",

	"www.google.nu": "Google Niue",

	"www.google.com.nf": "Google Norfolk Island",

	"www.google.com.pa ": "Google Panama",

	"www.google.com.py": "Google Paraguay",

	"www.google.pn": "Google Pitcairn Islands",

	"www.google.cg": "Google Republic of the Congo",

	"www.google.rw": "Google Rwanda",

	"www.google.sh": "Google Saint Helena",

	"www.google.com.vc ": "Google Saint Vincent and the Grenadines",

	"www.google.ws": "Google Samoa",

	"www.google.sm ": "Google San Marino",

	"www.google.st": "Google Sao Tome and Principe",

	"www.google.sn": "Google Senegal",

	"www.google.sc": "Google Seychelles",

	"www.google.si ": "Google Slovenia",

	"www.google.com.sb": "Google Solomon Islands",

	"www.google.lk": "Google Sri Lanka",

	"www.google.com.tj": "Google Tajikistan",

	"www.google.tl": "Google Timor-Leste",

	"www.google.tk": "Google Tokelau",

	"www.google.to": "Google Tonga",

	"www.google.tt ": "Google Trinidad and Tobago",

	"www.google.tm": "Google Turkmenistan",

	"www.google.co.vi ": "Google US Virgin Islands",

	"www.google.co.ug": "Google Uganda",

	"www.google.com.uy": "Google Uruguay",

	"www.google.co.uz": "Google Uzbekistan",

	"www.google.vu": "Google Vanuatu",

	"www.google.com.vn": "Google Vietnam",

	"www.google.co.zm": "Google Zambia",

	"www.google.co.zw": "Google Zimbabwe",

	"www.cuil.com": "Cuil",

	"twitter.com": "Twitter Search",




	"www.googleadservices.com": "Google Ad Services",

	"www.google.com": "Google",




	"support.microsoft.com": "Microsoft Support Search",

	"najdi.si": "najdi.si",

	"naver": "Naver",

	"sogou": "Sogou",

	"soso": "Soso",

	"attaka-navi": "Attaka Navi",

	"e-poket": "e-poket",

	"jlisting.jp": "Jlisting",

	"the-search.jp": "The Search Japan",

	"chol.com": "Chol",

	"paran.com": "Paran",

	"incruit.com": "Incruit",

	"altavista": "AltaVista",

	"magallanes": "AltaVista",

	"lycos.co.kr": "Lycos Korea",

	"www.google.bf": "Google Burkina Faso",

	"www.google.bj": "Google Benin",

	"www.google.cf": "Google Central African Republic",

	"www.google.cm": "Google Cameroon",

	"www.google.dz": "Google Algeria",

	"www.google.ga": "Google Gabon",

	"www.google.com.kw": "Google Kuwait",

	"www.google.com.lb": "Google Lebanon",

	"www.google.me": "Google Montenegro",

	"www.google.mg": "Google Madagascar",

	"www.google.mk": "Google Macedonia",

	"www.google.ml": "Google Mali",

	"www.google.co.mz": "Google Mozambique",

	"www.google.ne": "Google Niger",

	"www.google.ps": "Google Palestinian Territory",

	"www.google.com.sl": "Google Sierra Leone",

	"www.google.td": "Google Chad",

	"www.google.tg": "Google Togo",

	"www.google.co.tz": "Google Tanzania",

	"www.google.rs": "Google Serbia",

	"youdao.com": "Youdao",

	"blekko.com": "blekko",

	"duckduckgo.com": "DuckDuckGo",

	"scrubtheweb.com": "ScrubTheWeb",

	"gigablast.com": "gigablast",

	"mahalo.com": "Mahalo",

	"yippy.com": "yippy",

	"clusty.com": "Clusty",

	

	"m.aol.com": "AOL",

	"search.aol.com": "AOL",

	"suche.aol.de": "AOL Germany",

	

	"suche.gmx.net": "GMX",

	"suche.gmx.at": "GMX",

	"suche.gmx.ch": "GMX",

	

	"bing.com": "Bing",

	".bing.": "Bing",

	

	"www.google.al": "Google Albania",

	"www.google.bs": "Google Bahamas",

	"www.google.by": "Google Belarus",

	"www.google.cat": "Google Catalan",

	"www.google.co.ao": "Google Angola",

	"www.google.co.cr": "Google Costa Rica",

	"www.google.com.ag": "Google Antigua and Barbuda",

	"www.google.com.bz": "Google Belize",

	"www.google.com.cy": "Google Cyprus",

	"www.google.com.do": "Google Dominican Republic",

	"www.google.com.gt": "Google Guatemala",

	"www.google.com.jm": "Google Jamaica",

	"www.google.com.mt": "Google Malta",

	"www.google.com.pa": "Google Panama",

	"www.google.com.sv": "Google El Salvador",

	"www.google.ee": "Google Estonia",

	"www.google.hn": "Google Honduras",

	"www.google.hr": "Google Croatia",

	"www.google.iq": "Google Iraq",

	"www.google.is": "Google Iceland",

	"www.google.li": "Google Liechtenstein",

	"www.google.lt": "Google Lithuania",

	"www.google.lv": "Google Latvia",

	"www.google.md": "Google Moldova",

	"www.google.si": "Google Slovenia",

	"www.google.tn": "Google Tunisia",

	"www.google.tt": "Google Trinidad and Tobago",

	".google.": "Google",

	

	"at.search.yahoo.com": "Yahoo Austria",

	"au.search.yahoo.com": "Yahoo Australia & New Zealand",

	"ca.search.yahoo.com": "Yahoo Canada",

	"ch.search.yahoo.com": "Yahoo Swiss",

	"cn.search.yahoo.com": "Yahoo China",

	"fr.search.yahoo.com": "Yahoo France",

	"de.search.yahoo.com": "Yahoo Germany",

	"gr.search.yahoo.com": "Yahoo Greece",

	"hk.search.yahoo.com": "Yahoo Hong Kong",

	"in.search.yahoo.com": "Yahoo India",

	"it.search.yahoo.com": "Yahoo Italy",

	"jp.search.yahoo.com": "Yahoo Directory Japan",

	"my.search.yahoo.com": "Yahoo Directory Malaysia",

	"sg.search.yahoo.com": "Yahoo Singapore",

	"es.search.yahoo.com": "Yahoo Spain",

	"ro.search.yahoo.com": "Yahoo Romania",

	"ru.search.yahoo.com": "Yahoo Russia",

	"tw.search.yahoo.com": "Yahoo Taiwan",

	"uk.search.yahoo.com": "Yahoo UK & Ireland",

	"xa.search.yahoo.com": "Yahoo Arabic",

	"ar.search.yahoo.com": "Yahoo Argentina",

	"search.asia.yahoo.com": "Yahoo Asia",

	"br.busca.yahoo.com": "Yahoo Brazil",

	"br.search.yahoo.com": "Yahoo Brazil",

	"chinese.search.yahoo.com": "Yahoo China",

	"cn.yahoo.com": "Yahoo China",

	"dk.search.yahoo.com": "Yahoo Denmark",

	"hk.yahoo.com": "Yahoo Hong Kong",

	"kr.search.yahoo.com": "Yahoo Korea",

	"kr.yahoo.com": "Yahoo Korea",

	"mx.search.yahoo.com": "Yahoo Mexico",

	"nl.search.yahoo.com": "Yahoo Netherlands",

	"no.search.yahoo.com": "Yahoo Norway",

	"se.search.yahoo.com": "Yahoo Sweden",

	"search.espanol.yahoo.com": "Yahoo US (Spanish)",

	"ca.yahoo.": "Yahoo Canada",

	"search.yahoo.": "Yahoo",

	"yahoo.": "Yahoo",

	"yandex.": "Yandex",

	




	"search.mail.com": "mail.com",

	"search.freenet.de": "Freenet",

	"search.naver.com": "Naver",

	"naver.": "Naver",

	"sogou.": "Sogou",

	"soso.": "Soso",

	"attaka-navi.": "Attaka Navi",

	"e-poket.": "e-poket",

	"altavista.": "AltaVista",

	"magallanes.": "AltaVista",

	"suche.1und1.de": "1und1"

};



var RFA_GROUP_REFERRER_HOSTS = [

	"mail.live.com",

	"mail.yahoo.com"

];



// Name des Tracking Servers

var RFA_TRACKING_HOSTNAME = 'r.refinedads.com';



// Wird der Tracking Server ueber HTTP oder HTTPS aufgerufen

if (window.location && window.location.protocol && window.location.protocol == 'https:')

{

	var RFA_TRACKING_URL = 'https://' + RFA_TRACKING_HOSTNAME;

}

else

{

	var RFA_TRACKING_URL = 'http://' + RFA_TRACKING_HOSTNAME;

}



// Parser fuer die Splittung der URLs (Ebenen c1, c2, c3). Domains als Kleinbuchstaben normalisiert und ggf. vorhandene Punkte am Ende entfernt.

RFA_Url_Parser = function(url){ this.url = url; this.parseUrl(url); };

RFA_Url_Parser.prototype.regexp = /(https?:\/\/)([a-zA-Z0-9_\-\.]+[a-zA-Z]+)\.?(:[0-9]+)?\/?(.*)?/;

RFA_Url_Parser.prototype.parseUrl = function(url){ result = this.url.match(this.regexp); if (!result){ result = []; } this.scheme = result[1] || ""; this.host = result[2] || ""; this.port = result[3] || ""; this.path = result[4] || ""; return this; };

RFA_Url_Parser.prototype.getQueryValue = function(key){ key = key.replace(new RegExp("[\\[]"),"\\\[").replace(new RegExp("[\\]]"),"\\\]"); var regexS = "[\\?&]"+key+"=([^&#]*)"; var regex = new RegExp(regexS); var results = regex.exec(this.url); if( results === null ){ return ""; } else { return decodeURIComponent(results[1]); }};

RFA_Url_Parser.prototype.getHost = function(){ if (this.host){ return this.host.toLowerCase(); } return "na"; };

RFA_Url_Parser.prototype.getPath = function(){ if (this.path){ var testPath = "/" + this.path; if (testPath.indexOf("#") != -1){ testPath = testPath.substr(0, testPath.indexOf("#")); } if (testPath.indexOf("?") != -1){ return testPath.substr(0, testPath.indexOf("?")); } return testPath; } return "/"; };

RFA_Url_Parser.prototype.getTLD = function(){ if (!this.host){ return ""; } var hostParts = this.host.toLowerCase().split(".").reverse(); var tldParts = [hostParts[0]]; if (hostParts[1]){ tldParts.push(hostParts[1]); } if (tldParts.join(".").length <= 5 && hostParts[2]){ tldParts.push(hostParts[2]); } return tldParts.reverse().join(".");};

function RFA_Cookie_Get(key){var i,j,c,all=document.cookie.split(";");for (i=0;i<all.length;i++){c=all[i];j=c.indexOf("=");if (c.substr(0,j).replace(/^\s+|\s+$/g,"")==key){return unescape(c.substr(j+1));}}}

function RFA_Cookie_Set(key, value, minutes, domain){var cookieParts = [key + "=" + escape(value)];if (minutes !== null && minutes !== undefined){var d = new Date();d.setMinutes(d.getMinutes() + minutes);cookieParts.push("Expires="+d.toUTCString());}if (domain !== null && domain !== ""){cookieParts.push("Domain="+domain);}cookieParts.push("Path=/");document.cookie=cookieParts.join("; ");}

function RFA_trim(str) { return str.replace(/^\s+|\s+$/gm,''); }

function RFA_endsWith(str, searchString, position) { var subjectString = str; if (position === undefined || position > subjectString.length) { position = subjectString.length; } position -= searchString.length; var lastIndex = subjectString.indexOf(searchString, position); return lastIndex !== -1 && lastIndex === position; }





// Die Funktion, um den eigentlichen Trackingpixel (anyChannel Redirect) im Browser zu erstellen

RFA_SEO_GENERIC_Tracking = function() 

{

	var i, referrerParser;




	var siteParser = new RFA_Url_Parser(document.location.href);

	

	if (!RFA_COOKIE_DOMAIN) {

		RFA_COOKIE_DOMAIN = siteParser.getTLD();

	}

	

	if (RFA_Cookie_Get(RFA_COOKIE_NAME))

	{

		// Falls Session Cookie vorhanden ist, diesen verlängern

		RFA_Cookie_Set(RFA_COOKIE_NAME, 1, RFA_COOKIE_LIFETIME, RFA_COOKIE_DOMAIN);




	}



	var trackUrl = function(aid, oid, level1, level2, level3)

	{

		// document.write('<img src="' + RFA_TRACKING_URL + "/r.rfa?aid=" + aid + "&oid=" + oid + "&c1=" + encodeURIComponent(level1) + "&c2=" + encodeURIComponent(level2) + "&c3=" + encodeURIComponent(level3) + "&url=" + encodeURIComponent(RFA_TRACKING_URL) + "%2Fpixel.gif" + '" width="1" height="1">');

		// Async call option

		

		var trackingUrl = RFA_TRACKING_URL + "/r.rfa?aid=" + aid + "&oid=" + oid + "&c1=" + encodeURIComponent(level1) + "&c2=" + encodeURIComponent(level2) + "&c3=" + encodeURIComponent(level3) + "&onsite=1";

		

		if (document.referrer) {

			trackingUrl += "&referrerUrl=" + encodeURIComponent(document.referrer);

		}

		

		(function(){ var d=document, i=d.createElement('img'); i.width='1'; i.height='1'; i.alt=''; i.src=trackingUrl; d.body.appendChild(i); })();

		

		// Falls ein Touchpoint getrackt wird, wird ein Session Cookie gesetzt

		RFA_Cookie_Set(RFA_COOKIE_NAME, 1, RFA_COOKIE_LIFETIME, RFA_COOKIE_DOMAIN);

	};

	

	var hasIgnoreParameter = false;

	

	if (RFA_IGNORE_CGI_PARAMETER && RFA_IGNORE_CGI_PARAMETER.length > 0)

	{

		for (i = 0; i < RFA_IGNORE_CGI_PARAMETER.length; i++)

		{

			if (siteParser.getQueryValue(RFA_IGNORE_CGI_PARAMETER[i]) !== "")

			{

				hasIgnoreParameter = true;

			}

		}

	}

	

	var referrerUrl = document.referrer, referrerHost;

	

	if (referrerUrl) {

		// Referer URL splitten

		referrerParser = new RFA_Url_Parser(referrerUrl);

		referrerHost = referrerParser.getHost();

	}



	var webTrendMcId = siteParser.getQueryValue('WT.mc_id') || siteParser.getQueryValue('wt.mc_id');

	

	if (!webTrendMcId) {

		var dwmwr = siteParser.getQueryValue('dwmwr');

		if (dwmwr) {

			var split = dwmwr.split("&");

			

			for (i = 0; i < split.length; i++) {

				var keyValue = split[i].split("=");

				

				if (keyValue.length == 2 && (keyValue[0] == 'WT.mc_id' || keyValue[0] == 'wt.mc_id')) {

					webTrendMcId = decodeURIComponent(keyValue[1]);

				}

			}

		}

	}

	

	if (webTrendMcId || referrerUrl) {

	

		var webTrendAID = 0, webTrendMcIdSplit;

	

		if (webTrendMcId) {

			webTrendMcIdSplit = webTrendMcId.split("_");

			

			if (webTrendMcIdSplit.length > 0) {

				

				switch(webTrendMcIdSplit[0].toLowerCase()) {

					case 'nlemail':

						webTrendAID = RFA_WEBTREND_LHNEWSLETTER_AID;

						break;

					case 'email':

						webTrendAID = RFA_WEBTREND_EMAILINGS_AID;

						break;

					case 'onlad':

						webTrendAID = RFA_WEBTREND_DISPLAY_AID;

						break;

					case 'affiliate':

						webTrendAID = RFA_WEBTREND_AFFILIATE_AID;

						break;

					case 'meta':

						webTrendAID = RFA_WEBTREND_METASEARCH_AID;

						break;

					case 'game':

						webTrendAID = RFA_WEBTREND_GAME_AID;

						break;

				}

				

				// Webtrend Social Campaigns Check

				for (var socialCampaignHost in RFA_SOCIAL_HOSTS) {

					if (RFA_SOCIAL_HOSTS.hasOwnProperty(socialCampaignHost)) {

						if (webTrendMcIdSplit[0].toLowerCase() == RFA_SOCIAL_HOSTS[socialCampaignHost].toLowerCase()) {

							webTrendAID = RFA_WEBTREND_SOCIALCAMPAIGNS_AID;

							break;

						}

					}

				}

			}

		}

		

		if (!webTrendAID && referrerUrl) {

			// Webtrend Referrer Check

			for (var referrerCampaignHost in RFA_REFERRER_WEBTRENDS_HOSTS) {

				if (RFA_REFERRER_WEBTRENDS_HOSTS.hasOwnProperty(referrerCampaignHost)) {

					if (RFA_endsWith(referrerHost, referrerCampaignHost) || (RFA_endsWith(referrerCampaignHost, ".") && referrerHost.indexOf(referrerCampaignHost) != -1)) {

						if (referrerCampaignHost.indexOf("travelaudience") != -1) {

							if (!hasIgnoreParameter) {

								webTrendAID = RFA_REFERRER_WEBTRENDS_HOSTS[referrerCampaignHost];

							}

						} else {

							webTrendAID = RFA_REFERRER_WEBTRENDS_HOSTS[referrerCampaignHost];

						}

					}

				}

			}

		}

		

		if (webTrendAID) {

			var c1 = RFA_COUNTRY_LANGUAGE;

			var c2 = 'default';

			var c3 = 'default';

			

			if (webTrendMcIdSplit && webTrendMcIdSplit[1]) {



				c2 = webTrendMcIdSplit[1];

			}



			if (webTrendMcIdSplit && webTrendMcIdSplit[4]) {



				c3 = webTrendMcIdSplit.slice(4).join("_");

			}

			

			trackUrl(webTrendAID, RFA_OID, c1, c2, c3);

			return;

		}

	}




	

	// Wenn es einen Referer gibt

	if (referrerUrl)

	{




		// Traffic vom selben Hostname. Wenn der Traffic vom selben Host kommt, nicht ausloesen. 

		// Beispiel: User navigiert innerhalb verschiedener Seiten von "shop.beispiel.de" und das Pixel ist auf allen Seiten eingebaut. Wechselt er auf "test.beispiel.de" (SEO/Generic-Pixel ist hier eingebaut), ist "shop.beispiel.de" der Referer, der gezaehlt wird. 

		// Es kann hier per Definition auch die TLD (Top Level Domain) eingetragen werden, wenn dies gewuenscht ist. (ACHTUNG: Domains mit co.uk) Beipiel: User kommt auf "shop.beispiel.de" navigiert innerhalb und wechselt dann auf "test.beispiel.de" (SEO/Generic-Pixel ist hier eingebaut). Es wird kein Referer gezaehlt, da beides "beispiel.de".

		if (siteParser.getHost() == referrerHost)

		{

			return;

		}



		// Ueberpruefe ob: Bazahlter Traffic und nicht in Referer Acknowledge Liste

		if (!(RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES && RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES.length > 0 && RFA_ACKNOWLEDGE_REFERRER_HOSTNAMES.join(" ").indexOf(referrerHost) != -1) && hasIgnoreParameter)




		{




			// Bezahlter Traffic

			return;

		}




		

		// Traffic von Hosts, die mit Eintraegen aus der Referer Ignore Liste enden, loest den Pixel nicht aus.

		if (RFA_IGNORE_REFERRER_HOSTNAMES && RFA_IGNORE_REFERRER_HOSTNAMES.length > 0)

		{

			for (i = 0; i < RFA_IGNORE_REFERRER_HOSTNAMES.length; i++) {

				if (referrerHost.indexOf(RFA_IGNORE_REFERRER_HOSTNAMES[i], referrerHost.length - RFA_IGNORE_REFERRER_HOSTNAMES[i].length) !== -1) {

					return;

				}

			}

		}

		

		//  Google Flight Check

		if (

			(referrerHost == 'flights.google.com' || referrerHost.indexOf(".google.") != -1) && 

			(referrerParser.getPath().substring(0, 8) == '/flights' || referrerParser.getPath().substring(0, 7) == '/travel')

			) {

			trackUrl(RFA_GOOGLE_FLIGHT_SEARCH_AID, RFA_OID, RFA_COUNTRY_LANGUAGE, referrerHost, referrerParser.getPath());

			return;

		}

		

		// SEO Referrer Check

		for (var seoHost in RFA_SEO_HOSTS) {

			if (RFA_SEO_HOSTS.hasOwnProperty(seoHost)) {

				if (RFA_endsWith(referrerHost, seoHost) || (RFA_endsWith(seoHost, ".") && referrerHost.indexOf(seoHost) != -1)) {




					trackUrl(RFA_SEO_AID, RFA_OID, RFA_COUNTRY_LANGUAGE, RFA_SEO_HOSTS[seoHost], referrerHost);

					return;

				}

			}

		}

		

		// Social Referrer Check

		for (var socialHost in RFA_SOCIAL_HOSTS) {

			if (RFA_SOCIAL_HOSTS.hasOwnProperty(socialHost)) {

				if (RFA_endsWith(referrerHost, socialHost)) {

					trackUrl(RFA_SOCIALMEDIA_AID, RFA_OID, RFA_COUNTRY_LANGUAGE, RFA_SOCIAL_HOSTS[socialHost], referrerHost);

					return;

				}

			}

		}

		

		// Group Referrer Check

		for (var groupReferrerHost in RFA_GROUP_REFERRER_HOSTS) {

			if (RFA_GROUP_REFERRER_HOSTS.hasOwnProperty(groupReferrerHost)) {

				if (RFA_endsWith(referrerHost, RFA_GROUP_REFERRER_HOSTS[groupReferrerHost])) {

					referrerHost = RFA_GROUP_REFERRER_HOSTS[groupReferrerHost];

				}

			}

		}

		

		// Andere Referrer

		trackUrl(RFA_GENERIC_AID, RFA_OID, RFA_COUNTRY_LANGUAGE, referrerHost, referrerParser.getPath());

		return;

	}

	else

	{

		// Typeins/Bookmarks oder blockierte Referer

		

		if (hasIgnoreParameter) {




			// Bezahlter Traffic ohne Referer oder Bookmark

			return;

		}

		

		// Direkt nur ohne Session Cookie tracken 

		if (!RFA_Cookie_Get(RFA_COOKIE_NAME)) {

			// Direct Traffic

			trackUrl(RFA_DIRECT_AID, RFA_OID, RFA_COUNTRY_LANGUAGE, "default", "default");

		}

		return;

	}

};



RFA_SEO_GENERIC_Tracking();	
	
// ########### RFA Custom Code by BlueSummit ############# END


        /* End Tag Sending Code */


        /* Start Loader Callback Function */
        /* Un-comment the single-line JavaScript comments ("//") to use this Loader callback function. */

        //u.loader_cb = function () {
          //u.initialized = true;
          /* Start Loader Callback Tag Sending Code */

            // Insert your post-Loader tag sending code here.

          /* End Loader Callback Tag Sending Code */
        //};

        /* End Loader Callback Function */


        /* Start Loader Function Call */
        /* Un-comment the single-line JavaScript comments ("//") to use Loader. */

          //if (!u.initialized) {
            //u.loader({"type" : "iframe", "src" : u.data.base_url + c.join(u.data.qsp_delim), "cb" : u.loader_cb, "loc" : "body", "id" : 'utag_126' });
            //u.loader({"type" : "script", "src" : u.data.base_url, "cb" : u.loader_cb, "loc" : "script", "id" : 'utag_126' });
          //} else {
            //u.loader_cb();
          //}

          //u.loader({"type" : "img", "src" : u.data.base_url + c.join(u.data.qsp_delim) });

        /* End Loader Function Call */


        //##UTENABLEDEBUG##utag.DB("send:##UTID##:COMPLETE");
      }
    };
    utag.o[loader].loader.LOAD(id);
  })("126", "lufthansa.main");
} catch (error) {
  utag.DB(error);
}
//end tealium universal tag

