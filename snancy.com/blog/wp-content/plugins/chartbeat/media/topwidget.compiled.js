function d(a){this.d=j(this,"background-color",a.background,"");this.a=j(this,"border-color",a.border,"");this.e=j(this,"background-color",a.header_bgcolor,"");this.c=j(this,"color",a.text,"");this.f=j(this,"color",a.header_color,"")||this.c;this.b=a.limit||10;var b=this;d.callback=function(i){var e=['<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%">','<tr style="border: 1px solid; ',b.a,'"><th colspan=2 style="text-align: center; font-size: 18px; font-weight: normal; ',
b.a,b.e,b.f,'padding: 5px 10px;">',"Top pages</th></tr>"];if(e.push){i.length||e.push('<tr><td style="padding:5px; font-size: 14px; text-align: center;">No top pages right now.</td></tr>');for(var h=0;h<i.length&&h<b.b;++h){var f=i[h],l=f.i||f.path,m=f.visitors==1?"1 person":f.visitors+" people";e.push('<tr style="border: 1px solid; ',b.a,b.d,'"><td style="padding: 5px 10px;" valign="top"><a href="http://',p(f.path,b.host),'" style="font-size: 12px; text-decoration:none;">',n(b,l,30),'</a></td><td style="padding: 5px 10px; font-size: 10px; text-align: right;',
b.c,'" valign="top"> ',m,"</td></tr>")}e.push('<tr style="border-top: 1px solid; ',b.a,'">','<td colspan=2 style="padding-top: 3px; text-align: right; font-size: 12px">','<a href="http://chartbeat.com" style="color: #555; text-decoration:none;" target="_blank">','<img border=0 src="http://static2.chartbeat.com/images/branding/favicons/chartbeat.png">&nbsp;',"chartbeat</a></td></tr></table>");document.getElementById("cb_top_pages").innerHTML=e.join("")}};this.host=k(this,a.host||location.host);c=cbproxy.ajaxurl+"?action=cbproxy-submit&url="+encodeURIComponent("/toppages/?"+
"jsonp=CBTopPagesWidget.callback&limit="+this.b)+"&cbnonce="+cbproxy.cbnonce;a=document.getElementsByTagName("head")[0];var g=document.createElement("script");g.type="text/javascript";g.src=c;a.appendChild(g)}window.CBTopPagesWidget=d;function j(c,a,b,g){if(c=b||g)return a+":"+c+";";return""}function n(c,a,b){if(a.length<=b)return a;return a.substr(a,b-3)+"..."}
function k(c,a){a=a.replace(/^https?:\/\//i,"");a=a.replace(/\s*/g,"");a=a.replace(/^(www.)/i,"");a=a.replace(/\/.*/g,"");return a=a.replace(/[^0-9A-Za-z.-]*/g,"")};
p = function(p,d){if(p.search(/\.[A-Z,a-z]*\//)==-1){return k(this,d)+p;}else{return p;};};
