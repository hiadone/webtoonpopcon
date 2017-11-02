<?php
include "lib/media_code.php";
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>webtoonpopcon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/import.css" rel="stylesheet" type="text/css">
<link rel="icon" href="http://www.popapp.co.kr/images/favi.png" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="plugins/jquery.fitvids.js"></script>
<!-- bxSlider CSS file -->
<!-- step.3 Call the bxSlider-->
<!-- <link href="css/reset2.css" rel="stylesheet" type="text/css"> -->
<script type='text/javascript' src='/js/jquery.cookie.js'></script>
<script src="../common/js/common.js"></script>
<!-- 구글애널리틱스 시작 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88829342-4', 'auto');
  ga('send', 'pageview');
 (function() {
              function async_load(){
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.id='hiadone_shortcut';
                s.src = "/common/type_shortcut.js?brd_key=shortcut&post_md=auction&v=0.1111";
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
              }
              window.attachEvent ? window.attachEvent('onload', async_load) : window.addEventListener('load', async_load, false);
            })();
</script>
<!-- 구글애널리틱스 끝 -->
<script>
var MD = "<?=$MD?>";	
		/*
		var webtoonCookieName=  "webtoon_"+MD;
		var cookieValue = 1;

		var cookieExpire = 0.2 ;

		// console.log("cookie => "+type_id_name+" :::: "+visitTerm);
		// console.log("(visitTerm  ==  undefined) => "+(visitTerm  ==  undefined));
		if(!get_cookie(webtoonCookieName) && MD==='bu_ca' ){
			$.ajax({
				type: "GET", 
				async: true,
				data: "pageid=06z1&lang=utf-8&out=json", 
				url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
				cache: false, 
				dataType: "jsonp", 
				jsonp: "jquerycallback",
				success: function(data) 
				{
				},
				error: function(xhr, status, error) {} 
			});
			set_cookie(webtoonCookieName,cookieValue,cookieExpire)
		}

		if(!get_cookie(webtoonCookieName) && MD==='bu_wi' ){
			$.ajax({
				type: "GET", 
				async: true,
				data: "pageid=06z2&lang=utf-8&out=json", 
				url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
				cache: false, 
				dataType: "jsonp", 
				jsonp: "jquerycallback",
				success: function(data) 
				{
				},
				error: function(xhr, status, error) {} 
			});
			set_cookie(webtoonCookieName,cookieValue,cookieExpire)
		}
*/
	$(document).ready(function(){
    <?php if($_GET['brd_key']==='mobusi'){ ?>
  
      $('section').bind('click',function(){
        $.ajax({
            type: "GET", 
            async: true,
            data: "PREFIJO=<?=$_GET['param2']?>&PUBID=<?=$_GET['param3']?>&PIXEL=<?=$_GET['param1']?>", 
            url: "http://dbpopcon.com/postact/mobusi_click/<?=$_GET['MD']?>/<?=$_GET['brd_key']?>",
            dataType : 'json',
            success: function(data) 
            {
            },
            error: function(xhr, status, error) {} 
        });

    });

    <?php } ?>
	});

   
</script>
<?php 
//echo $popstate;
 ?>
<?php if ( $popstate === 'enable' && empty($ad) ) { ?>
<script language = "javascript"> 
var MD = "<?=$MD?>";
    $(document).ready(function() {
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, document.location.href);
        
        var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

        $(window).bind('popstate', function (event) {
          // Ignore inital popstate that some browsers fire on page load
          var initialPop = !popped && location.href == initialURL
          popped = true
          if (initialPop) return;
			
 		  
          if(MD=="default") ShowShopEmpty('05W1');
          else parent.top.location.replace("<?=$locationUrl?>");
          

        });
    }
});



function ShowShopEmpty(value) {

  //  if (index < 1) { return; }
    $.ajax({
        type: "GET", 
        async: true,
        data: "pageid="+value+"&lang=utf-8&out=json", 
        url: "http://ad.ad4989.co.kr/cgi-bin/pelicanc.dll?impr", 
        cache: false, 
        dataType: "jsonp", 
        jsonp: "jquerycallback",
        success: function(data) 
        {
            parent.top.location.replace("<?=$locationUrl?>");
        },
        error: function(xhr, status, error) {} 
    });
}
</script>
<?php } ?>


 

</head>

<body>

<!-- 헤더 영역 -->
<header>

<h1><a href="<?php echo $_SERVER['REQUEST_URI']?>"><img src="images/logo.png" alt="logo"></a></h1>
<!-- ========= -->


