<?php 


$MD = isset($_GET["MD"])?$_GET["MD"] : 'adpop';
$ad = isset($_GET["ad"])?$_GET["ad"] : '';


$popstate='';
$locationUrl="";
$link_id="";
$post_id="";
$referer = empty($_SERVER['HTTP_REFERER']) ? '' : trim($_SERVER['HTTP_REFERER']);
    if ( $MD == "adpop") {  // 애드팝

		$popstate='enable';
$locationUrl="http://newspopcon.com/pop.asp?type=adpop";

    $sCode = "04AZ"; // 트래픽 체크
$pageid1 = "04AM"; // 홈_상단_배너1_5슬롯_670X312
$pageid2 = "04AN"; // 홈_상단 배너2_4슬롯_302X200
$pageid3 = "04A8"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid4 = "048o"; // 홈_배너_1_360X150
$pageid5 = "04AS"; // 홈_완결웹툰_6슬롯_328X200
$pageid6 = "048p"; // 홈_배너_2_360X150
$pageid7 = "04AR"; // 홈_성인웹툰_6슬롯_328X200
$pageid8 = "04AT"; // 홈_주간 베스트_4슬롯_302X200
$pageid9 = "04A2"; // 홈_하단배너_3_670X400

// 요일별
$pageid10 = "04A8"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid11 = "04AB"; // 요일별_화요일_웹툰_9슬롯_214X200
$pageid12 = "04A7"; // 요일별_수요일_웹툰_9슬롯_214X200
$pageid13 = "04A6"; // 요일별_목요일_웹툰_9슬롯_214X200
$pageid14 = "04A5"; // 요일별_금요일_웹툰_9슬롯_214X200
$pageid15 = "04AA"; // 요일별_토요일_웹툰_9슬롯_214X200
$pageid16 = "04A9"; // 요일별_일요일_웹툰_9슬롯_214X200
$pageid17 = "04A0"; // 요일별_하단배너_670X400




// 성인
$pageid18 = "049v"; // 성인_투믹스 독점작_6슬롯_328X200
$pageid19 = "049O"; // PD 강력추천작_302X200
$pageid20 = "048Q"; // 성인_배너_1_360X15
$pageid21 = "049P"; // 정주행 추천작_9슬롯_214X200
$pageid22 = "048c"; // 성인_배너_2_360X150
$pageid23 = "049p"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
$pageid24 = "049x"; // 성인_하단배너_670X400

// 장르별
$pageid25 = "04AF"; // 장르별_로맨스_웹툰_9슬롯_214X200
$pageid26 = "04AJ"; // 장르별_액션_웹툰_9슬롯_214X200
$pageid27 = "0482"; // 장르별_배너_1_360X150
$pageid28 = "04AH"; // 장르별_스포츠_웹툰_9슬롯_214X200
$pageid29 = "04AD"; // 장르별_드라마_웹툰_9슬롯_214X200
$pageid30 = "048E"; // 장르별_배너_2_360X150
$pageid31 = "04AG"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
$pageid32 = "04AK"; // 장르별_코믹_웹툰_9슬롯_214X200
$pageid33 = "04A1"; // 장르별_하단배너_670X400

// 주간 베스트
$pageid34 = "049N"; // 완결_완결웹툰_30슬롯_328X200
$pageid35 = "047h"; // 완결_배너_360X150
$pageid36 = "049C"; // 완결_완결웹툰_30슬롯2_328X200
$pageid37 = "049z"; // 완결_하단배너_670X400



}

