<?php

include("connect.php");

$error='';

$doctor_id = $_GET['doctor_id'];
$sql = $connection->query("select * from doctor where patient_id='$doctor_id'");
$call=$sql->fetch_assoc();

 

if (isset($_POST['save'])) {

$doctor_id=$result['doctor_id'];
$doctor_name=$result['doctor_name'];
$password=$result['password'];



    $sql ="UPDATE `doctor` SET (`doctor_id`='$doctor_id', `doctor_name`='$doctor_name', `password`='$password', `roles`='2') ";
    $result = mysqli_query($connection,$sql);
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Healthcare Administration System</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Healthcare Administration</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
            
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="profile.php"><i class="fa fa-laptop fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fa fa-table fa-3x"></i> User </a>
                    </li>
                    <li>
                        <a href="patient.php"><i class="fa fa-table fa-3x"></i> Patient Record</a>
                    </li>
                    
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                </div>


                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Update Patient Record
                        </div>
                        <div class="panel-body">
                            
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                     
                                    <form action="updateuser.php" method="POST">
                                        <div class="form-group">
                                            <label>Doctor ID</label>
                                            <input class="form-control" name="doctor_id" value="<?php echo $call['doctor_id']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input class="form-control" name="doctor_name" value="<?php echo $call['doctor_name']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password_name" value="<?php echo $call['password_name']; ?>"/>
                                        </div>   

                                        <div>

                                            <input type="submit" name="save" value="Save" class="btn btn-primary"/>

                                        </div>


                                        </form>

                        </div>
                            
                                    
                                   

</div>

</div>
</div>


             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
