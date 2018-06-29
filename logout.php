<?php
session_start();
?>
<html>
    <head></head>
    <body><h2>Bye Bye</h2></body>
</html>
<?php
session_destroy();
exit(header("Location:index.php"));
?>