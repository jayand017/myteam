<?php
session_start();
//include files
include("library/insert_sale.php");
include("conf/config.php");

$sale_date = date("d-m-Y");
$cust_name = $_POST["cust_name"];
$cust_email = $_POST["cust_email"];
$cust_phone = $_POST["cust_phone"];
$sale_amount = $_POST["sale_amount"];
$tech_issue = $_POST["tech_issue"];
$soft_plan = $_POST["soft_plan"];
$tech_plan = $_POST["tech_plan"];
$remark = $_POST["remark"];
$agent_id = $_SESSION["agent_id"];


//Create a object
$db = new DB();
$ia = new InsertSale();
$bol = $ia -> insert_sale($db, $sale_date, $cust_name, $cust_email, $cust_phone, $sale_amount, $tech_issue, $soft_plan, $tech_plan, $remark, $agent_id);

if($bol === true) {
    exit(header("Location:sales.php?err=1"));      
}
else {
    exit(header("Location:sales.php?err=-1"));
}

?>