<?php


include("header.php");

include("db.php");



$sql = "SELECT * FROM attendance";

$records = mysqli_query($con,$sql);

?>

<html>

<head>

<title> STUDENT DASHBOARD</title>

</head>


<body>

<div class="panel panel-body">
    
	  <a href="index.php">
          <h4 class="pull-right"><u>LOGOUT</u> <span class="glyphicon glyphicon-log-out pull-right"></span></h4>
         </a>
   <h3 align="center" style="color:#006666"><b><u>STUDENT ATTENDANCE DETAILS</u></b></h3>
 
   <br>
   <br>
   <br>
   <br>
   
   <div class="panel panel-body">
	 
	 
	 
	     <table class="table table-striped">
		 
		 <tr>
		 
		    <th><u>STUDENT ID</u></th>
			
			<th><u>STUDENT NAME</u></th>
		
			<th><u>SUBJECT</u></th>
			
			<th><u>PRESENT</u></th>
			
			<th><u>ABSENT</u></th>
			
			<th><u>TOTAL</u></th>
			
			<th><u>ON-LEAVE/MEDICAL</u></th>
			
			<th><u>FINAL PERCENTAGE</u></th>
			
			
		</tr>
		<?php
		
		while($attendance = mysqli_fetch_assoc($records))
		{
			
			echo "<tr>";
			
			echo "<td>".$attendance['student_id']."</td>";
			
			echo "<td>".$attendance['student_name']."</td>";
			
			echo "<td>".$attendance['subject']."</td>";
			
			echo "<td>".$attendance['present']."</td>";
			
			echo "<td>".$attendance['absent']."</td>";
			
			echo "<td>".$attendance['total']."</td>";
			
			echo "<td>".$attendance['on_leave']."</td>";
			
			
			echo "<td>".$attendance['final_percentage']."</td>";
			
            
            echo "</tr>";			
			
	    }		
		
		
		
		?>

   
  
   

</div>


</body>

</html>


<?php   include "footer.php" ?>


 
	 