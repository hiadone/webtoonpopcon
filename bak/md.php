<?php
include "lib/media_code.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="-1">

	<meta property="og:title" content="웹툰팝콘" />
	<meta property="og:url" content="http://www.popapp.co.kr" />
	<meta property="og:description" content="인기 웹툰 순위 정보를 알려 드립니다." />
	<meta property="og:image" content="http://www.popapp.co.kr" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="/bak/css/common.css" rel="stylesheet" />
	<link href="/bak/css/content.css" rel="stylesheet" />
	<link href="/bak/css/frame.css" rel="stylesheet" />

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type='text/javascript' src='http://www.mobipopcon.com/js/jquery.cookie.js'></script>
	<script type='text/javascript' src='http://www.mobipopcon.com/js/shortcut.js'></script>

<?php if ( $script == "back") { ?>
<script language = "javascript"> 
    $(document).ready(function() {
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, document.location.href);
        
        var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

        $(window).bind('popstate', function (event) {
          // Ignore inital popstate that some browsers fire on page load
          var initialPop = !popped && location.href == initialURL
          popped = true
          if (initialPop) return;
          
          parent.top.location.replace("<?=$locationUrl?>");
          

        });
    }
});
</script>
<?php } ?>
<!--구글애널리틱스 시작 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88853523-2', 'auto');
  ga('send', 'pageview');

</script>
<!--구글애널리틱스 끝 -->

	<title>ME팝콘</title>
</head>
<body onload="callScheme('GRP', 9, 'DEFAULT')">
	<!-- GNB 시작 -->
	<header>
		<nav>
			<div class="container">
				<ul class="nav HEADER">
					<li>
					<button class="ssm-toggle-nav">
					<span></span>
					<span></span>
					<span></span>
					</button>
					</li>
					<li><div class="logo">ME팝콘</div></li>
					<li><div class="search"><img src="image/icon-search.png"></div></li>
				</ul>
			</div>
		</nav>
	</header>
	<!--/* GNB 끝 -->

		<?php
	if ( $ad == "ca1" ) {
		$ca1 = "active"; // 신작
	}else if ( $ad == "ca2" ) {
		$ca2 = "active"; // 성인
	}else{
		$ca5 = "active"; // 홈
	}
?>
		<menu>
			<div class="container">
				<ul class="nav-second">
					<li><a href="/bak/md.php?MD=<?=$MD?>" class="<?=$ca5?> animsition-link">홈</a></li>
					<li><a href="/bak/md.php?MD=<?=$MD?>&ad=ca1" class="<?=$ca1?> animsition-link">신작</a></li>
					<li><a href="/bak/md.php?MD=<?=$MD?>&ad=ca2" class="<?=$ca2?> animsition-link adult">성인</a></li>
						<!-- <li><a href="/bak/md.php?MD=<?=$MD?>&ad=ca3" class="<?=$ca3?> animsition-link">완결</a></li>
					<li><a href="/bak/md.php?MD=<?=$MD?>&ad=ca4" class="<?=$ca4?> animsition-link">주간BEST</a></li> -->
				</ul>
			</div>
		</menu>


	</header>
	<!--/* GNB 끝 -->

	<?php
		if ( $ad == "ca1" ) {
			include "include/ca1.php"; // 신작
		}else if ( $ad == "ca2" ) {
			include "include/ca2.php";  // 성인
		}else{
			include "include/mdmain.php";  // 메인
		}
	?>

	<footer>
		<div class="container">
			<span>서비스이용약관</span> &nbsp;|&nbsp; <span class="active">개인정보취급방침</span> &nbsp;|&nbsp; <span>제휴문의</span>
		</div>
	</footer>
<?php
/* 페이지 트래픽 확인 코드 */
?>
<iframe width="0" height="0" src="http://ad.ad4989.co.kr/cgi-bin/PelicanC.dll?impr?pageid=<?=$sCode?>&out=iframe" allowTransparency = "true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" ></iframe>
</body>
</html>