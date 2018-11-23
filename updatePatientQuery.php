<?php

include("connect.php");


if (isset($_POST['save'])) {

    $patient_id = mysqli_real_escape_string($connection,$_POST['patient_id']);
    $patient_name = mysqli_real_escape_string($connection,$_POST['patient_name']);
    $disease_name = mysqli_real_escape_string($connection,$_POST['disease_name']);
    $disease_id = mysqli_real_escape_string($connection,$_POST['disease_id']);
    $patient_birthdate = mysqli_real_escape_string($connection,$_POST['patient_birthdate']);
    $patient_gender = mysqli_real_escape_string($connection,$_POST['patient_gender']);


		$sql ="UPDATE patient
		 			SET patient_name='$patient_name',
			 				 disease_name='$disease_name',
							 disease_id='$disease_id',
							 patient_date='$patient_birthdate',
				 		 	 patient_gender='$patient_gender'
					WHERE patient_id = '$patient_id'";

    $result = mysqli_query($connection,$sql);

    if ($result === true)
    {
      echo "<script>alert ('Successfully Updated')</script>";
			echo "<script>window.open ('patient.php','_self') </script>";
    }
    else
    {
      die(mysqli_error($connection));
    }
}

?>