if ( $MD == "bridgeany") {  // 브릿지경제

		$popstate='enable';
$locationUrl="http://newspopcon.com/pop.asp?type=bridgeany";

    $sCode = "05es"; // 트래픽 체크
$pageid1 = "04KO"; // 홈_상단_배너1_5슬롯_670X312
$pageid2 = "04Ke"; // 홈_상단 배너2_4슬롯_302X200
$pageid3 = "04LS"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid4 = "03xE"; // 홈_배너_1_360X150
$pageid5 = "04L2"; // 홈_완결웹툰_6슬롯_328X200
$pageid6 = "03xP"; // 홈_배너_2_360X150
$pageid7 = "04Kr"; // 홈_성인웹툰_6슬롯_328X200
$pageid8 = "04LA"; // 홈_주간 베스트_4슬롯_302X200
$pageid9 = "04Mo"; // 홈_하단배너_3_670X400

// 요일별
$pageid10 = "04LS"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid11 = "04Lb"; // 요일별_화요일_웹툰_9슬롯_214X200
$pageid12 = "04Lm"; // 요일별_수요일_웹툰_9슬롯_214X200
$pageid13 = "04Lp"; // 요일별_목요일_웹툰_9슬롯_214X200
$pageid14 = "04M2"; // 요일별_금요일_웹툰_9슬롯_214X200
$pageid15 = "04M3"; // 요일별_토요일_웹툰_9슬롯_214X200
$pageid16 = "04MG"; // 요일별_일요일_웹툰_9슬롯_214X200
$pageid17 = "04MN"; // 요일별_하단배너_670X400



// 성인
$pageid18 = "04Nq"; // 성인_투믹스 독점작_6슬롯_328X200
$pageid19 = "04O9"; // PD 강력추천작_302X200
$pageid20 = "048Z"; // 성인_배너_1_360X15
$pageid21 = "04OA"; // 정주행 추천작_9슬롯_214X200
$pageid22 = "048l"; // 성인_배너_2_360X150
$pageid23 = "04OK"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
$pageid24 = "04OP"; // 성인_하단배너_670X400

// 장르별
$pageid25 = "04Mr"; // 장르별_로맨스_웹툰_9슬롯_214X200
$pageid26 = "04N5"; // 장르별_액션_웹툰_9슬롯_214X200
$pageid27 = "048B"; // 장르별_배너_1_360X150
$pageid28 = "04NA"; // 장르별_스포츠_웹툰_9슬롯_214X200
$pageid29 = "04NI"; // 장르별_드라마_웹툰_9슬롯_214X200
$pageid30 = "048N"; // 장르별_배너_2_360X150
$pageid31 = "04NK"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
$pageid32 = "04NW"; // 장르별_코믹_웹툰_9슬롯_214X200
$pageid33 = "04TA"; // 장르별_하단배너_670X400

// 주간 베스트
$pageid34 = "04MZ"; // 완결_완결웹툰_30슬롯_328X200
$pageid35 = "047q"; // 완결_배너_360X150
$pageid36 = "04Mh"; // 완결_완결웹툰_30슬롯2_328X200
$pageid37 = "04Mk"; // 완결_하단배너_670X400



}


