<?php

include("connect.php");

$error='';

//calculate total patient
    $sql = mysqli_query($connection, "SELECT * FROM patient");
    $total = mysqli_num_rows($sql);
    
    //calculate total communicable disease
    $sqlCD = mysqli_query($connection,"SELECT * FROM patient WHERE disease_id = 'Communicable Disease'");
    $totalCD = mysqli_num_rows($sqlCD);

    //calculate total non communicable disease
    $sqlNCD = mysqli_query($connection,"SELECT * FROM patient WHERE disease_id = 'Non-Communicable Disease'");
    $totalNCD = mysqli_num_rows($sqlNCD);
    

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
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                    <div class="col-md-12">
                     
                </div>
                 <!-- /. ROW  -->
                 <hr />
                               <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-laptop fa-0"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Patient</p>
                    <p class="text-muted">Total Patient</p>
                    <p><b><?php echo $total; ?></b></p>
                </div>
             </div>


             <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-laptop fa-0"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Communicable Disease</p>
                    <p class="text-muted">Total</p>
                    <p><b><?php echo $totalCD; ?></b></p>
                </div>
             </div>

             <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-laptop fa-0"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Non-Communicable Disease</p>
                    <p class="text-muted">Total</p>
                    <p><b><?php echo $totalNCD; ?></b></p>
                </div>
             </div>

             </div>

             

    <?php
