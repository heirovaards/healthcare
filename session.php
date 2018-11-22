<?php
include('connect.php');
session_start();
$error='';
$error1='';
$output='';

$user_checking = $_SESSION['login_user'];

$admin_sql= mysqli_query($connection,"select * from admin where admin_id = '$user_checking'");
$doctor_sql= mysqli_query($connection,"select * from doctor where doctor_id='$user_checking'");

$row=mysqli_fetch_array($admin_sql,MYSQLI_ASSOC);
$row1=mysqli_fetch_array($doctor_sql,MYSQLI_ASSOC);

$login_session = $row['user_id'];
$login_id = $row['user_id'];


if (!isset($_SESSION['login_user'])) {
	header("location: index.php");
}

?>