if ( $MD == "moneyWe") {  // 머니위크

		$popstate='enable';
$locationUrl="http://newspopcon.com/any.asp?type=moneyWe";

    $sCode = "05er"; // 트래픽 체크
$pageid1 = "04hw"; // 홈_상단_배너1_5슬롯_670X312
$pageid2 = "04i2"; // 홈_상단 배너2_4슬롯_302X200
$pageid3 = "04ii"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid4 = "03xE"; // 홈_배너_1_360X150
$pageid5 = "04iG"; // 홈_완결웹툰_6슬롯_328X200
$pageid6 = "03xP"; // 홈_배너_2_360X150
$pageid7 = "04i9"; // 홈_성인웹툰_6슬롯_328X200
$pageid8 = "04iO"; // 홈_주간 베스트_4슬롯_302X200
$pageid9 = "04iV"; // 홈_하단배너_3_670X400

// 요일별
$pageid10 = "04ii"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid11 = "04it"; // 요일별_화요일_웹툰_9슬롯_214X200
$pageid12 = "04j6"; // 요일별_수요일_웹툰_9슬롯_214X200
$pageid13 = "04jH"; // 요일별_목요일_웹툰_9슬롯_214X200
$pageid14 = "04jQ"; // 요일별_금요일_웹툰_9슬롯_214X200
$pageid15 = "04jX"; // 요일별_토요일_웹툰_9슬롯_214X200
$pageid16 = "04je"; // 요일별_일요일_웹툰_9슬롯_214X200
$pageid17 = "04jk"; // 요일별_하단배너_670X400



// 성인
$pageid18 = "04pN"; // 성인_투믹스 독점작_6슬롯_328X200
$pageid19 = "04kd"; // PD 강력추천작_302X200
$pageid20 = "048Z"; // 성인_배너_1_360X15
$pageid21 = "04pl"; // 정주행 추천작_9슬롯_214X200
$pageid22 = "048l"; // 성인_배너_2_360X150
$pageid23 = "04ps"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
$pageid24 = "04qC"; // 성인_하단배너_670X400

// 장르별
$pageid25 = "04ky"; // 장르별_로맨스_웹툰_9슬롯_214X200
$pageid26 = "04l8"; // 장르별_액션_웹툰_9슬롯_214X200
$pageid27 = "048B"; // 장르별_배너_1_360X150
$pageid28 = "04lR"; // 장르별_스포츠_웹툰_9슬롯_214X200
$pageid29 = "04lh"; // 장르별_드라마_웹툰_9슬롯_214X200
$pageid30 = "048N"; // 장르별_배너_2_360X150
$pageid31 = "04mJ"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
$pageid32 = "04oj"; // 장르별_코믹_웹툰_9슬롯_214X200
$pageid33 = "04oz"; // 장르별_하단배너_670X400

// 주간 베스트
$pageid34 = "04jy"; // 완결_완결웹툰_30슬롯_328X200
$pageid35 = "047q"; // 완결_배너_360X150
$pageid36 = "04kG"; // 완결_완결웹툰_30슬롯2_328X200
$pageid37 = "04kN"; // 완결_하단배너_670X400



}

if ( $MD == "non") {  // 애니툰 논타겟

		$popstate='enable';
$locationUrl="http://newspopcon.com/eco.asp?type=non";

    $sCode = "05cf"; // 트래픽 체크
$pageid1 = "04kV"; // 홈_상단_배너1_5슬롯_670X312
$pageid2 = "04k7"; // 홈_상단 배너2_5슬롯_302X200
$pageid3 = "04lg"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid4 = "03xE"; // 홈_배너_1_360X150
$pageid5 = "04kt"; // 홈_완결웹툰_6슬롯_328X200
$pageid6 = "03xP"; // 홈_배너_2_360X150
$pageid7 = "04kk"; // 홈_성인웹툰_6슬롯_328X200
$pageid8 = "04lD"; // 홈_주간 베스트_4슬롯_302X200
$pageid9 = "04lQ"; // 홈_하단배너_3_670X400

// 요일별
$pageid10 = "04lg"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid11 = "04lu"; // 요일별_화요일_웹툰_9슬롯_214X200
$pageid12 = "04m2"; // 요일별_수요일_웹툰_9슬롯_214X200
$pageid13 = "04mA"; // 요일별_목요일_웹툰_9슬롯_214X200
$pageid14 = "04mM"; // 요일별_금요일_웹툰_9슬롯_214X200
$pageid15 = "04mX"; // 요일별_토요일_웹툰_9슬롯_214X200
$pageid16 = "04me"; // 요일별_일요일_웹툰_9슬롯_214X200
$pageid17 = "04mm"; // 요일별_하단배너_670X400

// 성인
$pageid18 = "04oC"; // 성인_투믹스 독점작_6슬롯_328X200
$pageid19 = "04oK"; // PD 강력추천작_302X200
$pageid20 = "048Z"; // 성인_배너_1_360X15
$pageid21 = "04oS"; // 정주행 추천작_9슬롯_214X200
$pageid22 = "048l"; // 성인_배너_2_360X150
$pageid23 = "04oa"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
$pageid24 = "04oq"; // 성인_하단배너_670X400

// 장르별
$pageid25 = "04nI"; // 장르별_로맨스_웹툰_9슬롯_214X200
$pageid26 = "04nQ"; // 장르별_액션_웹툰_9슬롯_214X200
$pageid27 = "048B"; // 장르별_배너_1_360X150
$pageid28 = "04nY"; // 장르별_스포츠_웹툰_9슬롯_214X200
$pageid29 = "04ng"; // 장르별_드라마_웹툰_9슬롯_214X200
$pageid30 = "048N"; // 장르별_배너_2_360X150
$pageid31 = "04no"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
$pageid32 = "04nw"; // 장르별_코믹_웹툰_9슬롯_214X200
$pageid33 = "04o4"; // 장르별_하단배너_670X400

// 주간 베스트
$pageid34 = "04mu"; // 완결_완결웹툰_30슬롯_328X200
$pageid35 = "047q"; // 완결_배너_360X150
$pageid36 = "04n2"; // 완결_완결웹툰_30슬롯2_328X200
$pageid37 = "04nA"; // 완결_하단배너_670X400



}

