<?php
include_once "./dc_dbpdomysql.php";
include_once "./db_mysql.php";

include_once "./database_campaign.php";

$db_db = new DB_mysql($db['dsn'],$db['username'],$db['password']) ;
$db_db2 = new DB_mysql($db['dsn'],$db['username'],$db['password']) ;





// $query="SELECT `cb_post`.*, `cb_post_extra_vars`.`*`
// FROM `cb_post`
// LEFT JOIN `cb_post_extra_vars` ON `cb_post`.`post_id` = `cb_post_extra_vars`.`post_id`
// WHERE `cb_post`.`brd_id` = '1'
// AND `post_del` <> 2
// AND `post_secret` =0
// AND `post_num` < '-1'
// AND `post_md` = :post_md
// ORDER BY `cb_post`.`post_id` desc";
$post_content="<?php\n";

$post_content.="$"."cookie_array=array();\n";

$query="SELECT `cb_cookie`.*
FROM `cb_cookie`
";

if($db_db->pquery($query)){

    while($r = $db_db->fetchrow()) {

        $post_content.="$"."cookie_array[]='".$r['id']."';\n";
        

        
    } 


    
    $db_db->disconnect();
    
}
$post_content.="?>\n";


$filename=dirname(__FILE__).'/cookie.php';
            
$fp2= fopen($filename,"w");
fwrite($fp2,$post_content);
fclose($fp2);
