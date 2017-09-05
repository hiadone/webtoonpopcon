
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>webtoonpopcon</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/import.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="plugins/jquery.fitvids.js"></script>
<!-- bxSlider CSS file -->
<!-- step.3 Call the bxSlider-->
<!-- <link href="css/reset2.css" rel="stylesheet" type="text/css"> -->


<script type='text/javascript' src='http://www.mobipopcon.com/js/jquery.cookie.js'></script>
<script type='text/javascript' src='http://www.mobipopcon.com/js/shortcut.js'></script>
<script type='text/javascript' src='http://admin.newdealpopcon.com/views/press/press.js?post_md=adpop&brd_id=11'></script>

</head>

<body  onload="callScheme('GRP', 9, 'DEFAULT')">
<!-- 헤더 영역 -->
<header>

<h1><a href="#"><img src="images/logo.png" alt="logo"></a></h1>
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

<!-- "기본주소/tomix/index.php?MD=moneyW"=> 주소는 내가 정의를해줌 ,  기본주소에서 tomix 파일 안에있는 index.php파일에 MD값이 moneyW와 같을때 "lib/media_code.php" 파일에 정의해놓은  각각의 section 의 id값에 해당하는 page 코드 값을 넣어라 -->


<nav class="menu">
    <ul>
      <li><a href="./index.php?MD=<?php echo $MD?>" class="<?=$ca5?>">홈</a></li>   <!-- main.php 파일을 불러온다 --> 
      <li id="red"><a href="./index.php?MD=<?php echo $MD?>&ad=ca1" class="<?=$ca1?>">성인</a></li> 
      <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca2" class="<?=$ca2?>">요일별</a></li>  
      <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca3" class="<?=$ca3?>">장르별</a></li>  
      <li><a href="./index.php?MD=<?php echo $MD?>&ad=ca4" class="<?=$ca4?>">완결</a></li>
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
  <figure><a href="mailto:jbpark@hiadone.com"><img src="images/event_04.jpg" alt="event"></a></figure>
  <p><a href="">서비스 이용약관  | </a><a href="tel:02-2105-7498"> 전화 제휴문의  |</a><a href=""> 개인정보취급방침</a></p>
</footer>
<!-- ========= -->


<?php
/* 페이지 트래픽 확인 코드 */
?>
<iframe width="0" height="0" src="http://ad.ad4989.co.kr/cgi-bin/PelicanC.dll?impr?pageid=<?=$sCode?>&out=iframe" allowTransparency = "true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" ></iframe>

<!-- 구글애널리틱스 시작 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88829342-4', 'auto');
  ga('send', 'pageview');

</script>
<!-- 구글애널리틱스 끝 -->


</body>
</html>
