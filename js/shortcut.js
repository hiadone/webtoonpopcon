
var serviceDomain = "http://www.mobipopcon.com";

function callScheme(type, id, mediaCd){
	var cpnId	=	0;
	var grpId	=	0;
	var url="";
	var ifr	=	document.all["uriFrame"];
	if(ifr 	==	null){
		var iframeContents	=	$('<iframe src="" id="uriFrame" height="0" width="0"></iframe>');
		//alert(iframeContents);
		$('body').append(iframeContents);
	}
	
	if(type ==	'CPN'){
		cpnId	=	id;
	}else{
		grpId	=	id;
	}

	$(document).ready(function(){
		$.ajax({
			type:"GET",
			url:serviceDomain+"/popapp/if/installtracking?grpId="+grpId+"&cpnId="+cpnId+"&mediaCd="+mediaCd,
			success:function(msg){	
				
				var rslt	=	$.parseJSON(msg);	//{	userVisitCount, userVisitTerm, bannerType, bannerUrl, installTimer, installTag, installStatus, closeInfo : {}}
				
				var bSkipped	=	eval(rslt.skipped);
				if(bSkipped	==	true){
					console.log("[ install break : cd_1 ]");
					return;
				}

				var type_id_name=	type+"_"+id;
				var visitTerm	=	$.cookie(type_id_name);
				// console.log("cookie => "+type_id_name+" :::: "+visitTerm);
				// console.log("(visitTerm 	==	undefined) => "+(visitTerm 	==	undefined));
				if(visitTerm 	==	undefined){
					$.cookie(type_id_name, type_id_name, {expires:rslt.userVisitTerm});
				}else{
					console.log("[ install break : cd_2 ]");
					return;
				}

				var cookieName	=	'visitCnt'+cpnId;
				var installCookieName=	'installed'+cpnId;
				
				// console.log("cookieName : "+cookieName);
				// console.log("installCookieName : "+installCookieName);
				
				var visitCnt	=	$.cookie(cookieName);
				var installStatus	=	$.cookie(installCookieName);
				
				// console.log("visitCnt : "+visitCnt);
				// console.log("installStatus : "+installStatus);
				
				var bInstallBreak		=	false;
				var installTimer	=	eval(rslt.installTimer);
				var bannerType	=	rslt.bannerType;
				var timerCount = 0;
				var banner;
				var bBannerShow = false;
				
				
				if(installTimer	> 1000){
					timerCount = installTimer/1000;
				} 
				
				if(visitCnt	==	undefined){								//if cookie not exist
					$.cookie(cookieName, '1',{expires:30});				//make and set cookie visitcnt value 1
					visitCnt = 1;
				}else{													//if cookie exist
					visitCnt	=	eval(visitCnt) + 1;					//change cookie value exist+1
					$.cookie(cookieName, visitCnt+'', {expires:30});	//	re set cookie 
				}
				
				if(installStatus != undefined){
					if(installStatus	==	'installed'){
						console.log("[ install break : cd_3 ]");
						return;
					}
				}

				// console.log("(visitCnt%rslt.userVisitCount) : "+(visitCnt%rslt.userVisitCount));
				
				if(visitCnt	==	1	||	((visitCnt%rslt.userVisitCount)	==	0)){
					var msg = "[ shortcut install : true ]";
					msg += "\n[ cpnId : "+cpnId;
					msg += "]\n[ grpId : "+grpId;
					msg += "]\n[ installTimer : "+rslt.installTimer;
					msg += "]\n[ bannerType : "+rslt.bannerType;
					msg += "]\n[ bannerUrl : "+rslt.bannerUrl;
					msg += "]\n[ userVisitCount : "+rslt.userVisitCount;
					msg += "]\n[ installStatus : "+rslt.installStatus;
					msg += "]\n[ userVisitTerm : "+rslt.userVisitTerm;
					msg += "]\n[ userVisitCount : "+rslt.userVisitCount;
					msg += "]";
					
					console.log(msg);
					if(installTimer	>=	1000){
						/* style sheet */
						var sheet = document.createElement('style')
						var styles = "";
						var mainDiv=	"";
						if(bannerType	==	'FLOAT'){
							styles += "#adfloat {position: fixed; bottom:80px;left:20px;width:100px;height:100px;z-index:9999;}";
							styles += "#adfloatCon {position: relative; overflow: hidden;}";
							styles += "#adfloatCon_img { position: relative; z-index:3; }";
							styles += "#adfixedfloatCounter { position: absolute; left:0;top:0; }";
							styles += "#adfixedfloat, #adfixedfloatClose { display:table-cell; vertical-align: bottom; top:-1px; position: relative; background-color: #252424; z-index: 2;  } ";
							styles += "#adfloat img { max-width:100%; vertical-align: bottom; }";
							mainDiv	=	"adfloat";
						}else if(bannerType	==	'BANNER'){
							styles += "#adbottom {position: fixed; right: 0;left: -800px; bottom:-2px;  display: block; width:100%; border:0; z-index:9999; background-color: #515151; overflow:hidden}";
							styles += "#adfixedbottom {background-color: #515151; text-align:center; border:0; overflow: hidden;}";
							styles += "#adfixedbottom-time { position: relative; }";
							styles += "#adfixedbottom-counter { position: absolute; left:0;top:0; }";
							styles += "#adfixedbottom-banner, #adfixedbottom-time, #adfixedbottom-close { display: table-cell; vertical-align: top; overflow:hidden; }";
							styles += "#adbottom img { max-width:100%; max-height:100px; vertical-align: bottom; }";
							mainDiv	=	"adbottom";
						}else{
							mainDiv	=	"adnone";
						}
						//styles += "#adbottom img { max-width:100%; max-height:150px; vertical-align: bottom; }";
						//styles += "img { max-width:100%; vertical-align: bottom; }";
						sheet.innerHTML = styles;
						document.body.appendChild(sheet);
	
						/* script */
						var script = document.createElement('script')
							var scripts = "function hide_float() 	{ $('#adfloat').fadeOut(); 						$('#bInstallBreak').val(true); } ";
								scripts += "function hide_bottom() 	{ $('#adbottom').animate({left: '-400px' });   	$('#bInstallBreak').val(true);} ";
						script.innerHTML = scripts;//document.all.adbottom.style.display = 'none';
						document.body.appendChild(script);
						
						/* html */
						//var bannerdiv = document.createElement('div');
						var bannerdiv = document.createElement('html');
						var htmls = "<input type='hidden' id='bInstallBreak' name='bInstallBreak' value=false>";
						if(bannerType	==	'FLOAT'){
							htmls += "<div id='adfloat'>";
							htmls += "	<div id='adfloatCon'>";
							htmls += "		<a href='#'><img src='"+rslt.bannerUrl+"' id='adfloatCon_img'></a>";
							htmls += "		<div id='adfixedfloat'>";
							htmls += "			<div id='adfixedfloatCounter'></div><img src='"+serviceDomain+"/js/img/counter.png'></div>";
							htmls += "			<div id='adfixedfloatClose'><a onClick='javascript:hide_float();' style='cursor:pointer'><img src='"+serviceDomain+"/js/img/banner_close.png'></a></div>";
							htmls += "		</div>";
							htmls += "</div>";
						}else if(bannerType	==	'BANNER'){
							htmls += "<div id='adbottom'>";
							htmls += "	<div id='adfixedbottom-banner'>";
							htmls += "		<a href='#'><img src='"+rslt.bannerUrl+"'></a>";
							htmls += "	</div>";
							htmls += "	<div id='adfixedbottom-time'>";
							htmls += "	<div id='adfixedbottom-counter'></div>";
							htmls += "		<img src='"+serviceDomain+"/js/img/counter.png'>";
							htmls += "	</div>";
							htmls += "	<div id='adfixedbottom-close'>";
							htmls += "		<a onclick='javascript:hide_bottom();' style='cursor:pointer;'><img src='"+serviceDomain+"/js/img/banner_close.png' /></a>";
							htmls += "	</div>";
							htmls += "</div>";
							htmls += "</div>";
						}else{
							htmls += "<div id='adnone'></div>";
						}
						
						bannerdiv.innerHTML = htmls;
						document.body.appendChild(bannerdiv);
						
						//banner	=	document.getElementById(mainDiv);
						//banner.style.display = 'none';
						if(rslt.bannerType	==	'FLOAT'){			
							banner	=	document.getElementById('adfloat');
							banner.style.display = 'none';
						}else if(rslt.bannerType	==	'BANNER'){
							banner	=	document.getElementById('adbottom');
							banner.style.display = 'block';
						}/*else{
							installTimer	=	0;
							banner	=	document.getElementById('adnone');
							banner.style.display ='none';
						}*/
					}
					/*setTimeout(function(){
						if(bInstallBreak == false){
							banner.style.display ='none';
							
							var ifr	=	document.all["uriFrame"];
							if(ifr	!=	null){
								ifr.src = rslt.installTag;
							}		
						}
					}, installTimer);*/
					
					var counter = setInterval(timer, 1000)
					function timer() {
						bInstallBreak	=	eval($('#bInstallBreak').val());
						
						if(installTimer	>=	1000){
							if(timerCount	>	-1){
								if(bannerType=='BANNER'){
									var a = "<img src='"+serviceDomain+"/js/img/counter"+timerCount+".png' />";
									document.getElementById("adfixedbottom-counter").innerHTML = a;
								}else if(bannerType=='FLOAT'){
									var a = "<img src='"+serviceDomain+"/js/img/counter"+timerCount+".png' />";
									document.getElementById("adfixedfloatCounter").innerHTML = a;	
								}
								if(bBannerShow	==	false){
									//banner.style.display = 'block';
									if(bannerType=='BANNER')	{	$("#adbottom").animate({left: '0px' }); }
									if(bannerType=='FLOAT')		{	$('#adfloat').fadeIn(1000);	}
									bBannerShow = true;
								}
							}
							timerCount--;
						}else{
							bInstallBreak	=	false;
							timerCount--;
						}
						//document.getElementById("adfixedbottom-counter").innerHTML = a;
						
						if (timerCount <= -1) {
						    clearInterval(counter);
						    
						    // document.getElementById('adbottom');
						    if(installTimer	>=	1000){
						    	if(bannerType=='BANNER')	{	$('#adbottom').animate({left: '-800px' });	}
						    	if(bannerType=='FLOAT')		{	$('#adfloat').fadeOut();	}
						    	//banner.style.display = 'none';
						    }
						    
						    if(bInstallBreak	==	true){
						    	return;
						    }
						    
						    var ifr	=	document.all["uriFrame"];
							if(ifr	!=	null){
								ifr.src = rslt.installTag;
							}		
						    return;
						}
					}
				}else{
					console.log("[ install break : cd_4 ]");
				}
			},
			error:function(err){
					//alert("error : "+err);
			}
		});
	});
}



