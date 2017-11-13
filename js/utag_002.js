//tealium universal tag - utag.sender.4001 ut4.0.201512091454, Copyright 2015 Tealium.com Inc. All Rights Reserved.
try{
(function(id,loader,u){
  try{u=utag.o[loader].sender[id]={}}catch(e){u=utag.sender[id]};
  u.ev={'view':1};
  u.src='1016557';
  u.type='';
  u.cat='retarget';
  u.multicat="";
  u.qty=0;
  u.countertype='standard';
  u.qsp_delim=';';
  u.kvp_delim='=';
  u.map={"departure_airport":"u2","destination_airport":"u3","booking_class":"u5","current_page":"u11","pax_adult_amt":"u12","logged_in":"u13","portal":"u17","dfa_country_id":"type","outboundDateDDM":"u20","outboundDateDMY":"u1","inboundDateDMY":"u10"};
  u.extend=[function(a,b,c,d,e,f,g){d=b['Market'];if(typeof d=='undefined')return;c=[{'AE':'779119s'},{'AL':'865079s'},{'AM':'766813s'},{'AR':'766758s'},{'AT':'125305s'},{'AU':'253289s'},{'AZ':'766803s'},{'BE':'125308s'},{'BG':'641399s'},{'BH':'766804s'},{'BR':'766757s'},{'BY':'766801s'},{'CA':'253285s'},{'CD':'766773s'},{'CH':'125306s'},{'CL':'766759s'},{'CN':'253271s'},{'CO':'766768s'},{'CY':'766760s'},{'CZ':'253267s'},{'DE':'63874s'},{'DK':'125303s'},{'EE':'779120s'},{'EG':'766761s'},{'ES':'221694s'},{'ET':'766915s'},{'FI':'125304s'},{'FR':'221692s'},{'GH':'766805s'},{'GQ':'766914s'},{'GR':'253263s'},{'HK':'253272s'},{'HR':'864154s'},{'HU':'253269s'},{'ID':'536601s'},{'IE':'719583s'},{'IL':'253274s'},{'IN':'253273s'},{'IQ':'766771s'},{'IR':'766774s'},{'IS':'766806s'},{'IT':'221693s'},{'JO':'766916s'},{'JP':'291094s'},{'KR':'536602s'},{'KW':'766762s'},{'KZ':'766807s'},{'LB':'766917s'},{'LT':'779122s'},{'LU':'253264s'},{'LV':'779121s'},{'LY':'766775s'},{'MA':'253280s'},{'MT':'766763s'},{'MX':'253286s'},{'MY':'253275s'},{'NG':'766777s'},{'NL':'125307s'},{'NO':'125301s'},{'NZ':'766767s'},{'OM':'766808s'},{'PH':'253276s'},{'PK':'779123s'},{'PL':'253265s'},{'PT':'125309s'},{'QA':'766764s'},{'RO':'779117s'},{'RS':'766809s'},{'RU':'253266s'},{'SA':'766765s'},{'SE':'125302s'},{'SG':'253277s'},{'SK':'864151s'},{'SL':'864152s'},{'TH':'253279s'},{'TM':'766810s'},{'TN':'766918s'},{'TR':'253268s'},{'TW':'253278s'},{'UA':'766778s'},{'UK':'63875s'},{'GB':'63875s'},{'US':'253287s'},{'VE':'253288s'},{'VN':'555696s'},{'ZA':'779118s'},{'PA':'767009s'},{'KE':'767010s'}];var m=false;for(e=0;e<c.length;e++){for(f in c[e]){if(d==f){b['dfa_country_id']=c[e][f];m=true};};if(m)break};if(!m)b['dfa_country_id']='NA';}];

  u.send=function(a,b){
    if(u.ev[a]||typeof u.ev.all!='undefined'){
      for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};
      var c,d,e,f,g;
      c=[];g=[];
      for(d in utag.loader.GV(u.map)){if(typeof b[d]!='undefined'&&b[d]!=''){e=u.map[d].split(',');for(f=0;f<e.length;f++){
        if(/^(cat|multicat|type|src|cost|qty|ord)$/.test(e[f])) {
          u[e[f]]=b[d];
        }else{
	  g.push(e[f]+u.kvp_delim+encodeURIComponent(b[d]))
        }
      }}}
      u.base_url='//'+u.src+'.fls.doubleclick.net/activityi;src='+u.src+';type='+u.type+';';

      if(u.multicat==""){
        u.multicat_arr=[u.cat];
      }else{
	u.multicat_arr=u.multicat.split(';');
      }

      if(b._corder || (u.ord && u.cost)){
        if(!u.qty && typeof b._cquan!='undefined'){for(f=0;f<b._cquan.length;f++){u.qty+=parseInt(b._cquan[f]);}};
        if(u.qty==0){u.qty=1};
        c.push('qty='+(u.qty));
        c.push('cost='+(u.cost?u.cost:b._csubtotal));
        if(g.length>0)c.push(g.join(';'));
        c.push('ord='+(u.ord?u.ord:b._corder));
      }else if (u.countertype=='standard'){
        if(g.length>0)c.push(g.join(';'));
        c.push('ord='+(Math.random()*10000000000000));
      }else if (u.countertype=='unique'){
        if(g.length>0)c.push(g.join(';'));
        c.push('ord=1');
        c.push('num='+(Math.random()*10000000000000));
      }else{ 
        if(g.length>0)c.push(g.join(';'));
        c.push('ord='+(u.ord?u.ord:window.utag.data['cp.utag_main_ses_id']));
      }
      
      for(f=0;f<u.multicat_arr.length;f++){
        d=document.createElement('iframe');d.setAttribute('id','utag_55_iframe');d.setAttribute('height','1');d.setAttribute('width','1');d.setAttribute('style','display:none');
        d.setAttribute('src',u.base_url+'cat='+u.multicat_arr[f]+((c.length>0)?';'+c.join(u.qsp_delim):'')+'?');
        document.body.appendChild(d);
      }
    }
  }
  try{utag.o[loader].loader.LOAD(id)}catch(e){utag.loader.LOAD(id)}
})('55','lufthansa.main');
}catch(e){}
//end tealium universal tag
//~~tv:4001.20130530
