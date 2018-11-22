<?php

include("connect.php");

if (isset($_GET['delete'])) {

$patient_id = $_GET ['delete'];

$deletepatient = "DELETE from patient WHERE id='$patient_id' ";

echo "Error" .$sql . "<br>" . $connection->error;

//$sql->mysqli_query($connection,"delete * from patient where patient_id='$patient_id'");
if ($connection->mysqli_query($deletepatient)=== TRUE) {

	echo "<script>alert ('Successfully Deleted')</script>";
	echo "<script>window.open ('patient.php','_self') </script>";
}
else {
	echo "Error" .$sql . "<br>" . $connection->error;
}

}

?>

<!--<script type="text/javascript">

	window.location.href="patient.php";

</script>-->
