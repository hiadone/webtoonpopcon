<?php


$MD = isset($_GET["MD"])?$_GET["MD"] : 'bridgenews';
$ad = isset($_GET["ad"])?$_GET["ad"] : '';


$popstate='';
$locationUrl="";
$link_id="";
$post_id="";
$referer = empty($_SERVER['HTTP_REFERER']) ? '' : trim($_SERVER['HTTP_REFERER']);
if ( $MD == "bridgenews") {  // 브릿지경제
    $sCode = "05es"; // 트래픽 체크
    $pageid1 = "03wE"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "03wQ"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "03xj"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "03wb"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "03wm"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "03wx"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "03xU"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "03xj"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "03xu"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "03y5"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "03yG"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "03yR"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "03yd"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "03yo"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "03z0"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "03xj"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "03xu"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "03y5"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "03yG"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "03yR"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "03yd"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "03yo"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "042d"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "042o"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "042z"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "043A"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "043L"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "040i"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "040t"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "0414"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "041F"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "041Q"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "041b"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "041m"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "03zD"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "049F"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "03zO"; // 완결_하단배너_670X400


    // back script
    $popstate='enable';



}


if ( $MD == "toptoon") {  // 탑툰
    $sCode = "05WL"; // 트래픽 체크
    $pageid1 = "04Mt"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "04NJ"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "04Oq"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "04Nu"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "04Nb"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "04OE"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "04OZ"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "04Oq"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "04P7"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "04PU"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "04Pp"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "04Q1"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "04QD"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "04QY"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "04SQ"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "04Oq"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "04P7"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "04PU"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "04Pp"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "04Q1"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "04QD"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "04QY"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "04QX"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "04RC"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "04Rr"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "04SU"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "04Sy"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "04Qm"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "04R3"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "04RM"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "04RZ"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "04Rw"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "04S8"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "04T6"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "04Vi"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "04TI"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "04Sj"; // 완결_하단배너_670X400

	// back script
	$popstate='enable';



    }


   else if( $MD == "edaily") {  // 이데일리(HNS)
    $sCode = "05Tm"; // 트래픽 체크
    $pageid1 = "03wH"; // 홈_상단_배너1_5슬롯_670X312
    $pageid2 = "03wT"; // 홈_상단 배너2_4슬롯_302X200
    $pageid3 = "03xm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid4 = "03xE"; // 홈_배너_1_360X150
    $pageid5 = "03we"; // 홈_완결웹툰_6슬롯_328X200
    $pageid6 = "03xP"; // 홈_배너_2_360X150
    $pageid7 = "03wp"; // 홈_성인웹툰_6슬롯_328X200
    $pageid8 = "03x0"; // 홈_주간 베스트_4슬롯_302X200
    $pageid9 = "03xX"; // 홈_하단배너_3_670X400

    // 요일별
    $pageid10 = "03xm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $pageid11 = "03xx"; // 요일별_화요일_웹툰_9슬롯_214X200
    $pageid12 = "03y8"; // 요일별_수요일_웹툰_9슬롯_214X200
    $pageid13 = "03yJ"; // 요일별_목요일_웹툰_9슬롯_214X200
    $pageid14 = "03yU"; // 요일별_금요일_웹툰_9슬롯_214X200
    $pageid15 = "03yg"; // 요일별_토요일_웹툰_9슬롯_214X200
    $pageid16 = "03yr"; // 요일별_일요일_웹툰_9슬롯_214X200
    $pageid17 = "03z3"; // 요일별_하단배너_670X400

    //해당 요일에 대한 키값을 배열 변수에 저장
    $weekPageId[1] = "03xm"; // 요일별_월요일_웹툰_9슬롯_214X200
    $weekPageId[2] = "03xx"; // 요일별_화요일_웹툰_9슬롯_214X200
    $weekPageId[3] = "03y8"; // 요일별_수요일_웹툰_9슬롯_214X200
    $weekPageId[4] = "03yJ"; // 요일별_목요일_웹툰_9슬롯_214X200
    $weekPageId[5] = "03yU"; // 요일별_금요일_웹툰_9슬롯_214X200
    $weekPageId[6] = "03yg"; // 요일별_토요일_웹툰_9슬롯_214X200
    $weekPageId[0] = "03yr"; // 요일별_일요일_웹툰_9슬롯_214X200

    // 성인
    $pageid18 = "042g"; // 성인_투믹스 독점작_6슬롯_328X200
    $pageid19 = "042r"; // PD 강력추천작_302X200
    $pageid20 = "048Z"; // 성인_배너_1_360X15
    $pageid21 = "0432"; // 정주행 추천작_9슬롯_214X200
    $pageid22 = "048l"; // 성인_배너_2_360X150
    $pageid23 = "043D"; // 성인_당신의 판타지를 이뤄줄 그녀들_214X200
    $pageid24 = "043O"; // 성인_하단배너_670X400

    // 장르별
    $pageid25 = "040l"; // 장르별_로맨스_웹툰_9슬롯_214X200
    $pageid26 = "040w"; // 장르별_액션_웹툰_9슬롯_214X200
    $pageid27 = "048B"; // 장르별_배너_1_360X150
    $pageid28 = "0417"; // 장르별_스포츠_웹툰_9슬롯_214X200
    $pageid29 = "041I"; // 장르별_드라마_웹툰_9슬롯_214X200
    $pageid30 = "048N"; // 장르별_배너_2_360X150
    $pageid31 = "041T"; // 장르별_무협/판타지_웹툰_9슬롯_214X200
    $pageid32 = "041e"; // 장르별_코믹_웹툰_9슬롯_214X200
    $pageid33 = "041p"; // 장르별_하단배너_670X400

    // 주간 베스트
    $pageid34 = "03zG"; // 완결_완결웹툰_30슬롯_328X200
    $pageid35 = "047q"; // 완결_배너_360X150
    $pageid36 = "049I"; // 완결_완결웹툰_30슬롯2_328X200
    $pageid37 = "03zR"; // 완결_하단배너_670X400

	// back script
     



} 



include_once "../common/type_toptoon.php";



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
$db_db = new DB_mysql('mysql:host=hiadone-m.cwvs02kjjoti.ap-northeast-2.rds.amazonaws.com;dbname=hiadone_ADM;charset=utf8','user_guest', 'guest///');
$query="SELECT `cb_board`.*
FROM `cb_board`
WHERE `cb_board`.`brd_key` = 'toptoon'
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

                    $popstate='enable';;
                    $media_code['popstate_url']= $value['pln_url'];
					$link_id=$value['pln_id'];
                    break;
                }            
            }
            
        } else {
            if(!empty($post_link)) {
				        $popstate='enable';;
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