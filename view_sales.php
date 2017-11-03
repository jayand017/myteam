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

        table.dataTable thead .sorting:before, table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_desc:after {
            padding: 5px;
        }

        .dataTables_wrapper .mdb-select {

        }

        .dataTables_wrapper .mdb-select.form-control {
            padding-top: 2px;
            margin-top: -0.5rem;
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            width: 70px;
        }

        .dataTables_length label {
            display: flex;
            justify-content: left;
        }

        .dataTables_filter label {
            margin-bottom: 0;
        }

        .dataTables_filter label input.form-control {
            margin-top: -0.6rem;
            padding-bottom: 0;
        }

        table.dataTable {
            margin-bottom: 3rem !important;
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0;
        }

        .w-auto {
            width: auto;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
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
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Add Agent</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="view_sales.php">View Sales <span class="sr-only">(current)</span></a>
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

        <div class="col col-md-12">
            <?php
            //Create a object
            $db = new DB();
            $sql_list_sales = "SELECT sale_date, cust_name, cust_email, cust_phone, sale_amount, tech_issue, card_no, card_exp, card_user, remark, agent_id
                               FROM sales
                             ";

            $array_list_sales = $db->select($sql_list_sales);
            ?>
<<<<<<< HEAD
            <p class="h5 text-center mb-4">View Sales</p>
            
=======
            <p class="h5 text-center mb-4">View Agents</p>

>>>>>>> origin/master

            <!--Table-->
            <table id="sale_list" class="table table-bordered table-responsive table-sm" cellspacing="0" width="100%">
                <thead>
<<<<<<< HEAD
                    <tr>
                        <th>#</th>
                        <th class="w-auto">Date</th>
                        <th class="w-auto">Customer</th>
                        <th class="w-auto">Phone</th>
                        <th class="w-auto">Amount</th>
                        <th class="w-auto">Issue</th>
                        <th class="w-auto">Card Details</th>
                        <th class="w-auto">Remark</th>
                        <th class="w-auto">Agent</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                        $serial = 1;
                        foreach($array_list_sales as $key => $value) {
                            if($value["sale_amount"]==0){ echo '<tr class="table-danger">'; }
                            echo '<th>'.$serial++.'</td>';
                            echo '<td>'.$value["sale_date"].'</td>';
                            echo '<td>'.$value["cust_name"].'</td>';
                            echo '<td>'.$value["cust_phone"].'</td>';
                            echo '<td>'.$value["sale_amount"].'</td>';
                            echo '<td>'.$value["tech_issue"].'</td>';
                            echo '<td>'.$value["card_no"].'<br/>'.$value["card_exp"].'<br/>'.$value["card_user"].'</td>';
                            echo '<td>'.$value["remark"].'</td>';
                            echo '<td>'.$value["agent_id"].'</td>';
                            echo '</tr>';
                        } 
                    ?>
                    
=======
                <tr>
                    <th>#</th>
                    <th class="w-auto">Date</th>
                    <th class="w-auto">Customer</th>
                    <th class="w-auto">Phone</th>
                    <th class="w-auto">Amount</th>
                    <th class="w-auto">Issue</th>
                    <th class="w-auto">Soft Plan</th>
                    <th class="w-auto">Tech Plan</th>
                    <th class="w-auto">Remark</th>
                    <th class="w-auto">Agent</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $serial = 1;
                foreach ($array_list_sales as $key => $value) {
                    if ($value["sale_amount"] == 0) {
                        echo '<tr class="table-danger">';
                    }
                    echo '<th>' . $serial++ . '</td>';
                    echo '<td>' . $value["sale_date"] . '</td>';
                    echo '<td>' . $value["cust_name"] . '</td>';
                    echo '<td>' . $value["cust_phone"] . '</td>';
                    echo '<td>' . $value["sale_amount"] . '</td>';
                    echo '<td>' . $value["tech_issue"] . '</td>';
                    echo '<td>' . $value["soft_plan"] . '</td>';
                    echo '<td>' . $value["tech_plan"] . '</td>';
                    echo '<td>' . $value["remark"] . '</td>';
                    echo '<td>' . $value["agent_id"] . '</td>';
                    echo '</tr>';
                }
                ?>

>>>>>>> origin/master
                </tbody>
            </table>
            <!--Table-->

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

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#sale_list').DataTable();
        $('select').addClass('mdb-select');
        $('.mdb-select').material_select();
    });
</script>
</body>

</html>
