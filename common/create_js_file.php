<?php
ini_set('display_errors', 1);
include_once "./dc_dbpdomysql.php";
include_once "./db_mysql.php";

include_once "./database_campaign.php";

$db_db = new DB_mysql($db['dsn'],$db['username'],$db['password']) ;
$db_db2 = new DB_mysql($db['dsn'],$db['username'],$db['password']) ;


$brd_key = isset($_REQUEST["brd_key"]) ? $_REQUEST["brd_key"] : "shortcut";
$post_md = isset($_REQUEST["post_md"]) ? $_REQUEST["post_md"] : "auction";


// $query="SELECT `cb_post`.*, `cb_post_extra_vars`.`*`
// FROM `cb_post`
// LEFT JOIN `cb_post_extra_vars` ON `cb_post`.`post_id` = `cb_post_extra_vars`.`post_id`
// WHERE `cb_post`.`brd_id` = '1'
// AND `post_del` <> 2
// AND `post_secret` =0
// AND `post_num` < '-1'
// AND `post_md` = :post_md
// ORDER BY `cb_post`.`post_id` desc";

$query="SELECT `cb_board`.*
FROM `cb_board`
WHERE `cb_board`.`brd_key` = '".$brd_key."'";

if($db_db->pquery($query)){
    
    $r = $db_db->fetchrow();

    $brd_id=$r['brd_id'];
} else exit;




$query="SELECT `cb_post`.*
FROM `cb_post`
WHERE `cb_post`.`brd_id` = '".$brd_id."' 
AND `cb_post`.`post_md` = '".$post_md."'";



if($db_db->pquery($query)){
    

    $r = $db_db->fetchrow();


    $post_id=$r['post_id'];
    
    $query="SELECT `cb_post_extra_vars`.*
    FROM `cb_post_extra_vars`
    WHERE `cb_post_extra_vars`.`post_id` = :post_id";
    $db_db2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
    $db_db2->pquery($query);
    $extra_vars='';
    while($row = $db_db2->fetchrow()){

            $extra_vars[$row['pev_key']]=$row['pev_value'];
        }

    $query="SELECT `cb_post_link`.*
        FROM `cb_post_link`
        WHERE `cb_post_link`.`post_id` = :post_id";
        $db_db2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
        $db_db2->pquery($query);
        $i=0;
        $link_link='';
        
        while($row = $db_db2->fetchrow()){
            $link_link[$i]='http://shortcut.dbpopcon.com/postact/shortcut_link/' . $row['pln_id'];
            
            $i++;
        }

    $query="SELECT `cb_post_file`.*
        FROM `cb_post_file`
        WHERE `cb_post_file`.`post_id` = :post_id";
        $db_db2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
        $db_db2->pquery($query);
        $i=0;
        $download_link='';
        while($row = $db_db2->fetchrow()){
            $download_link[$i]='http://shortcut.dbpopcon.com/postact/shortcut_download/' . $row['pfi_id'];
            $i++;
        }

    


    $icon = '&icon='.$download_link[0];

    $content = 'naversearchapp://addshortcut?url='.urlencode($link_link[0]).'&title='.$extra_vars['campaign_title'].'&serviceCode=nstore&version=7';
    $db_db->disconnect();
    $db_db2->disconnect();
}







$post_content='var jsParam = function() { 
    
    var scripts = document.getElementById("hiadone_shortcut"); 
    console.log(scripts);
    var match = scripts.src.match(/\?(.+)$/); 

    var params = match[1].split("&"); 

    var data = []; 
        for (var i = 0; i < params.length; i++) { 
            var param = params[i].split("="); 
            var name = param[0]; 
            var value = param[1]; 
            data[name] = value; 
        } 

    this.get = function(oName) { return data[oName] } ;
}; 

// 쿠키 입력
function set_cookie(name, value, expirehours, domain) {
    var today = new Date();
    today.setTime(today.getTime() + (60*60*1000*expirehours));
    document.cookie = name + "=" + escape( value) + "; path=/; expires=" + today.toGMTString() + ";";
    if (domain) {
        document.cookie += "domain=" + domain + ";";
    }
}

