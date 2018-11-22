<?php

include("connect.php");

// $_GET is variable that you set on the html tag (rever on the delete button is patient.php)
if (isset($_GET['delete']))
{

	$patient_id = $_GET ['delete'];

	// watch your table, dont just copy paste the code

	// old code

	// $query = "DELETE FROM patient WHERE id='$patient_id' ";

	// new code

	$query = "DELETE FROM patient WHERE patient_id ='$patient_id' ";
	// run the SQL upon the query, dont just copy paste the code
	$deletepatient = mysqli_query($connection, $query) or die(mysqli_error($connection));

	/////* again dont just copy paste the code, understand your own code, you use native PHP so pointer function will return an error */////

	//$sql->mysqli_query($connection,"delete * from patient where patient_id='$patient_id'");
	//
	// if ($connection->mysqli_query($deletepatient)=== TRUE)
	// {
	// 	echo "<script>alert ('Successfully Deleted')</script>";
	// 	echo "<script>window.open ('patient.php','_self') </script>";
	// }
	// else
	// {
	// 	echo "Error" .$sql . "<br>" . $connection->error;
	// }

	// mysqli query return 1 or 0 as true or false
	// === means assign 1 as encoded text which translated as true
	if ($deletepatient === true)
	{
		echo "<script>alert ('Successfully Deleted')</script>";
		echo "<script>window.open ('patient.php','_self') </script>";
	}
	else
	{
		die(mysqli_error($connection));
	}
}

?>
