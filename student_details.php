<?php

include("db.php");

include("header.php");

$sql = "SELECT * FROM student";

$records = mysqli_query($con,$sql);

?>


<html>

<head>

<title>STUDENT DETAILS</title>

</head>


<body>

<h2 align="center" style="color:#006666"><b><u>STUDENT DETAILS</u></b></h2>

 
	 <div class="panel panel-body">
	 
	 
	 
	     <table class="table table-striped">
		 
		 <tr>
		 
		    <th><u>STUDENT ID</u></th>
			
			<th><u>STUDENT NAME</u></th>
			
			<th><u>BRANCH</u></th>
			
			<th><u>ADDRESS</u></th>
			
			<th><u>DATE OF BIRTH</u></th>
			
			<th><u>SEX</u></th>
			
			<th><u>SEMESTER</u></th>
			
			<th><u>CONTACT NUMBER</u></th>
			
		</tr>
		<?php
		
		while($student = mysqli_fetch_assoc($records))
		{
			
			echo "<tr>";
			
			echo "<td>".$student['sid']."</td>";
			
			echo "<td>".$student['sname']."</td>";
			
			echo "<td>".$student['branch']."</td>";
			
			echo "<td>".$student['address']."</td>";
			
			echo "<td>".$student['dob']."</td>";
			
			echo "<td>".$student['sex']."</td>";
			
			echo "<td>".$student['sem']."</td>";
			
			echo "<td>".$student['mobno']."</td>";
            
            echo "</tr>";			
			
	    }		
		
		
		
		?>


</body>



</html>