// 쿠키 얻음
function get_cookie(cookie_name) {
    var find_sw = false;
    var start, end;
    var i = 0;

    name = cookie_name

    for (i = 0; i <= document.cookie.length; i++) {
        start = i;
        end = start + name.length;

        if (document.cookie.substring(start, end) == name) {
            find_sw = true
            break
        }
    }

    if (find_sw === true) {
        start = end + 1;
        end = document.cookie.indexOf(";", start);

        if (end < start) {
            end = document.cookie.length;
        }

        return document.cookie.substring(start, end);
    }
    return "";
}

// 쿠키 지움
function delete_cookie(name) {
    var today = new Date();

    today.setTime(today.getTime() - 1);
    var value = get_cookie(name);
    if (value) {
        document.cookie = name + "=" + value + "; path=/; expires=" + today.toGMTString();
    }
}

function documentWrite(content,icon,cookie_id){    
    
    var shortcut_referrer="";
    if(document.referrer) shortcut_referrer = "?shortcutreferrer="+encodeURIComponent(document.referrer);

    var iframeContents  =   $(\'<iframe src="\'+content+icon+\'/\'+cookie_id+shortcut_referrer+\'" id="uriFrame" height="0" width="0"></iframe>\');  
    $("body").append(iframeContents);

   
}

var post_md="";
var brd_key="";
var param = new jsParam(); 
post_md=param.get("post_md"); 
brd_key=param.get("brd_key"); 
//pressid= getQuerystring("pressid");

var shortcut_cookie_name="shortcut_"+brd_key+post_md;


$(document).ready(function(){
    if(get_cookie(shortcut_cookie_name)) var short_val=get_cookie(shortcut_cookie_name);
    else var short_val=0;
    

    
    var d = new Date();
    var cookie_value = brd_key+post_md+d.getHours()+d.getMinutes()+d.getSeconds()+d.getMilliseconds();
    var bannerType="";
    
    
    
    

            var ua = navigator.userAgent.toLowerCase();
            
            if(ua.indexOf("iphone") < 0 && ua.indexOf("ipad") < 0 && ua.indexOf("ipod") < 0 && ua.indexOf("android") < 0){
                console.log("[ os : "+ua+" ]");
                return;
            }

            var campaignStatus    =   "'.$extra_vars["campaign_status"].'";
            if(campaignStatus ==  "disable"){
                console.log("[ campaignStatus : disable ]");
                return;
            }

            var campaignCookieName=  "campaign_"+post_md;
            var cookieValue = "";
            if(get_cookie(campaignCookieName)) cookieValue = (parseInt(get_cookie(campaignCookieName)) +1);
            else cookieValue = 1;

            var cookieExpire = '.$extra_vars["disable_hours"].' * 60 * 60 ;

            // console.log("cookie => "+type_id_name+" :::: "+visitTerm);
            // console.log("(visitTerm  ==  undefined) => "+(visitTerm  ==  undefined));
            if(cookieValue <= '.$extra_vars["visit_cnt"].'){
                set_cookie(campaignCookieName,cookieValue,cookieExpire)
            }else{
                console.log("[ visit_cnt : over ]");
                return;
            }

            var cookieName  =   "visitCnt"+post_md;
            var installCookieName=  "installed"+post_md;
            
            // console.log("cookieName : "+cookieName);
            // console.log("installCookieName : "+installCookieName);
            

            // console.log("(visitCnt%rslt.userVisitCount) : "+(visitCnt%rslt.userVisitCount));
            
            
              
                    
                //styles += "#adbottom img { max-width:100%; max-height:150px; vertical-align: bottom; }";
                //styles += "img { max-width:100%; vertical-align: bottom; }";
                
    $.ajax({
        type:"GET",
        data: "cookie_value="+short_val, 
        url:"/common/iscookie.php",
        dataType : "json",
        success:function(res){  
            
            if(res.iscookie==1){
                console.log("[ iscookie : "+res.iscookie+" ]");
                return;
            }    
        
            set_cookie(shortcut_cookie_name,cookie_value,(60*60*24*30));

            setTimeout( "documentWrite(\''.$content.'\',\''.$icon.'\',\'"+cookie_value+"\');", ('.$extra_vars["execute_time"].'*1000));
        }
    });       
    
});';




$filename=dirname(__FILE__).'/type_'.$brd_key.'.js';
            
$fp2= fopen($filename,"w");
fwrite($fp2,$post_content);
fclose($fp2);


