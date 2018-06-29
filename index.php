<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyTeam v0.1</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- As a link -->
    <nav class="navbar navbar-dark indigo">
        <a class="navbar-brand" href="#">   MyTeam <small>v0.1</small></a>
    </nav>
    <br/>
    <!-- Start your project here-->
    <div class="container">
    <!-- Content here -->
    <div class="row justify-content-center">
        <div class="col col-md-5">
        <!-- Form login -->
        <form method="post" action="verify_agent.php">
            <p class="h5 text-center mb-4">LogIn</p>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="defaultForm-id" name="agent_id" class="form-control" required>
                <label for="defaultForm-id">Your User ID</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" id="defaultForm-pass" name="agent_pass" class="form-control" required>
                <label for="defaultForm-pass">Your password</label>
            </div>

            <div class="text-center">
                <button class="btn btn-default">Login</button>
            </div>
        </form>
        <!-- Form login -->
        <br/>
        <?php if(isset($_GET["err"]) && $_GET["err"]==-1) {
            echo '<h5><span class="badge badge-danger">Invalid LogIn ID or Password</span></h5>';
        } else if(isset($_GET["err"]) && $_GET["err"]==1){
            echo '<h5><span class="badge badge-success">Success, Redirecting...</span></h5>';
            if($_SESSION["agent_type"]=="Admin"){
                exit(header("refresh:3;url=admin.php"));
            }
            else if($_SESSION["agent_type"]=="Sales"){
                exit(header("refresh:3;url=sales.php"));
            }
            else if($_SESSION["agent_type"]=="Tech"){
                exit(header("refresh:3;url=tech.php"));
            }
            
        }
        ?>
        </div>
    </div>
    </div>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
