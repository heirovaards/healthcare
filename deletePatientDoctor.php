<?php

$patient_id = $_GET ['patient_id'];

$patient=mysqli_query($connection,"delete * from patient where patient_id='$patient_id'");

?>

<script type="text/javascript">
	
	window.location.href="patientDoctor.php";

</script>