<?php
session_start();
//include files
include("library/validate_agent.php");
include("conf/config.php");


$agent_id = $_POST["agent_id"];
$agent_pass = $_POST["agent_pass"];

echo $agent_id;
echo $agent_pass;

//Create a object
$db = new DB();
$va = new ValidateAgent();
$arr = $va -> looup_agent($db, $agent_id, $agent_pass);

if(!empty($arr)) {
    foreach($arr as $key => $value) {
        $_SESSION["agent_id"] = $value["agent_id"];
        $_SESSION["agent_name"] = $value["agent_name"];
        $_SESSION["agent_type"] = $value["agent_type"];
        exit(header("Location:index.php?err=1"));
        
    }
}
else {
    exit(header("Location:index.php?err=-1"));
}
?>