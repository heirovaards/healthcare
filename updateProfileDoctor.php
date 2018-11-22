<?php

include("connect.php");

$error='';

if (isset($_POST['save'])) {

$name = mysqli_real_escape_string($connection,$_POST['name']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$gender = mysqli_real_escape_string($connection,$_POST['gender']);
$birthdate = mysqli_real_escape_string($connection,$_POST['birthdate']);
$contact_no = mysqli_real_escape_string($connection,$_POST['contact_no']);


    $sql ="INSERT INTO `profile`(`name`, `email`, `gender`, `birthdate`, `contact_no`) VALUES ('$name', '$email', '$gender', '$birthdate', '$contact_no')";
    
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
                <a class="navbar-brand" href="profileDoctor.php">Healthcare Administration</a> 
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
                        <a href="profileDoctor.php"><i class="fa fa-laptop fa-3x"></i> Profile</a>
                    </li>

                    <li>
                        <a href="patientDoctor.php"><i class="fa fa-table fa-3x"></i> Patient Record</a>
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
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Update Profile
                        </div>
                        <div class="panel-body">
                            
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                     
                                    <form action="updateProfileDoctor.php" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" />
                                        </div>

                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" />
                                        </div>
 

                                            <div class="form-group">
                                            <label>Birth Date</label>
                                            <input class="form-control" type="date" name="birthdate" />
                                            </div>

                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="Male" checked />Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender" value="Female"/>Female
                                                </label>
                                            </div>  
                                        </div>

                                         <div class="form-group">
                                            <label>Contact No</label>
                                            <input class="form-control" name="contact_no" />
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




<!-- includekan button change and delete dalam php -->