if ( $MD == "re") {  // 애니툰 리타겟

		$popstate='enable';
$locationUrl="http://newspopcon.com/eco.asp?type=re";

   $sCode = "05cg"; // 트래픽 체크
$pageid1 = "04hx"; // 홈_상단_배너1_5슬롯_670X312
$pageid2 = "04iK"; // 홈_상단 배너2_5슬롯_302X200
$pageid3 = "04in"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid4 = "03xE"; // 홈_배너_1_360X150
$pageid5 = "04iJ"; // 홈_완결웹툰_6슬롯_328X200
$pageid6 = "03xP"; // 홈_배너_2_360X150
$pageid7 = "04iA"; // 홈_성인웹툰_6슬롯_328X200
$pageid8 = "04iR"; // 홈_주간 베스트_4슬롯_302X200
$pageid9 = "04ia"; // 홈_하단배너_3_670X400

// 요일별
$pageid10 = "04in"; // 요일별_월요일_웹툰_9슬롯_214X200
$pageid11 = "04iw"; // 요일별_화요일_웹툰_9슬롯_214X200
$pageid12 = "04jA"; // 요일별_수요일_웹툰_9슬롯_214X200
$pageid13 = "04jM"; // 요일별_목요일_웹툰_9슬롯_214X200
$pageid14 = "04jT"; // 요일별_금요일_웹툰_9슬롯_214X200
$pageid15 = "04ja"; // 요일별_토요일_웹툰_9슬롯_214X200
$pageid16 = "04jg"; // 요일별_일요일_웹툰_9슬롯_214X200
$pageid17 = "04jn"; // 요일별_하단배너_670X400



// 성인
$pageid18 = "04pT"; // 성인_투믹스 독점작_6슬롯_328X200
$pageid19 = "04kh"; // PD 강력추천작_302X200
$pageid20 = "048Z"; // 성인_배너_1_360X15
$pageid21 = "04po"; // 정주행 추천작_9슬롯_214X200
$pageid22 = "048l"; // 성인_배너_2_360X150
$pageid23 = "04pp"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
$pageid24 = "04qJ"; // 성인_하단배너_670X400

// 장르별
$pageid25 = "04l3"; // 장르별_로맨스_웹툰_9슬롯_214X200
$pageid26 = "04lG"; // 장르별_액션_웹툰_9슬롯_214X200
$pageid27 = "048B"; // 장르별_배너_1_360X150
$pageid28 = "04lW"; // 장르별_스포츠_웹툰_9슬롯_214X200
$pageid29 = "04lo"; // 장르별_드라마_웹툰_9슬롯_214X200
$pageid30 = "048N"; // 장르별_배너_2_360X150
$pageid31 = "04mQ"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
$pageid32 = "04om"; // 장르별_코믹_웹툰_9슬롯_214X200
$pageid33 = "04p6"; // 장르별_하단배너_670X400

// 주간 베스트
$pageid34 = "04k3"; // 완결_완결웹툰_30슬롯_328X200
$pageid35 = "047q"; // 완결_배너_360X150
$pageid36 = "04kJ"; // 완결_완결웹툰_30슬롯2_328X200
$pageid37 = "04kQ"; // 완결_하단배너_670X400



}


    if ( $MD == "econovill") {  // 이코노믹리뷰
    $sCode = "04EF"; // 트래픽 체크
    $pageid1 = "04EB"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04Df"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04Dm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "04E1"; // 홈_배너_1_360X150
    $pageid5 = "04ED"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "04E2"; // 홈_배너_2_360X150
    $pageid7 = "04EC"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04Dg"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04E7"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04Dm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04Dp"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04Dl"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04Dk"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04Dj"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04Do"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04Dn"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04E5"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04Dm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04Dp"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04Dl"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04Dk"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04Dj"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04Do"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04Dn"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04E8"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04De"; // PD 강력추천작_302X200
    $pageid20 = "04Dw"; // 성인_배너_1_360X15
    $pageid21 = "04Dh"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "04Dx"; // 성인_배너_2_360X150
    $pageid23 = "04Di"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04E3"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04Dr"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04Du"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "04E0"; // 장르별_배너_1_360X150
    $pageid28 = "04Dt"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04Dq"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "04E0"; // 장르별_배너_2_360X150
    $pageid31 = "04Ds"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04Dv"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04E6"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04E9"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "04Dy"; // 완결_배너_360X150
    $pageid36 = "04EA"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04E4"; // 완결_하단배너_670X400



}

