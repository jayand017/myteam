<?php
session_start();
//include files
include("library/insert_agent.php");
include("library/update_agent.php");
include("conf/config.php");

$action = $_GET["action"];
$agent_id = $_POST["agent_id"];
$agent_name = $_POST["agent_name"];
$agent_pass = $_POST["agent_pass"];
$agent_type = $_POST["agent_type"];
$bol = false;

//Create a object
$db = new DB();
if($action == "insert") {
    $ia = new InsertAgent();
    $bol = $ia -> insert_agent($db, $agent_id, $agent_name, md5($agent_pass), $agent_type);
}
else if($action == "update") {
    $ua = new UpdateAgent();
    if($agent_pass == "" ) {
        $bol = $ua -> update_agent_without_passwd($db, $agent_id, $agent_name, $agent_type);
    }
    else {
        $bol = $ua -> update_agent_with_passwd($db, $agent_id, $agent_name, md5($agent_pass), $agent_type);
    } 
}


if($bol === true) {
    exit(header("Location:admin.php?action=insert&err=1"));      
}
else {
    exit(header("Location:admin.php?err=-1"));
}

?>