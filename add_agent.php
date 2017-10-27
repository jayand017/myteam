<?php
session_start();
//include files
include("library/insert_agent.php");
include("conf/config.php");

$agent_id = $_POST["agent_id"];
$agent_name = $_POST["agent_name"];
$agent_pass = $_POST["agent_pass"];
$agent_type = $_POST["agent_type"];

//Create a object
$db = new DB();
$ia = new InsertAgent();
$bol = $ia->insert_agent($db, $agent_id, $agent_name, md5($agent_pass), $agent_type);

if ($bol === true) {
    exit(header("Location:admin.php?err=1"));
} else {
    exit(header("Location:admin.php?err=-1"));
}

?>