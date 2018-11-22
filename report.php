<?php

    $connection = mysqli_connect("localhost", "root", "", "db_healthcare");

    $filename = "report_record-(".date('d.m.Y').").xls";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");




?>

<h2>Report OF Patient's Record</h2>

<table order="1">
<tr>
        
        <th>Patient ID</th>
        <th>Patient Name</th>
        <th>Disease Name</th>
        <th>Disease Id</th>
        <th>Date</th>
        <th>Patient Gender</th>


                                           

</tr>


 <?php

         
         $sql = $connection-> query("select * from patient");

            while ($data=$sql-> fetch_assoc()) {


?>


 <tr>

      <td><?php echo $data['patient_id'];?></td>
      <td><?php echo $data['patient_name'];?></td>
      <td><?php echo $data['disease_name'];?></td>
      <td><?php echo $data['disease_id'];?></td>
      <td><?php echo $data['patient_date'];?></td>
      <td><?php echo $data['patient_gender'];?></td>
      
     

                                               

</tr>

<?php } ?>
</table>