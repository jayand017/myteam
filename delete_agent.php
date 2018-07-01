<?php
session_start();
//include files
include("library/delete_agent.php");
include("conf/config.php");

$agent_id = $_GET["agent_id"];

//Create a object
$db = new DB();
$da = new DeleteAgent();
$bol = $da -> delete_agent($db, $agent_id);

if($bol === true) {
    exit(header("Location:admin.php"));
}
else {
    exit(header("Location:admin.php"));
}

?>