//dapatkan hari ini
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $today = date('Y-m-d');
        
        $currentYear =  date('Y', strtotime($today));
    
                // all patient
                $countAll1 = mysqli_query($connection, "SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '1' AND YEAR(patient_date) = '$currentYear'");
                $rowAll1 = mysqli_fetch_array($countAll1);
                
                $countAll2 = mysqli_query($connection, "SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '2' AND YEAR(patient_date) = '$currentYear'");
                $rowAll2 = mysqli_fetch_array($countAll2);
                
                $countAll3 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '3' AND YEAR(patient_date) = '$currentYear'");
                $rowAll3 = mysqli_fetch_array($countAll3);
                
                $countAll4 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '4' AND YEAR(patient_date) = '$currentYear'");
                $rowAll4 = mysqli_fetch_array($countAll4);
                
                $countAll5 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '5' AND YEAR(patient_date) = '$currentYear'");
                $rowAll5 = mysqli_fetch_array($countAll5);
                
                $countAll6 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '6' AND YEAR(patient_date) = '$currentYear'");
                $rowAll6 = mysqli_fetch_array($countAll6);
                
                $countAll7 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '7' AND YEAR(patient_date) = '$currentYear'");
                $rowAll7 = mysqli_fetch_array($countAll7);
                
                $countAll8 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '8' AND YEAR(patient_date) = '$currentYear'");
                $rowAll8 = mysqli_fetch_array($countAll8);
                
                $countAll9 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '9' AND YEAR(patient_date) = '$currentYear'");
                $rowAll9 = mysqli_fetch_array($countAll9);
                
                $countAll10 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '10' AND YEAR(patient_date) = '$currentYear'");
                $rowAll10 = mysqli_fetch_array($countAll10);
                
                $countAll11 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '11' AND YEAR(patient_date) = '$currentYear'");
                $rowAll11 = mysqli_fetch_array($countAll11);
                
                $countAll12 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '12' AND YEAR(patient_date) = '$currentYear'");
                $rowAll12 = mysqli_fetch_array($countAll12);
                
                // communicable disease 
                $count1 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '1' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row1 = mysqli_fetch_array($count1);
                
                $count2 = mysqli_query($connection,"SELECT count(*) as total FROM cases WHERE MONTH(patient_date) = '2' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row2 = mysqli_fetch_array($count2);
                
                $count3 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '3' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row3 = mysqli_fetch_array($count3);
                
                $count4 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '4' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row4 = mysqli_fetch_array($count4);
                
                $count5 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '5' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row5 = mysqli_fetch_array($count5);
                
                $count6 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '6' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row6 = mysqli_fetch_array($count6);
                
                $count7 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '7' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row7 = mysqli_fetch_array($count7);
                
                $count8 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '8' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row8 = mysqli_fetch_array($count8);
                
                $count9 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '9' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row9 = mysqli_fetch_array($count9);
                
                $count10 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '10' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row10 = mysqli_fetch_array($count10);
                
                $count11 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '11' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row11 = mysqli_fetch_array($count11);
                
                $count12 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '12' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Communicable Disease'");
                $row12 = mysqli_fetch_array($count12);

                // communicable disease 
                $count1 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '1' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row1 = mysqli_fetch_array($count1);
                
                $count2 = mysqli_query($connection,"SELECT count(*) as total FROM cases WHERE MONTH(patient_date) = '2' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row2 = mysqli_fetch_array($count2);
                
                $count3 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '3' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row3 = mysqli_fetch_array($count3);
                
                $count4 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '4' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row4 = mysqli_fetch_array($count4);
                
                $count5 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '5' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row5 = mysqli_fetch_array($count5);
                
                $count6 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '6' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row6 = mysqli_fetch_array($count6);
                
                $count7 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '7' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row7 = mysqli_fetch_array($count7);
                
                $count8 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '8' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row8 = mysqli_fetch_array($count8);
                
                $count9 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '9' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row9 = mysqli_fetch_array($count9);
                
                $count10 = mysqli_query($connection,"SELECT count(*) as total FROM patient WHERE MONTH(patient_date) = '10' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row10 = mysqli_fetch_array($count10);
                
                $count11 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '11' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row11 = mysqli_fetch_array($count11);
                
                $count12 = mysqli_query($connection,"SELECT count(*) as total  FROM patient WHERE MONTH(patient_date) = '12' AND YEAR(patient_date) = '$currentYear' AND disease_id = 'Non-Communicable Disease'");
                $row12 = mysqli_fetch_array($count12);
    ?>
    
        <!--<div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Patient Bar Chart
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>            
        </div>-->

    
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
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
  


    <!-- script all bar chart -->
                    <script>
                        var ctx = document.getElementById("allBarChart");
                        var allBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sep', 'Okt', 'Nov', 'Dis'],
                                datasets: [{
                                        label: 'Total patient for year <?php echo $currentYear; ?>',
                                        data: [<?php echo $rowAll1[total] . "," .
                                                            $rowAll2[total] . "," .
                                                            $rowAll3[total] . "," .
                                                            $rowAll4[total] . "," .
                                                            $rowAll5[total] . "," .
                                                            $rowAll6[total] . "," .
                                                            $rowAll7[total] . "," .
                                                            $rowAll8[total] . "," .
                                                            $rowAll9[total] . "," .
                                                            $rowAll10[total] . "," .
                                                            $rowAll11[total] . "," .
                                                            $rowAll12[total]; ?>],
                                        backgroundColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>


    <!-- script all bar chart -->
                    <script>
                        var ctx = document.getElementById("allBarChart");
                        var allBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sep', 'Okt', 'Nov', 'Dis'],
                                datasets: [{
                                        label: 'Total patient for year <?php echo $currentYear; ?>',
                                        data: [<?php echo $rowAll1[total] . "," .
                                                            $rowAll2[total] . "," .
                                                            $rowAll3[total] . "," .
                                                            $rowAll4[total] . "," .
                                                            $rowAll5[total] . "," .
                                                            $rowAll6[total] . "," .
                                                            $rowAll7[total] . "," .
                                                            $rowAll8[total] . "," .
                                                            $rowAll9[total] . "," .
                                                            $rowAll10[total] . "," .
                                                            $rowAll11[total] . "," .
                                                            $rowAll12[total]; ?>],
                                        backgroundColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>


    <!-- script all bar chart -->
                    <script>
                        var ctx = document.getElementById("allBarChart");
                        var allBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sep', 'Okt', 'Nov', 'Dis'],
                                datasets: [{
                                        label: 'Total patient for year <?php echo $currentYear; ?>',
                                        data: [<?php echo $rowAll1[total] . "," .
                                                            $rowAll2[total] . "," .
                                                            $rowAll3[total] . "," .
                                                            $rowAll4[total] . "," .
                                                            $rowAll5[total] . "," .
                                                            $rowAll6[total] . "," .
                                                            $rowAll7[total] . "," .
                                                            $rowAll8[total] . "," .
                                                            $rowAll9[total] . "," .
                                                            $rowAll10[total] . "," .
                                                            $rowAll11[total] . "," .
                                                            $rowAll12[total]; ?>],
                                        backgroundColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
                    
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>



