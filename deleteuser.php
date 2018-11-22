<?php

$doctor_id = $_GET ['doctor_id'];

$connection->query("delete from doctor where doctor_id='$doctor_id'");

?>

<script type="text/javascript">
	
	window.location.href="user.php";

</script>