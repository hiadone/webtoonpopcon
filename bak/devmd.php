<?php
$MD = isset($_GET["MD"])?$_GET["MD"] : '';
$ad = isset($_GET["ad"])?$_GET["ad"] : '';


if ( $MD == "default") {
	$sCode = "03Kq"; // 트래픽 체크
	$pageid1 = "03Jx"; // 딷근한 신작소식
	$pageid2 = "03Jw"; //오늘의 인기 웹툰
	$pageid3 = "03Jy"; // 무료 웹툰 BEST
	$pageid4 = "03K6"; // 심쿵! 추천웹툰
	$pageid5 = "03K7"; // 직장인 생활정보
	$pageid6 = "03K5"; //베스트웹툰 TOP5
	$pageid7 = "03K0"; // 탑배너
	$pageid8 = "03K1"; // 센터배너
	$pageid9 = "03K2"; // 푸터배너

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

	// 2016-12-07  배너 슬롯 추가 업데이트
	$nbpageid1 = "03sb"; //신작
	$nbpageid2 = "03sc"; //신작
	$nbpageid3 = "03sd"; //신작
	$nbpageid4 = "03se"; //완결
	$nbpageid5 = "03sf"; //완결
	$nbpageid6 = "03sg"; //완결
	$nbpageid7 = "03sh"; //주간
	$nbpageid8 = "03si"; //주간
	$nbpageid9 = "03sj"; //주간

} else if ( $MD == "moneyW") {  // 머니워크
	$sCode = "03N0"; // 트래픽 체크
	$pageid1 = "03LR"; // 딷근한 신작소식
	$pageid2 = "03LZ"; //오늘의 인기 웹툰
	$pageid3 = "03LS"; // 무료 웹툰 BEST
	$pageid4 = "03La"; // 심쿵! 추천웹툰
	$pageid5 = "03LY"; // 직장인 생활정보
	$pageid6 = "03LX"; //베스트웹툰 TOP5
	$pageid7 = "03LT"; // 탑배너
	$pageid8 = "03LV"; // 센터배너
	$pageid9 = "03LW"; // 푸터배너

	// 신작
$canpid1 = "03ko"; // 최신작
$canpid2 = "03ju"; // 추천신작
$canpid3 = "03iI"; // 인기신작
$canpid4 = "03ka"; // 맞춤신작
// 성인
$caapid1 = "03hH"; // 인기작
$caapid2 = "03hV"; // 추천상품
$caapid3 = "03hj"; // hot cut
$caapid4 = "03k8"; // 배너1
$caapid5 = "03hy"; // top choice
$caapid6 = "03kM"; // 배너2
// 완결
$caopid1 = "03ib"; // 인기작
$caopid2 = "03j0"; // cut
$caopid3 = "03iZ"; // choice
// 주간 베스트
$cabpid1 = "03jS"; // 이번달
$cabpid2 = "03jE"; // 금주
$cabpid3 = "03jg"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03r0"; //신작
$nbpageid2 = "03r1"; //신작
$nbpageid3 = "03r2"; //신작
$nbpageid4 = "03r3"; //완결
$nbpageid5 = "03r4"; //완결
$nbpageid6 = "03r5"; //완결
$nbpageid7 = "03r6"; //주간
$nbpageid8 = "03r7"; //주간
$nbpageid9 = "03r8"; //주간

} else if ( $MD == "Ofun") {  // 오펀
	$sCode = "03N9"; // 트래픽 체크
	$pageid1 = "03MU"; // 딷근한 신작소식
	$pageid2 = "03Mc"; //오늘의 인기 웹툰
	$pageid3 = "03MV"; // 무료 웹툰 BEST
	$pageid4 = "03Ma"; // 심쿵! 추천웹툰
	$pageid5 = "03Md"; // 직장인 생활정보
	$pageid6 = "03MZ"; //베스트웹툰 TOP5
	$pageid7 = "03MW"; // 탑배너
	$pageid8 = "03MX"; // 센터배너
	$pageid9 = "03MY"; // 푸터배너

// 신작
$canpid1 = "03kw"; // 최신작
$canpid2 = "03k2"; // 추천신작
$canpid3 = "03iQ"; // 인기신작
$canpid4 = "03ki"; // 맞춤신작
// 성인
$caapid1 = "03hP"; // 인기작
$caapid2 = "03hd"; // 추천상품
$caapid3 = "03hr"; // hot cut
$caapid4 = "03kG"; // 배너1
$caapid5 = "03i6"; // top choice
$caapid6 = "03kU"; // 배너2
// 완결
$caopid1 = "03j8"; // 인기작
$caopid2 = "03is"; // cut
$caopid3 = "03ij"; // choice
// 주간 베스트
$cabpid1 = "03ja"; // 이번달
$cabpid2 = "03jM"; // 금주
$cabpid3 = "03jo"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03sA"; //신작
$nbpageid2 = "03sB"; //신작
$nbpageid3 = "03sC"; //신작
$nbpageid4 = "03sD"; //완결
$nbpageid5 = "03sE"; //완결
$nbpageid6 = "03sF"; //완결
$nbpageid7 = "03sG"; //주간
$nbpageid8 = "03sH"; //주간
$nbpageid9 = "03sI"; //주간

} else if ( $MD == "asia2day") {  // 아시아투데이
	$sCode = "03N5"; // 트래픽 체크
	$pageid1 = "03MB"; // 딷근한 신작소식
	$pageid2 = "03MI"; //오늘의 인기 웹툰
	$pageid3 = "03MC"; // 무료 웹툰 BEST
	$pageid4 = "03MH"; // 심쿵! 추천웹툰
	$pageid5 = "03MJ"; // 직장인 생활정보
	$pageid6 = "03MG"; //베스트웹툰 TOP5
	$pageid7 = "03MD"; // 탑배너
	$pageid8 = "03ME"; // 센터배너
	$pageid9 = "03MF"; // 푸터배너

// 신작
$canpid1 = "03ku"; // 최신작
$canpid2 = "03k0"; // 추천신작
$canpid3 = "03iO"; // 인기신작
$canpid4 = "03kg"; // 맞춤신작
// 성인
$caapid1 = "03hN"; // 인기작
$caapid2 = "03hb"; // 추천상품
$caapid3 = "03hp"; // hot cut
$caapid4 = "03kE"; // 배너1
$caapid5 = "03i4"; // top choice
$caapid6 = "03kS"; // 배너2
// 완결
$caopid1 = "03j6"; // 인기작
$caopid2 = "03iu"; // cut
$caopid3 = "03ih"; // choice
// 주간 베스트
$cabpid1 = "03jY"; // 이번달
$cabpid2 = "03jK"; // 금주
$cabpid3 = "03jm"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03rs"; //신작
$nbpageid2 = "03rt"; //신작
$nbpageid3 = "03ru"; //신작
$nbpageid4 = "03rv"; //완결
$nbpageid5 = "03rw"; //완결
$nbpageid6 = "03rx"; //완결
$nbpageid7 = "03ry"; //주간
$nbpageid8 = "03rz"; //주간
$nbpageid9 = "03s0"; //주간

} else if ( $MD == "bridgenews") {  // 브릿지경제
	$sCode = "03N1"; // 트래픽 체크
	$pageid1 = "03Lt"; // 딷근한 신작소식
	$pageid2 = "03M0"; //오늘의 인기 웹툰
	$pageid3 = "03Lu"; // 무료 웹툰 BEST
	$pageid4 = "03Lz"; // 심쿵! 추천웹툰
	$pageid5 = "03M1"; // 직장인 생활정보
	$pageid6 = "03Ly"; //베스트웹툰 TOP5
	$pageid7 = "03Lv"; // 탑배너
	$pageid8 = "03Lw"; // 센터배너
	$pageid9 = "03Lx"; // 푸터배너

// 신작
$canpid1 = "03kr"; // 최신작
$canpid2 = "03jx"; // 추천신작
$canpid3 = "03iL"; // 인기신작
$canpid4 = "03kd"; // 맞춤신작
// 성인
$caapid1 = "03hK"; // 인기작
$caapid2 = "03hY"; // 추천상품
$caapid3 = "03hm"; // hot cut
$caapid4 = "03kB"; // 배너1
$caapid5 = "03i1"; // top choice
$caapid6 = "03kP"; // 배너2
// 완결
$caopid1 = "03j3"; // 인기작
$caopid2 = "03ix"; // cut
$caopid3 = "03ie"; // choice
// 주간 베스트
$cabpid1 = "03jV"; // 이번달
$cabpid2 = "03jH"; // 금주
$cabpid3 = "03jj"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03rR"; //신작
$nbpageid2 = "03rS"; //신작
$nbpageid3 = "03rT"; //신작
$nbpageid4 = "03rU"; //완결
$nbpageid5 = "03rV"; //완결
$nbpageid6 = "03rW"; //완결
$nbpageid7 = "03rX"; //주간
$nbpageid8 = "03rY"; //주간
$nbpageid9 = "03rZ"; //주간

} else if ( $MD == "asiae") {  // 아시아경제
	$sCode = "03N2"; // 트래픽 체크
	$pageid1 = "03M2"; // 딷근한 신작소식
	$pageid2 = "03M9"; //오늘의 인기 웹툰
	$pageid3 = "03M3"; // 무료 웹툰 BEST
	$pageid4 = "03M8"; // 심쿵! 추천웹툰
	$pageid5 = "03MA"; // 직장인 생활정보
	$pageid6 = "03M7"; //베스트웹툰 TOP5
	$pageid7 = "03M4"; // 탑배너
	$pageid8 = "03M5"; // 센터배너
	$pageid9 = "03M6"; // 푸터배너

	// 신작
$canpid1 = "03kt"; // 최신작
$canpid2 = "03jz"; // 추천신작
$canpid3 = "03iN"; // 인기신작
$canpid4 = "03kf"; // 맞춤신작
// 성인
$caapid1 = "03hM"; // 인기작
$caapid2 = "03ha"; // 추천상품
$caapid3 = "03ho"; // hot cut
$caapid4 = "03kD"; // 배너1
$caapid5 = "03i3"; // top choice
$caapid6 = "03kR"; // 배너2
// 완결
$caopid1 = "03j5"; // 인기작
$caopid2 = "03iv"; // cut
$caopid3 = "03ig"; // choice
// 주간 베스트
$cabpid1 = "03jX"; // 이번달
$cabpid2 = "03jJ"; // 금주
$cabpid3 = "03jl"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03rj"; //신작
$nbpageid2 = "03rk"; //신작
$nbpageid3 = "03rl"; //신작
$nbpageid4 = "03rm"; //완결
$nbpageid5 = "03rn"; //완결
$nbpageid6 = "03ro"; //완결
$nbpageid7 = "03rp"; //주간
$nbpageid8 = "03rq"; //주간
$nbpageid9 = "03rr"; //주간

} else if ( $MD == "tvdaily") {  // 티브이데일리
	$sCode = "03N4"; // 트래픽 체크
	$pageid1 = "03Mn"; // 딷근한 신작소식
	$pageid2 = "03Mw"; //오늘의 인기 웹툰
	$pageid3 = "03Mp"; // 무료 웹툰 BEST
	$pageid4 = "03Mv"; // 심쿵! 추천웹툰
	$pageid5 = "03Mx"; // 직장인 생활정보
	$pageid6 = "03Mt"; //베스트웹툰 TOP5
	$pageid7 = "03Mq"; // 탑배너
	$pageid8 = "03Mr"; // 센터배너
	$pageid9 = "03Ms"; // 푸터배너

	// 신작
$canpid1 = "03ky"; // 최신작
$canpid2 = "03k4"; // 추천신작
$canpid3 = "03iS"; // 인기신작
$canpid4 = "03kk"; // 맞춤신작
// 성인
$caapid1 = "03hR"; // 인기작
$caapid2 = "03hf"; // 추천상품
$caapid3 = "03ht"; // hot cut
$caapid4 = "03kI"; // 배너1
$caapid5 = "03i8"; // top choice
$caapid6 = "03kW"; // 배너2
// 완결
$caopid1 = "03jA"; // 인기작
$caopid2 = "03iq"; // cut
$caopid3 = "03il"; // choice
// 주간 베스트
$cabpid1 = "03jc"; // 이번달
$cabpid2 = "03jO"; // 금주
$cabpid3 = "03jq"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03sS"; //신작
$nbpageid2 = "03sT"; //신작
$nbpageid3 = "03sU"; //신작
$nbpageid4 = "03sV"; //완결
$nbpageid5 = "03sW"; //완결
$nbpageid6 = "03sX"; //완결
$nbpageid7 = "03sY"; //주간
$nbpageid8 = "03sZ"; //주간
$nbpageid9 = "03sa"; //주간

} else if ( $MD == "sporbiz") {  // 한국스포츠경제
	$sCode = "03NN"; // 트래픽 체크
	$pageid1 = "03NT"; // 딷근한 신작소식
	$pageid2 = "03NO"; //오늘의 인기 웹툰
	$pageid3 = "03NW"; // 무료 웹툰 BEST
	$pageid4 = "03NP"; // 심쿵! 추천웹툰
	$pageid5 = "03NV"; // 직장인 생활정보
	$pageid6 = "03NU"; //베스트웹툰 TOP5
	$pageid7 = "03NQ"; // 탑배너
	$pageid8 = "03NR"; // 센터배너
	$pageid9 = "03NS"; // 푸터배너

	// 신작
$canpid1 = "03l0"; // 최신작
$canpid2 = "03k6"; // 추천신작
$canpid3 = "03iU"; // 인기신작
$canpid4 = "03km"; // 맞춤신작
// 성인
$caapid1 = "03hT"; // 인기작
$caapid2 = "03hh"; // 추천상품
$caapid3 = "03hv"; // hot cut
$caapid4 = "03kK"; // 배너1
$caapid5 = "03iA"; // top choice
$caapid6 = "03kY"; // 배너2
// 완결
$caopid1 = "03jC"; // 인기작
$caopid2 = "03io"; // cut
$caopid3 = "03in"; // choice
// 주간 베스트
$cabpid1 = "03je"; // 이번달
$cabpid2 = "03jQ"; // 금주
$cabpid3 = "03js"; // 투믹스

} else if ( $MD == "issuebox") {  // 이슈박스
	$sCode = "03N3"; // 트래픽 체크
	$pageid1 = "03Me"; // 딷근한 신작소식
	$pageid2 = "03Ml"; //오늘의 인기 웹툰
	$pageid3 = "03Mf"; // 무료 웹툰 BEST
	$pageid4 = "03Mk"; // 심쿵! 추천웹툰
	$pageid5 = "03Mm"; // 직장인 생활정보
	$pageid6 = "03Mj"; //베스트웹툰 TOP5
	$pageid7 = "03Mg"; // 탑배너
	$pageid8 = "03Mh"; // 센터배너
	$pageid9 = "03Mi"; // 푸터배너

	// 신작
$canpid1 = "03kx"; // 최신작
$canpid2 = "03k3"; // 추천신작
$canpid3 = "03iR"; // 인기신작
$canpid4 = "03kj"; // 맞춤신작
// 성인
$caapid1 = "03hQ"; // 인기작
$caapid2 = "03he"; // 추천상품
$caapid3 = "03hs"; // hot cut
$caapid4 = "03kH"; // 배너1
$caapid5 = "03i7"; // top choice
$caapid6 = "03kV"; // 배너2
// 완결
$caopid1 = "03j9"; // 인기작
$caopid2 = "03ir"; // cut
$caopid3 = "03ik"; // choice
// 주간 베스트
$cabpid1 = "03jb"; // 이번달
$cabpid2 = "03jN"; // 금주
$cabpid3 = "03jp"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03sJ"; //신작
$nbpageid2 = "03sK"; //신작
$nbpageid3 = "03sL"; //신작
$nbpageid4 = "03sM"; //완결
$nbpageid5 = "03sN"; //완결
$nbpageid6 = "03sO"; //완결
$nbpageid7 = "03sP"; //주간
$nbpageid8 = "03sQ"; //주간
$nbpageid9 = "03sR"; //주간

} else if ( $MD == "moodeung") {  // 무등일보
	$sCode = "03N8"; // 트래픽 체크
	$pageid1 = "03Lb"; // 딷근한 신작소식
	$pageid2 = "03Li"; //오늘의 인기 웹툰
	$pageid3 = "03Lc"; // 무료 웹툰 BEST
	$pageid4 = "03Lh"; // 심쿵! 추천웹툰
	$pageid5 = "03Lj"; // 직장인 생활정보
	$pageid6 = "03Lg"; //베스트웹툰 TOP5
	$pageid7 = "03Ld"; // 탑배너
	$pageid8 = "03Le"; // 센터배너
	$pageid9 = "03Lf"; // 푸터배너

	// 신작
$canpid1 = "03kp"; // 최신작
$canpid2 = "03jv"; // 추천신작
$canpid3 = "03iJ"; // 인기신작
$canpid4 = "03kb"; // 맞춤신작
// 성인
$caapid1 = "03hI"; // 인기작
$caapid2 = "03hW"; // 추천상품
$caapid3 = "03hk"; // hot cut
$caapid4 = "03k9"; // 배너1
$caapid5 = "03hz"; // top choice
$caapid6 = "03kN"; // 배너2
// 완결
$caopid1 = "03j1"; // 인기작
$caopid2 = "03iz"; // cut
$caopid3 = "03ic"; // choice
// 주간 베스트
$cabpid1 = "03jT"; // 이번달
$cabpid2 = "03jF"; // 금주
$cabpid3 = "03jh"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03r9"; //신작
$nbpageid2 = "03rA"; //신작
$nbpageid3 = "03rB"; //신작
$nbpageid4 = "03rC"; //완결
$nbpageid5 = "03rD"; //완결
$nbpageid6 = "03rE"; //완결
$nbpageid7 = "03rF"; //주간
$nbpageid8 = "03rG"; //주간
$nbpageid9 = "03rH"; //주간

} else if ( $MD == "mediapen") {  // 미디어펜
	$sCode = "03N7"; // 트래픽 체크
	$pageid1 = "03Lk"; // 딷근한 신작소식
	$pageid2 = "03Lr"; //오늘의 인기 웹툰
	$pageid3 = "03Ll"; // 무료 웹툰 BEST
	$pageid4 = "03Lq"; // 심쿵! 추천웹툰
	$pageid5 = "03Ls"; // 직장인 생활정보
	$pageid6 = "03Lp"; //베스트웹툰 TOP5
	$pageid7 = "03Lm"; // 탑배너
	$pageid8 = "03Ln"; // 센터배너
	$pageid9 = "03Lo"; // 푸터배너

	// 신작
$canpid1 = "03kq"; // 최신작
$canpid2 = "03jw"; // 추천신작
$canpid3 = "03iK"; // 인기신작
$canpid4 = "03kc"; // 맞춤신작
// 성인
$caapid1 = "03hJ"; // 인기작
$caapid2 = "03hX"; // 추천상품
$caapid3 = "03hl"; // hot cut
$caapid4 = "03kA"; // 배너1
$caapid5 = "03i0"; // top choice
$caapid6 = "03kO"; // 배너2
// 완결
$caopid1 = "03j2"; // 인기작
$caopid2 = "03iy"; // cut
$caopid3 = "03id"; // choice
// 주간 베스트
$cabpid1 = "03jU"; // 이번달
$cabpid2 = "03jG"; // 금주
$cabpid3 = "03ji"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03rI"; //신작
$nbpageid2 = "03rJ"; //신작
$nbpageid3 = "03rK"; //신작
$nbpageid4 = "03rL"; //완결
$nbpageid5 = "03rM"; //완결
$nbpageid6 = "03rN"; //완결
$nbpageid7 = "03rO"; //주간
$nbpageid8 = "03rP"; //주간
$nbpageid9 = "03rQ"; //주간

} else if ( $MD == "ajunews") {  // 아주경제
	$sCode = "03N6"; // 트래픽 체크
	$pageid1 = "03MK"; // 딷근한 신작소식
	$pageid2 = "03MS"; //오늘의 인기 웹툰
	$pageid3 = "03ML"; // 무료 웹툰 BEST
	$pageid4 = "03MR"; // 심쿵! 추천웹툰
	$pageid5 = "03MT"; // 직장인 생활정보
	$pageid6 = "03MQ"; //베스트웹툰 TOP5
	$pageid7 = "03MM"; // 탑배너
	$pageid8 = "03MN"; // 센터배너
	$pageid9 = "03MO"; // 푸터배너

	// 신작
$canpid1 = "03kv"; // 최신작
$canpid2 = "03k1"; // 추천신작
$canpid3 = "03iP"; // 인기신작
$canpid4 = "03kh"; // 맞춤신작
// 성인
$caapid1 = "03hO"; // 인기작
$caapid2 = "03hc"; // 추천상품
$caapid3 = "03hq"; // hot cut
$caapid4 = "03kF"; // 배너1
$caapid5 = "03i5"; // top choice
$caapid6 = "03kT"; // 배너2
// 완결
$caopid1 = "03j7"; // 인기작
$caopid2 = "03it"; // cut
$caopid3 = "03ii"; // choice
// 주간 베스트
$cabpid1 = "03jZ"; // 이번달
$cabpid2 = "03jL"; // 금주
$cabpid3 = "03jn"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03s1"; //신작
$nbpageid2 = "03s2"; //신작
$nbpageid3 = "03s3"; //신작
$nbpageid4 = "03s4"; //완결
$nbpageid5 = "03s5"; //완결
$nbpageid6 = "03s6"; //완결
$nbpageid7 = "03s7"; //주간
$nbpageid8 = "03s8"; //주간
$nbpageid9 = "03s9"; //주간

} else if ( $MD == "sisunnews") {  // 시선뉴스
	$sCode = "03Pj"; // 트래픽 체크
	$pageid1 = "03Pa"; // 딷근한 신작소식
	$pageid2 = "03PV"; //오늘의 인기 웹툰
	$pageid3 = "03Pd"; // 무료 웹툰 BEST
	$pageid4 = "03PW"; // 심쿵! 추천웹툰
	$pageid5 = "03Pc"; // 직장인 생활정보
	$pageid6 = "03Pb"; //베스트웹툰 TOP5
	$pageid7 = "03PX"; // 탑배너
	$pageid8 = "03PY"; // 센터배너
	$pageid9 = "03PZ"; // 푸터배너

	// 신작
$canpid1 = "03ks"; // 최신작
$canpid2 = "03jy"; // 추천신작
$canpid3 = "03iM"; // 인기신작
$canpid4 = "03ke"; // 맞춤신작
// 성인
$caapid1 = "03hL"; // 인기작
$caapid2 = "03hZ"; // 추천상품
$caapid3 = "03hn"; // hot cut
$caapid4 = "03kC"; // 배너1
$caapid5 = "03i2"; // top choice
$caapid6 = "03kQ"; // 배너2
// 완결
$caopid1 = "03j4"; // 인기작
$caopid2 = "03iw"; // cut
$caopid3 = "03if"; // choice
// 주간 베스트
$cabpid1 = "03jW"; // 이번달
$cabpid2 = "03jI"; // 금주
$cabpid3 = "03jk"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03ra"; //신작
$nbpageid2 = "03rb"; //신작
$nbpageid3 = "03rc"; //신작
$nbpageid4 = "03rd"; //완결
$nbpageid5 = "03re"; //완결
$nbpageid6 = "03rf"; //완결
$nbpageid7 = "03rg"; //주간
$nbpageid8 = "03rh"; //주간
$nbpageid9 = "03ri"; //주간

} else if ( $MD == "heraldpop") {  // 헤럴드팝
	$sCode = "03qm"; // 트래픽 체크
	$pageid1 = "03NT"; // 딷근한 신작소식
	$pageid2 = "03NO"; //오늘의 인기 웹툰
	$pageid3 = "03NW"; // 무료 웹툰 BEST
	$pageid4 = "03NP"; // 심쿵! 추천웹툰
	$pageid5 = "03NV"; // 직장인 생활정보
	$pageid6 = "03NU"; //베스트웹툰 TOP5
	$pageid7 = "03NQ"; // 탑배너
	$pageid8 = "03NR"; // 센터배너
	$pageid9 = "03NS"; // 푸터배너

	// 신작
$canpid1 = "03l0"; // 최신작
$canpid2 = "03k6"; // 추천신작
$canpid3 = "03iU"; // 인기신작
$canpid4 = "03km"; // 맞춤신작
// 성인
$caapid1 = "03hT"; // 인기작
$caapid2 = "03hh"; // 추천상품
$caapid3 = "03hv"; // hot cut
$caapid4 = "03kK"; // 배너1
$caapid5 = "03iA"; // top choice
$caapid6 = "03kY"; // 배너2
// 완결
$caopid1 = "03jC"; // 인기작
$caopid2 = "03io"; // cut
$caopid3 = "03in"; // choice
// 주간 베스트
$cabpid1 = "03je"; // 이번달
$cabpid2 = "03jQ"; // 금주
$cabpid3 = "03js"; // 투믹스

// 2016-12-07  배너 슬롯 추가 업데이트
$nbpageid1 = "03sk"; //신작
$nbpageid2 = "03sl"; //신작
$nbpageid3 = "03sm"; //신작
$nbpageid4 = "03sn"; //완결
$nbpageid5 = "03so"; //완결
$nbpageid6 = "03sp"; //완결
$nbpageid7 = "03sq"; //주간
$nbpageid8 = "03sr"; //주간
$nbpageid9 = "03ss"; //주간

}
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
	<script type='text/javascript' src='http://www.mobipopcon.com/js/jquery.cookie.js'></script>
	<script type='text/javascript' src='http://www.mobipopcon.com/js/shortcut.js'></script>

	<title>웹툰팝콘</title>
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
					<li><div class="logo">웹툰팝콘</div></li>
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
					<li><a href="/devmd.php?MD=<?=$MD?>" class="<?=$ca5?> animsition-link">홈</a></li>
					<li><a href="/devmd.php?MD=<?=$MD?>&ad=ca1" class="<?=$ca1?> animsition-link">신작</a></li>
					<li><a href="/devmd.php?MD=<?=$MD?>&ad=ca2" class="<?=$ca2?> animsition-link adult">성인</a></li>
					<li><a href="/devmd.php?MD=<?=$MD?>&ad=ca3" class="<?=$ca3?> animsition-link">완결</a></li>
					<li><a href="/devmd.php?MD=<?=$MD?>&ad=ca4" class="<?=$ca4?> animsition-link">주간BEST</a></li>
				</ul>
			</div>
		</menu>
	</header>
	<!--/* GNB 끝 -->

	<?php
		if ( $ad == "ca1" ) {
			include "include/dev_ca1.php"; // 신작
		}else if ( $ad == "ca2" ) {
			include "include/dev_ca2.php";  // 성인
		}else if ( $ad == "ca3" ) {
			include "include/dev_ca3.php";  // 완결
		}else if ( $ad == "ca4" ) {
			include "include/dev_ca4.php";  // 주간 best
		}else{
			include "include/dev_mdmain.php";  // 메인
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