if ( $MD == "sstv") {  // sstv
    $sCode = "04Vj"; // 트래픽 체크
    $pageid1 = "04Mq"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04NH"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04On"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "04Tf"; // 홈_배너_1_360X150
    $pageid5 = "04Nr"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "04Tr"; // 홈_배너_2_360X150
    $pageid7 = "04Na"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04OD"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04OY"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04On"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04P6"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04PS"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04Po"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04Q0"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04QC"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04QW"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04SO"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04On"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04P6"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04PS"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04Po"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04Q0"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04QC"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04QW"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04QO"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04R1"; // PD 강력추천작_302X200
    $pageid20 = "04Ud"; // 성인_배너_1_360X15
    $pageid21 = "04Ri"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "04Up"; // 성인_배너_2_360X150
    $pageid23 = "04SM"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04So"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04Ql"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04R2"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "04UF"; // 장르별_배너_1_360X150
    $pageid28 = "04RL"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04RY"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "04UR"; // 장르별_배너_2_360X150
    $pageid31 = "04Rv"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04S7"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04T5"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04TH"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "04U3"; // 완결_배너_360X150
    $pageid36 = "04TJ"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04Sh"; // 완결_하단배너_670X400



}

if ( $MD == "thefact") {  // 더팩트(더에이_애니툰)
    $sCode = "04cN"; // 트래픽 체크
    $pageid1 = "04kZ"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04kB"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04ln"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "04l0"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "04ko"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04lI"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04lY"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04ln"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04ly"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04m6"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04mE"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04mR"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04mU"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04mi"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04mq"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04ln"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04ly"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04m6"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04mE"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04mR"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04mU"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04mi"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04oG"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04oO"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "04oW"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "04oi"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04ou"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04nM"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04nU"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "04nc"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04nk"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "04ns"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04o0"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04o7"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04my"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "04n6"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04nE"; // 완결_하단배너_670X400

    // back script
    $script = "";



}





if ( $MD == "jemin2") {  // 제민일보
    $sCode = "05ex"; // 트래픽 체크
    $pageid1 = "04hv"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04i3"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04ih"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "04iF"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "04i8"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04iN"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04iU"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04ih"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04ir"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04j4"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04jG"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04jP"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04jW"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04jd"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04jj"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04ih"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04ir"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04j4"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04jG"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04jP"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04jW"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04jd"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04pM"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04kc"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "04pi"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "04pt"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04qA"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04kw"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04l6"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "04lO"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04lf"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "04mH"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04oh"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04oy"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04jw"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "04kF"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04kM"; // 완결_하단배너_670X400

    // back script
    $script = "back";
    $locationUrl="http://newspopcon.com/any.asp?type=";

}

 else if ( $MD == "newstown") {  // 뉴스타운(HNS)
    $sCode = "05ew"; // 트래픽 체크
    $pageid1 = "04cR"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04cV"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04wT"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "04cd"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "04cZ"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04ch"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04cl"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04wT"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04wW"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04wX"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04wa"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04wb"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04we"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04wf"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04w8"; // 요일별_하단배너_670X400

        //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04wT"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04wW"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04wX"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04wa"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04wb"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04we"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04wf"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04vx"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04vu"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "04w5"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "04w0"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04w7"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04wo"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04wp"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "04wq"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04wr"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "04ws"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04wn"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04wA"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04wP"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "04wR"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04w9"; // 완결_하단배너_670X400

    // back script
    $script = "back";
    $locationUrl="http://newspopcon.com/pop.asp?type=";

}


