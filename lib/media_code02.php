<?php 

include_once "dc_dbpdomysql.php";
include_once "db_mysql.php";

$db_db = new DB_mysql();


// $query="SELECT `cb_post`.*, `cb_post_extra_vars`.`*`
// FROM `cb_post`
// LEFT JOIN `cb_post_extra_vars` ON `cb_post`.`post_id` = `cb_post_extra_vars`.`post_id`
// WHERE `cb_post`.`brd_id` = '1'
// AND `post_del` <> 2
// AND `post_secret` =0
// AND `post_num` < '-1'
// AND `post_md` = :post_md
// ORDER BY `cb_post`.`post_id` desc";
$query="SELECT `cb_post`.*
FROM `cb_post`
WHERE `cb_post`.`brd_id` = '1'
AND `post_del` <> 2
AND `post_md` = :post_md
ORDER BY `cb_post`.`post_id` desc";
$db_db->bindParam(':post_md', 'default', PDO::PARAM_STR);
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
    print_r($media_code);

    


    $query="SELECT `cb_post_extra_vars`.*
    FROM `cb_post_extra_vars`
    WHERE `cb_post_extra_vars`.`post_id` = :post_id";
    $db_db->bindParam(':post_id', $r['post_id'], PDO::PARAM_INT);
    $db_db->pquery($query);
    
    while($row = $db_db->fetchrow()){

        print_r($row);
    }
} 