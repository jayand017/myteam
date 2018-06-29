<?php
session_start();
//include files
include("library/fetch_agent.php");
include("conf/config.php");

$agent_id = $_GET["agent_id"];

//Create a object
$db = new DB();
$fa = new FetchAgent();
$arr = $fa -> fetch_agent($db, $agent_id);

if(!empty($arr)) {
    foreach($arr as $key => $value) {
        $temp_id = $value["agent_id"];
        $temp_name = $value["agent_name"];
        $temp_type = $value["agent_type"];
        $temp_pass = $value["agent_pass"];
        exit(header("Location:admin.php?action=update&temp_id=$temp_id&temp_name=$temp_name&temp_type=$temp_type"));
        
    }
}
else {
    exit(header("Location:admin.php"));
}

?>