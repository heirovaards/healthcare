<?php

include("connect.php");

$error='';

$patient_id = $_GET['patient_id'];
$sql = $connection->query("select * from patient where patient_id='$patient_id'");
$call=$sql->fetch_assoc();

 

if (isset($_POST['save'])) {

$patient_id = mysqli_real_escape_string($connection,$_POST['patient_id']);
$patient_name = mysqli_real_escape_string($connection,$_POST['patient_name']);
$disease_name = mysqli_real_escape_string($connection,$_POST['disease_name']);
$disease_id = mysqli_real_escape_string($connection,$_POST['disease_id']);
$patient_birthdate = mysqli_real_escape_string($connection,$_POST['patient_birthdate']);
$patient_gender = mysqli_real_escape_string($connection,$_POST['patient_gender']);


    $sql ="UPDATE `patient` SET (`patient_id`='$patient_id', `patient_name`='$patient_name', `disease_name`='$disease_name', `disease_id`='$disease_id', `patient_birthdate`='$patient_birthdate', `patient_gender`='$patient_gender') ";
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
                                     
                                    <form action="updatepatient.php" method="POST">
                                        <div class="form-group">
                                            <label>Patient ID</label>
                                            <input class="form-control" name="patient_id" value="<?php echo $call['patient_id']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Patient Name</label>
                                            <input class="form-control" name="patient_name" value="<?php echo $call['patient_name']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Disease Name</label>
                                            <select name="disease_name" value="<?php echo $call['disease_name']; ?>">
                                              <option value="Fever">Fever</option>
                                              <option value="Heart Attack">Heart Attack</option>
                                              <option value="Diabetes">Diabetes</option>
                                              <option value="High Blood Pressure">High Blood Pressure</option>
                                              <option value=""></option>
                                              <option value=""></option>
                                            </select>
                                        </div>

                                          <div class="form-group">
                                            <label>Disease Type</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="disease_id" id="disease_id"  />Communicable Disease
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="disease_id" id="disease_id" />Non-Communicable Disease
                                                </label>
                                            </div>
                                            
                                            </div>

                                             <div class="form-group">
                                            <label>Birth Date</label>
                                            <input class="form-control" type="date" name="patient_birthdate" value="<?php echo $call['patient_name']; ?>" />
                                            </div>

                                        <div class="form-group">
                                            <label>Patient Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="patient_gender" id="patient_gender" value="m" checked />Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="patient_gender" id="patient_gender" value="f"/>Female
                                                </label>
                                            </div>  
                                        </div>

                                        <div>

                                            <input type="submit" name="save" value="Save" class="btn btn-primary">

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
