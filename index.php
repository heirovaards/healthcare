<?php

include("connect.php");
session_start();
$error='';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$myuser_id = mysqli_real_escape_string($connection,$_POST['user_id']); //variable for name=user_id in login
$mypassword = mysqli_real_escape_string($connection,$_POST['password']);


$sql = "SELECT admin_id FROM admin WHERE admin_id = '$myuser_id' and password = '$mypassword' and roles='1'";
$sql2 = "SELECT doctor_id FROM doctor WHERE doctor_id = $myuser_id and password = '$mypassword' and roles='2' ";

$result = mysqli_query($connection,$sql);
$result2 = mysqli_query($connection,$sql2);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$row1 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$active = $row['admin_id'];
$active1= $row1['doctor_id'];

$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result2);

//when result match

if($count == 1) {
$_SESSION['login_user'] = $myuser_id;

header("location: dashboard.php");

}
else if ($count1==1){
$_SESSION['login_user'] = $myuser_id;

header("location: patientDoctor.php");

}
else{
  $error= "Your ID or Password is invalid";
}

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
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Healthcare Administration System: Login</h2>
               
                
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="index.php" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="user_id" id="user_id" class="form-control" placeholder="Enter your ID" />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" id="password" class="form-control"  placeholder="Enter Your Password" />
                                        </div>
                                    
                                     
                                     <input type="submit" name="login">Login Now</input>
                                    <hr />
                                    
                                    </form>
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
