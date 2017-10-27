<?php
session_destroy();
$location_index = "Location:index.php";
exit(header($location_index));
?>