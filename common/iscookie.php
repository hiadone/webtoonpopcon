<?php 

include_once "./cookie.php";
$cookie_value = isset($_REQUEST["cookie_value"]) ? $_REQUEST["cookie_value"] : "";

$result=array();
$result['iscookie']=0;
foreach($cookie_array as $key => $value){
    
    if($value===$cookie_value && !empty($cookie_value)) {
        $result['iscookie']=1;
        $cookie_array='';
        exit(json_encode($result));
        return;
    }
    
}
$cookie_array='';
exit(json_encode($result));
?>