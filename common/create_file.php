<?php
include_once "./dc_dbpdomysql.php";
include_once "./db_mysql.php";

$db_db = new DB_mysql('mysql:host=117.52.171.237;dbname=hiadone_ADM;charset=utf8','user_guest', 'guest///') ;
$db_db2 = new DB_mysql('mysql:host=117.52.171.237;dbname=hiadone_ADM;charset=utf8','user_guest', 'guest///') ;


$brd_key = isset($_REQUEST["brd_key"]) ? $_REQUEST["brd_key"] : "hiadone_webtoon";


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
$query="SELECT `cb_board`.*
FROM `cb_board`
WHERE `cb_board`.`brd_key` = '".$brd_key."'";
if($db_db->pquery($query)){
    

    $r = $db_db->fetchrow();

    $query="SELECT `cb_post`.*
    FROM `cb_post`
    WHERE `cb_post`.`brd_id` = :brd_id
    AND `post_del` <> 2
    ORDER BY `cb_post`.`post_id` desc";


    $db_db->bindParam(':brd_id', $r['brd_id'], PDO::PARAM_INT);
    $db_db->pquery($query);
    $extra_vars="";

    while($r = $db_db->fetchrow()) {

        $post_content.="if($"."MD=='".$r['post_md']."'){\n";
        $post_content.=$r['post_content']."\n";

        

        $post_id=$r['post_id'];
        $post_content.="$"."post_id"."='".$post_id."';\n";
        $query="SELECT `cb_post_extra_vars`.*
        FROM `cb_post_extra_vars`
        WHERE `cb_post_extra_vars`.`post_id` = :post_id";
        $db_db2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
        $db_db2->pquery($query);
        
        while($row = $db_db2->fetchrow()){

            $post_content.="$".$row['pev_key']."='".$row['pev_value']."';\n";
        }


        $query="SELECT `cb_post_link`.*
        FROM `cb_post_link`
        WHERE `cb_post_link`.`post_id` = :post_id";
        $db_db2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
        $db_db2->pquery($query);
        $i=0;
        while($row = $db_db2->fetchrow()){

            $post_content.="$"."post_link[".$i."]['pln_start']=".$row['pln_start'].";\n";
            $post_content.="$"."post_link[".$i."]['pln_end']=".$row['pln_end'].";\n";
            $post_content.="$"."post_link[".$i."]['pln_url']='".$row['pln_url']."';\n";
            $post_content.="$"."post_link[".$i."]['pln_id']='".$row['pln_id']."';\n";
            $i++;
        }

        $post_content.="}\n";
    } 


    
    $db_db->disconnect();
    $db_db2->disconnect();
}
$post_content.="?>\n";


$filename=dirname(__FILE__).'/type_'.$brd_key.'.php';

$fp2= fopen($filename,"w");
fwrite($fp2,$post_content);
fclose($fp2);