if ( $MD == "hiadone") {  // 애니툰 언론사 일부 영역
    $sCode = "05uP"; // 트래픽 체크
    $pageid1 = "04Mz"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04NP"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04Ov"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "04Nz"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "04Nj"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04OJ"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04Od"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04Ov"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04PF"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04Pa"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04Pt"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04Q4"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04QI"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04Qe"; // 요일별_일요일_웹툰_9슬롯_214X200
	$pageid17 = "04SZ"; // 요일별_하단배너_670X400

        //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04Ov"; // 요일별_월요일_웹툰_9슬롯_214X200adpop
    $weekPageId[2] = "04PF"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04Pa"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04Pt"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04Q4"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04QI"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04Qe"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04QM"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04Qy"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "04Rg"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "04SL"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04Sk"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04Qq"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04RB"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "04RQ"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04Rf"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "04S0"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04SC"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04TA"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04TQ"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "04TX"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04Sq"; // 완결_하단배너_670X400

}



include_once "../common/type_anytoon.php";



if($popstate==='enable'){
$popstate='disable';    
    if($view_type==='time'){
        if(!empty($post_link))
        foreach($post_link as $value){

            if($value['pln_start'] <= date('H') && $value['pln_end'] >= date('H') ){

                $popstate='enable';
                $locationUrl= $value['pln_url'];
                $link_id=$value['pln_id'];
                break;
            }            
        }
        
    } else {

        if(!empty($post_link)) {
        $popstate='enable';
            $rand = mt_rand(0,count($post_link)-1);
            $locationUrl= $post_link[$rand]['pln_url'];
            $link_id= $post_link[$rand]['pln_id'];
        }
    }
}

