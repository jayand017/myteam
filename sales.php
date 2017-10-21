<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["agent_id"])  && $_SESSION["agent_type"]=="Sales"){
    //continue;
}
else{
    exit(header("Location:index.php"));
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sales - MyTeam v0.1</title>
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

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark green">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Hi, <?php echo $_SESSION["agent_name"];?></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">New Sale <span class="sr-only">(current)</span></a>
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
        
        <div class="col col-md-12"><p class="h5 text-center mb-4">Add New Sales</p></div>

    </div>


    <form method="post" action="add_sale.php">
    <div class="row justify-content-center">
       
        <div class="col col-md-5">
            <!-- Form login -->

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="defaultForm-name" name="cust_name" class="form-control" required>
                <label for="defaultForm-name">Enter Customer Name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="defaultForm-email" name="cust_email" class="form-control" required>
                <label for="defaultForm-email">Enter Customer Email</label>
            </div>

            <div class="md-form">
                <i class="fa fa-phone prefix grey-text"></i>
                <input type="number" id="defaultForm-phone" name="cust_phone" class="form-control" required>
                <label for="defaultForm-phone">Enter Customer Phone No.</label>
            </div>

            <div class="md-form">
                <i class="fa fa-dollar prefix grey-text"></i>
                <input type="number" id="defaultForm-pass" name="sale_amount" class="form-control" required>
                <label for="defaultForm-pass">Enter Sale Amount</label>
            </div>
        </div>

        <div class="col col-md-5">

            <div class="md-form">
                <i class="fa fa-info-circle prefix grey-text"></i>
                <input type="text" id="defaultForm-issue" name="tech_issue" class="form-control">
                <label for="defaultForm-issue">Enter Tech Issue</label>
            </div>

            <div class="md-form">
                <i class="fa fa-star prefix grey-text"></i>
                <select class="form-control" name="soft_plan" id="defaultForm-softplan" style="color:#757575; font-weight:300; width:190px; margin-left:50px; display:inline-block;">
                    <option value="">Software Plans</option>
                    <option value="1 year">1 year</option>
                    <option value="2 year">2 year</option>
                    <option value="3 year">3 year</option>
                    <option value="4 year">4 year</option>
                    <option value="5 year">5 year</option>
                    <option value="Above 5 year">Above 5 year</option>
                </select>
                
                <select class="form-control" name="tech_plan" style="width:200px; color:#757575; font-weight:300; display:inline-block;">
                    <option value="">Tech Plans</option>
                    <option value="1 year">1 year</option>
                    <option value="2 year">2 year</option>
                    <option value="3 year">3 year</option>
                    <option value="4 year">4 year</option>
                    <option value="5 year">5 year</option>
                    <option value="Above 5 year">Above 5 year</option>
                </select>
            </div>

            <div class="md-form">
                <i class="fa fa-pencil-square-o prefix grey-text"></i>
                <textarea rows="5" cols="50" class="form-control" style="text-indent:4px; height:100px;" name="remark" id="defaultForm-remark"></textarea>
                <label for="defaultForm-remark" style="text-indent:4px;">Enter Remark</label>
            </div>

        </div>

        </div>
        <br/>
        <div>
            <button class="btn btn-default">Submit</button>
        </div>

        <!-- Form login -->
        <br/>
        <?php if(isset($_GET["err"]) && $_GET["err"]==-1) {
            echo '<h5><span class="badge badge-danger">Sorry, Something went wrong!</span></h5>';
        } else if(isset($_GET["err"]) && $_GET["err"]==1){
            echo '<h5><span class="badge badge-success">Sales added successfully</span></h5>';
            
        }
        ?>
    </form>   

        
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
