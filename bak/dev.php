<?php
header("Pragma: no-cache");
header("Cache-Control: no-store, no-cache, must-revalidate"); 
$ad = isset($_GET["ad"])?$_GET["ad"] : '';
$MD = isset($_GET["MD"])?$_GET["MD"] : '';

// 신작
$canpid1 = "03kn"; // 최신작
$canpid2 = "03jt"; // 추천신작
$canpid3 = "03iH"; // 인기신작
$canpid4 = "03kZ"; // 맞춤신작
// 성인
$caapid1 = "03hG"; // 인기작
$caapid2 = "03hU"; // 추천상품
$caapid3 = "03hi"; // hot cut
$caapid4 = "03k7"; // 배너1
$caapid5 = "03hx"; // top choice
$caapid6 = "03kL"; // 배너2
// 완결
$caopid1 = "03iW"; // 인기작
$caopid2 = "03iX"; // cut
$caopid3 = "03iY"; // choice
// 주간 베스트
$cabpid1 = "03jR"; // 이번달
$cabpid2 = "03jD"; // 금주
$cabpid3 = "03jf"; // 투믹스
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

	<link href="/css/common.css" rel="stylesheet" />
	<link href="/css/content.css" rel="stylesheet" />
	<link href="/css/frame.css" rel="stylesheet" />

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<title>웹툰팝콘</title>
</head>
<body>

<div class="animsition">
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
					<li><div class="logo"><a href="/">웹툰팝콘</a></div></li>
					<li><div class="search"><img src="image/icon-search.png"></div></li>
				</ul>
			</div>
		</nav>

<?php
	if ( $ad == "ca1" ) {
		$ca1 = "active"; // 신작
	}else if ( $ad == "ca2" ) {
		$ca2 = "active"; // 성인
	}else if ( $ad == "ca3" ) {
		$ca3 = "active"; // 완결
	}else if ( $ad == "ca4" ) {
		$ca4 = "active"; // 주간
	}else{
		$ca5 = "active"; // 홈
	}
?>
		<menu>
			<div class="container">
				<ul class="nav-second">
					<li><a href="/index2.php" class="<?=$ca5?> animsition-link">홈</a></li>
					<li><a href="/index2.php?ad=ca1" class="<?=$ca1?> animsition-link">신작</a></li>
					<li><a href="/index2.php?ad=ca2" class="<?=$ca2?> animsition-link adult">성인</a></li>
					<li><a href="/index2.php?ad=ca3" class="<?=$ca3?> animsition-link">완결</a></li>
					<li><a href="/index2.php?ad=ca4" class="<?=$ca4?> animsition-link">주간BEST</a></li>
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
		}else if ( $ad == "ca3" ) {
			include "include/ca3.php";  // 완결
		}else if ( $ad == "ca4" ) {
			include "include/ca4.php";  // 주간 best
		}else{
			include "include/main.php";  // 메인
		}
	?>

	<footer>
		<div class="container">
			<span>서비스이용약관</span> &nbsp;|&nbsp; <span class="active">개인정보취급방침</span> &nbsp;|&nbsp; <span>제휴문의</span>
		</div>
	</footer>

</div>

	<!-- <script src="js/animsition.min.js" charset="utf-8"></script> -->
	<!-- <script>
		$(document).ready(function() {
			$('.animsition').animsition({
				inDuration: 500,
				outDuration: 300,
				linkElement: '.animsition-link'
			});
		});
	</script> -->
</body>
</html>