<!-- 메뉴클릭시 li에 active 클래스를 추가 -->
<?php
	if ( $ad == "ca1" ) {
		$ca1 = "active"; // 요일별
	}else if ( $ad == "ca2" ) {
		$ca2 = "active"; // 성인
	}else if ( $ad == "ca3" ) {
		$ca3 = "active"; // 장르
	}else if ( $ad == "ca4" ) {
		$ca4 = "active"; // 완결
	}else{
		$ca5 = "active"; // 홈
	}
?>
<!-- ========= -->


<!-- 메뉴클릭시 li에 active 클래스를 추가 -->
<!-- echo 출력해라 의 의미
	 ? 파일을 무었인가를 가려와라를 의미 
     <? ?> php 파일의 기본 언어 (선언언어) -->

<!-- "기본주소/tomix/md.php?MD=moneyW"=> 주소는 내가 정의를해줌 ,  기본주소에서 tomix 파일 안에있는 md.php파일에 MD값이 moneyW와 같을때 "lib/media_code.php" 파일에 정의해놓은  각각의 section 의 id값에 해당하는 page 코드 값을 넣어라 -->


<nav class="menu">
    <ul>
	  <li><a href="javascript:location.replace('./md.php?MD=<?php echo $MD?>&brd_key=<?=$_GET['brd_key']?>&param2=<?=$_GET['param2']?>&param3=<?=$_GET['param3']?>&param1=<?=$_GET['param1']?>');" class="<?=$ca5?>">홈</a></li>   <!-- main.php 파일을 불러온다 -->       
      <li><a href="javascript:location.replace('./md.php?MD=<?php echo $MD?>&ad=ca2&brd_key=<?=$_GET['brd_key']?>&param2=<?=$_GET['param2']?>&param3=<?=$_GET['param3']?>&param1=<?=$_GET['param1']?>');" class="<?=$ca2?>">요일별</a></li> 
      <li id="red"><a href="javascript:location.replace('./md.php?MD=<?php echo $MD?>&ad=ca1&brd_key=<?=$_GET['brd_key']?>&param2=<?=$_GET['param2']?>&param3=<?=$_GET['param3']?>&param1=<?=$_GET['param1']?>');" class="<?=$ca1?>">성인</a></li>  
      <li><a href="javascript:location.replace('./md.php?MD=<?php echo $MD?>&ad=ca3&brd_key=<?=$_GET['brd_key']?>&param2=<?=$_GET['param2']?>&param3=<?=$_GET['param3']?>&param1=<?=$_GET['param1']?>');" class="<?=$ca3?>">장르별</a></li>  
	  <li><a href="javascript:location.replace('./md.php?MD=<?php echo $MD?>&ad=ca4&brd_key=<?=$_GET['brd_key']?>&param2=<?=$_GET['param2']?>&param3=<?=$_GET['param3']?>&param1=<?=$_GET['param1']?>');" class="<?=$ca4?>">완결</a></li>
    </ul>
</nav>
<!-- ========= -->


</header>
<!-- ========= -->


<?php
	if ( $ad == "ca1" ) {
				include "include/ca1.php"; // 요일별
	}else if ( $ad == "ca2" ) {
				include "include/ca2.php";  // 성인
	}else if ( $ad == "ca3" ) {
				include "include/ca3.php";  // 장르
	}else if ( $ad == "ca4" ) {
				include "include/ca4.php";  // 완결
	}else{
				include "include/main.php";  // 홈
	}
?>
    
    
    
    
<!-- 푸터영역 -->    
<footer>
   <!--<h3><a href="http://www.popapp.co.kr">광고 / 제휴문의</a></h3>  -->
<figure><a href="mailto:newspopcon@gmail.com"><img src="images/event_04.jpg" alt="event"></a></figure>
  <p><a href="">서비스 이용약관  | </a><!-- <a href="tel:02-2105-7498"> 전화 제휴문의  |</a> --><a href=""> 개인정보취급방침</a></p>
  <!--<iframe src='http://script.theprimead.co.kr/winggoSetCookiePage.php?code=MzkyMA%3D%3D&_NMNCODE_=&_NMNURL_=http%3A%2F%2Fwww.popapp.co.kr%2Fanytoon%2Fmd.php%3FMD%3Dadpop' height='0' width='0'></iframe>-->
</footer>
<!-- ========= -->


<?php
/* 페이지 트래픽 확인 코드 */
?>

<iframe width="0" height="0" src="http://ad.ad4989.co.kr/cgi-bin/PelicanC.dll?impr?pageid=<?=$sCode?>&out=iframe" allowTransparency = "true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" ></iframe>

<script src="http://ad.ad4989.co.kr/cgi-bin/PelicanC.dll?impr?pageid=06wM&lang=utf-8&out=script"></script>



</body>
</html>
