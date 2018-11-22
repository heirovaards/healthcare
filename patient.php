<?php

include("connect.php");

$error='';

$patient=mysqli_query($connection, 'select * from patient');

$result=mysqli_fetch_array($patient, MYSQLI_ASSOC);

$patient_id=$result['patient_id'];
$patient_name=$result['patient_name'];
$disease_name=$result['disease_name'];
$disease_id=$result['disease_id'];
$patient_date=$result['patient_date'];
$patient_gender=$result['patient_gender'];

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
                    <!-- Patient Tables -->
                    <a href="addpatient.php" class="btn btn-primary" style="margin-bottom: 5px">Add Record</a>

                    <a href="report.php" class="btn btn-default" style="margin-bottom: 5px"><i class="fa fa-print"></i>Export to Excel</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Patient Record
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Patient Id</th>
                                            <th>Patient Name</th>
                                            <th>Disease Name</th>
                                            <th>Disease Id</th>
                                            <th>Patient Date</th>
                                            <th>Patient Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>


                                            <td><?php echo $patient_id ?></td>
                                            <td><?php echo $patient_name ?></td>
                                            <td><?php echo $disease_name ?></td>
                                            <td><?php echo $disease_id ?></td>
                                            <td><?php echo $patient_date ?></td>
                                            <td><?php echo $patient_gender ?></td>

                                            <td>
                                                
                                                <a href="updatepatient.php" class="btn btn-info" style="margin-bottom: 5px">Update</a>
                                                <a onclick="return confirm('Are You Sure To Delete This Record?')" href="deletepatient.php" class="btn btn-danger" name="delete" >Delete</a>

                                            </td>




                                        </tr>

                                     
                                    </tbody>
                                   

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




<!-- includekan button change and delete dalam php -->


