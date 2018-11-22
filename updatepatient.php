<?php

include("connect.php");

$error='';

// old code

// if you dont understand the basic, dont shorten your frickin code, nor copy from someone who shorten the code
// $patient_id = $_GET['patient_id'];
// $sql = $connection->query("select * from patient where patient_id='$patient_id'");
// $call=$sql->fetch_assoc();

// new code

// $_GET is variable that you set on the html tag (rever on the delete button is patient.php)
$patient_id = $_GET['edit'];
// separate your SQL
$query = "select * from patient where patient_id='$patient_id'";
// run the SQL
$data = mysqli_query($connection, $query);
// pass the data 1 by one to html
$call = mysqli_fetch_assoc($data);


// if (isset($_POST['save']))
//  {
//
//     // $patient_id = mysqli_real_escape_string($connection,$_POST['patient_id']);
//     $patient_name = mysqli_real_escape_string($connection,$_POST['patient_name']);
//     $disease_name = mysqli_real_escape_string($connection,$_POST['disease_name']);
//     $disease_id = mysqli_real_escape_string($connection,$_POST['disease_id']);
//     $patient_birthdate = mysqli_real_escape_string($connection,$_POST['patient_birthdate']);
//     $patient_gender = mysqli_real_escape_string($connection,$_POST['patient_gender']);
//
//     // $sql ="UPDATE `patient` SET (`patient_id`='$patient_id', `patient_name`='$patient_name', `disease_name`='$disease_name', `disease_id`='$disease_id', `patient_birthdate`='$patient_birthdate', `patient_gender`='$patient_gender') ";
//
//
//     $sql ="UPDATE `patient` SET ( `patient_name`='$patient_name', `disease_name`='$disease_name', `disease_id`='$disease_id', `patient_birthdate`='$patient_birthdate', `patient_gender`='$patient_gender') WHERE patient_name = '$patient_id'";
//     $result = mysqli_query($connection,$sql);
// }





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
            <div style="color: white; padding: 15px 50px 5px 50px;float: right; font-size: 16px;"> Last access : 30 May 2014 &nbsp;
                <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
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
                                      <form action="updatePatientQuery.php" method="Post">
                                          <div class="form-group">
                                              <label>Patient ID</label>
                                              <input class="form-control" value="<?php echo $call['patient_id']; ?>" disabled/>
                                              <input type="hidden" name="patient_id" value="<?php echo $call['patient_id']; ?>" />
                                          </div>
                                           <div class="form-group">
                                              <label>Patient Name</label>
                                              <input class="form-control" name="patient_name" value="<?php echo $call['patient_name']; ?>" />
                                          </div>
                                           <div class="form-group">
                                              <label>Disease Name</label>
                                              <select name="disease_name">
                                                <option value="Fever"<?php if ($call['disease_name'] == 'Fever') echo ' selected="selected"'; ?>>Fever</option>
                                                <option value="Fever"<?php if ($call['disease_name'] == 'Heart Attack') echo ' selected="selected"'; ?>>Heart Attack</option>
                                                <option value="Fever"<?php if ($call['disease_name'] == 'Diabetes') echo ' selected="selected"'; ?>>Diabetes</option>
                                                <option value="Fever"<?php if ($call['disease_name'] == 'High Blood Pressure') echo ' selected="selected"'; ?>>High Blood Pressure</option>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>Disease Type</label>
                                                <div class="radio">
                                                    <label>
                                                          <input name="disease_id" type="radio" id="signi" value="Communicable Disease" <?php echo ($call['disease_id']== 'Communicable Disease') ?  "checked" : "" ;  ?>/> Communicable Disease
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                          <input name="disease_id" type="radio" id="signi" value="Non-Communicable Disease" <?php echo ($call['disease_id']== 'Non-Communicable Disease') ?  "checked" : "" ;  ?>/> Non-Communicable Disease
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Birth Date</label>
                                                <input class="form-control" type="date" name="patient_birthdate" value="<?php echo $call['patient_date']; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Patient Gender</label>
                                                <div class="radio">
                                                    <label>
                                                        <input name="patient_gender" type="radio" id="signi" value="Male" <?php echo ($call['patient_gender']== 'Male') ?  "checked" : "" ;  ?>/> Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input name="patient_gender" type="radio" id="signi" value="Female" <?php echo ($call['patient_gender']== 'Female') ?  "checked" : "" ;  ?>/> Female
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
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




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