/*
$db_db = new DB_mysql('mysql:host=hiadone-m.cwvs02kjjoti.ap-northeast-2.rds.amazonaws.com;dbname=hiadone_ADM;charset=utf8', 'user_guest', 'guest///');

$query="SELECT `cb_board`.*
FROM `cb_board`
WHERE `cb_board`.`brd_key` = 'anytoon'
";
$db_db->pquery($query);
$r = $db_db->fetchrow();

$query="SELECT `cb_post`.*
FROM `cb_post`
WHERE `cb_post`.`brd_id` = :brd_id
AND `post_del` <> 2
AND `post_md` = :post_md
ORDER BY `cb_post`.`post_id` desc";


$db_db->bindParam(':brd_id', $r['brd_id'], PDO::PARAM_INT);
$db_db->bindParam(':post_md', $MD, PDO::PARAM_STR);
$db_db->pquery($query);

if ($r = $db_db->fetchrow()) {


    $content_arr=explode("$",$r['post_content']);

    $media_code=array();
    foreach($content_arr as $value1){

        
        if(!empty($value1)){

        //echo content($value1)."<br>";
        $value2=explode("=",strip_tags($value1));
        
        //echo htmlspecialchars($value2[1],ENT_NOQUOTES)."<br>";
        $value3= explode(";",$value2[1]);

        $value3[0]= str_replace("\"","",$value3[0]);
        $value3[0]= str_replace("\'","",$value3[0]);

        
        $media_code[trim($value2[0])]= trim($value3[0]);
        //preg_match_all($pattern, $value3[0], $match);
        //$value3[0] = implode('', $match[0]);
        

      
        }
    }
    //print_r($media_code);
    $post_id=$r['post_id'];
    $extra_vars="";

    $query="SELECT `cb_post_extra_vars`.*
    FROM `cb_post_extra_vars`
    WHERE `cb_post_extra_vars`.`post_id` = :post_id";
    $db_db->bindParam(':post_id', $r['post_id'], PDO::PARAM_INT);
    $db_db->pquery($query);
    
    while($row = $db_db->fetchrow()){


        $extra_vars[$row['pev_key']] = $row['pev_value'];
    }


    $query="SELECT `cb_post_link`.*
    FROM `cb_post_link`
    WHERE `cb_post_link`.`post_id` = :post_id";
    $db_db->bindParam(':post_id', $r['post_id'], PDO::PARAM_INT);
    $db_db->pquery($query);
    
    while($row = $db_db->fetchrow()){


        $post_link[] = $row;
    }
} 
    

if(!empty($extra_vars)){
    $popstate='disable';
    if($extra_vars['popstate']==='enable'){

        if($extra_vars['view_type']==='time'){
            if(!empty($post_link))
            foreach($post_link as $value){

                if($value['pln_start'] <= date('H') && $value['pln_end'] >= date('H') ){

                    $popstate='enable';
                    $media_code['popstate_url']= $value['pln_url'];
					$link_id=$value['pln_id'];
                    break;
                }            
            }
            
        } else {
            if(!empty($post_link)) {
				        $popstate='enable';
                $rand = mt_rand(0,count($post_link)-1);
                $media_code['popstate_url']= $post_link[$rand]['pln_url'];
                $link_id= $post_link[$rand]['pln_id'];
            }
        }
    
    }
    //미디어 코드 재구성
        if(isset($media_code['sCode']))$sCode = $media_code['sCode'] ;// 트래픽 체크
        if(isset($media_code['pageid1']))$pageid1 = $media_code['pageid1'];   // 홈_상단_배너1_5슬롯_670X312
        

        if(isset($media_code['pageid2']))$pageid2 = $media_code['pageid2']; // 홈_상단 배너2_4슬롯_302X200
        if(isset($media_code['pageid3']))$pageid3 = $media_code['pageid3']; // 요일별_월요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid4']))$pageid4 = $media_code['pageid4']; // 홈_배너_1_360X150
        if(isset($media_code['pageid5']))$pageid5 = $media_code['pageid5']; // 홈_완결웹툰_6슬롯_328X200
        if(isset($media_code['pageid6']))$pageid6 = $media_code['pageid6']; // 홈_배너_2_360X150
        if(isset($media_code['pageid7']))$pageid7 = $media_code['pageid7']; // 홈_성인웹툰_6슬롯_328X200
        if(isset($media_code['pageid8']))$pageid8 = $media_code['pageid8']; // 홈_주간 베스트_4슬롯_302X200
        if(isset($media_code['pageid9']))$pageid9 = $media_code['pageid9']; // 홈_하단배너_3_670X400

        // 요일별
        if(isset($media_code['pageid10']))$pageid10 = $media_code['pageid10']; // 요일별_월요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid11']))$pageid11 = $media_code['pageid11']; // 요일별_화요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid12']))$pageid12 = $media_code['pageid12']; // 요일별_수요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid13']))$pageid13 = $media_code['pageid13']; // 요일별_목요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid14']))$pageid14 = $media_code['pageid14']; // 요일별_금요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid15']))$pageid15 = $media_code['pageid15']; // 요일별_토요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid16']))$pageid16 = $media_code['pageid16']; // 요일별_일요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid17']))$pageid17 = $media_code['pageid17']; // 요일별_하단배너_670X400


        // 성인
        if(isset($media_code['pageid18']))$pageid18 = $media_code['pageid18']; // 성인_투믹스 독점작_6슬롯_328X200
        if(isset($media_code['pageid19']))$pageid19 = $media_code['pageid19']; // PD 강력추천작_302X200
        if(isset($media_code['pageid20']))$pageid20 = $media_code['pageid20']; // 성인_배너_1_360X15
        if(isset($media_code['pageid21']))$pageid21 = $media_code['pageid21']; // 정주행 추천작_9슬롯_214X200
        if(isset($media_code['pageid22']))$pageid22 = $media_code['pageid22']; // 성인_배너_2_360X150
        if(isset($media_code['pageid23']))$pageid23 = $media_code['pageid23']; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
        if(isset($media_code['pageid24']))$pageid24 = $media_code['pageid24']; // 성인_하단배너_670X400

        // 장르별
        if(isset($media_code['pageid25']))$pageid25 = $media_code['pageid25']; // 장르별_로맨스_웹툰_9슬롯_214X200
        if(isset($media_code['pageid26']))$pageid26 = $media_code['pageid26']; // 장르별_액션_웹툰_9슬롯_214X200
        if(isset($media_code['pageid27']))$pageid27 = $media_code['pageid27']; // 장르별_배너_1_360X150
        if(isset($media_code['pageid28']))$pageid28 = $media_code['pageid28']; // 장르별_스포츠_웹툰_9슬롯_214X200
        if(isset($media_code['pageid29']))$pageid29 = $media_code['pageid29']; // 장르별_드라마_웹툰_9슬롯_214X200
        if(isset($media_code['pageid30']))$pageid30 = $media_code['pageid30']; // 장르별_배너_2_360X150
        if(isset($media_code['pageid31']))$pageid31 = $media_code['pageid31']; // 장르별_무협/판타지_웹툰_9슬롯_214X200
        if(isset($media_code['pageid32']))$pageid32 = $media_code['pageid32']; // 장르별_코믹_웹툰_9슬롯_214X200
        if(isset($media_code['pageid33']))$pageid33 = $media_code['pageid33']; // 장르별_하단배너_670X400

        // 주간 베스트
        if(isset($media_code['pageid34']))$pageid34 = $media_code['pageid34']; // 완결_완결웹툰_30슬롯_328X200
        if(isset($media_code['pageid35']))$pageid35 = $media_code['pageid35']; // 완결_배너_360X150
        if(isset($media_code['pageid36']))$pageid36 = $media_code['pageid36']; // 완결_완결웹툰_30슬롯2_328X200
        if(isset($media_code['pageid37']))$pageid37 = $media_code['pageid37']; // 완결_하단배너_670X400


        

        //해당 요일에 대한 키값을 배열 변수에 저장
        $weekPageId="";
        if(isset($media_code['pageid10'])) $weekPageId[1] = $media_code['pageid10'];// 요일별_월요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid11'])) $weekPageId[2] =$media_code['pageid11'];// 요일별_화요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid12'])) $weekPageId[3] =$media_code['pageid12'];// 요일별_수요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid13'])) $weekPageId[4] =$media_code['pageid13'];// 요일별_목요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid14'])) $weekPageId[5] =$media_code['pageid14'];// 요일별_금요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid15'])) $weekPageId[6] =$media_code['pageid15'];// 요일별_토요일_웹툰_9슬롯_214X200
        if(isset($media_code['pageid16'])) $weekPageId[0] =$media_code['pageid16'];// 요일별_일요일_웹툰_9슬롯_214X200


    if(isset($media_code['popstate_url'])) $locationUrl= $media_code['popstate_url'] ;
   
}

$db_db->disconnect();
*/
//해당 요일에 대한 키값을 배열 변수에 저장
$weekPageId[1] = $pageid10; // 요일별_월요일_웹툰_9슬롯_214X200
$weekPageId[2] = $pageid11; // 요일별_화요일_웹툰_9슬롯_214X200
$weekPageId[3] = $pageid12; // 요일별_수요일_웹툰_9슬롯_214X200
$weekPageId[4] = $pageid13; // 요일별_목요일_웹툰_9슬롯_214X200
$weekPageId[5] = $pageid14; // 요일별_금요일_웹툰_9슬롯_214X200
$weekPageId[6] = $pageid15; // 요일별_토요일_웹툰_9슬롯_214X200
$weekPageId[0] = $pageid16; // 요일별_일요일_웹툰_9슬롯_214X200