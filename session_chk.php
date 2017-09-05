<?php
session_start();


if(session_id()){
    
    $result = array('result' => 1,'session_id'=>session_id());

    exit(json_encode($result));

} else {
    $result = array('result' => 0,'session_id'=>'');

    exit(json_encode($result));
}
?>