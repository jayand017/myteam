<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["agent_id"]) && $_SESSION["agent_type"] == "Admin") {
    //continue;
} else {
    exit(header("Location:index.php"));
}
include("conf/config.php");
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - MyTeam v0.1</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .table-wrapper-2 {
            display: block;
            max-height: 350px;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>
</head>

<body>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark red">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Hi, <?php echo $_SESSION["agent_name"]; ?></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">Add Agent <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view_sales.php">View Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>


        </ul>
        <!-- Links -->


    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<br/>
<!-- Start your project here-->
<div class="container">
    <!-- Content here -->
    <div class="row justify-content-center">


        <div class="col col-md-5">
            <!-- Form login -->
            <form method="post" action="add_agent.php">
                <p class="h5 text-center mb-4">Add New Agent</p>


                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="defaultForm-id" name="agent_id" class="form-control" required>
                    <label for="defaultForm-id">Enter User ID</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <input type="text" id="defaultForm-name" name="agent_name" class="form-control" required>
                    <label for="defaultForm-name">Enter User Name</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" name="agent_pass" class="form-control" required>
                    <label for="defaultForm-pass">Enter password</label>
                </div>

                <div class="form-inline">

                    <i class="fa fa-check-circle prefix grey-text" style="font-size: 30px; margin-right:20px;"></i>
                    <div class="form-group">
                        <input name="agent_type" value="Sales" type="radio" id="radio11" checked="checked">
                        <label for="radio11">&nbsp;&nbsp;Sales Agent</label>
                    </div>

                    <div class="form-group">
                        <input name="agent_type" value="Tech" type="radio" id="radio21">
                        <label for="radio21">&nbsp;&nbsp;Tech Agent</label>
                    </div>

                </div>

                <br/>
                <div>
                    <button class="btn btn-default">Submit</button>
                </div>
            </form>
            <!-- Form login -->
            <br/>
            <?php if (isset($_GET["err"]) && $_GET["err"] == -1) {
                echo '<h5><span class="badge badge-danger">Sorry, Something went wrong!</span></h5>';
            } else if (isset($_GET["err"]) && $_GET["err"] == 1) {
                echo '<h5><span class="badge badge-success">Agent added successfully</span></h5>';

            }
            ?>
        </div>

        <div class="col col-md-1"></div>

        <div class="col col-md-6">
            <?php
            //Create a object
            $db = new DB();
            $sql_list_agent = "SELECT agent_id, agent_name, agent_type
                               FROM agents
                               WHERE agent_type NOT IN ('Admin')
                             ";

            $array_list_agent = $db->select($sql_list_agent);
            ?>
            <p class="h5 text-center mb-4">View Agents</p>
            <div class="table-wrapper-2">

                <!--Table-->
                <table class="table table-responsive table-sm">
                    <thead class="mdb-color lighten-4">
                    <tr>
                        <th>#</th>
                        <th class="th-lg">Agent ID</th>
                        <th class="th-lg">Name</th>
                        <th class="th-lg">Type</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $serial = 1;
                    foreach ($array_list_agent as $key => $value) {
                        echo '<tr>';
                        echo '<th>' . $serial++ . '</td>';
                        echo '<td>' . $value["agent_id"] . '</td>';
                        echo '<td>' . $value["agent_name"] . '</td>';
                        echo '<td>' . $value["agent_type"] . '</td>';
                        echo '</tr>';
                    }
                    ?>

                    </tbody>
                </table>
                <!--Table-->

            </div>


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
