<?php

include("db.php");

include("header.php");

$sql = "SELECT * FROM faculty";

$records = mysqli_query($con,$sql);

?>


<html>

<head>

<title>FACULTY DETAILS</title>

</head>


<body>

<h2 align="center" style="color:#006666"><b><u>FACULTY DETAILS</u></b></h2>

 
	 <div class="panel panel-body">
	 
	 
	 
	     <table class="table table-striped">
		 
		 <tr>
		 
		    <th><u>FACULTY ID</u></th>
			
			<th><u>FACULTY NAME</u></th>
			
			<th><u>ADDRESS</u></th>
			
			<th><u>CONTACT NUMBER</u></th>
			
			<th><u>E-MAIL ID</u></th>
			
			<th><u>BRANCH</u></th>
			
			<th><u>SUBJECT</u></th>
			
		</tr>
		<?php
		
		while($faculty = mysqli_fetch_assoc($records))
		{
			
			echo "<tr>";
			
			echo "<td>".$faculty['fid']."</td>";
			
			echo "<td>".$faculty['fname']."</td>";
			
			echo "<td>".$faculty['address']."</td>";
			
			echo "<td>".$faculty['contact_no']."</td>";
			
			echo "<td>".$faculty['email_id']."</td>";
			
			echo "<td>".$faculty['branch']."</td>";
			
			echo "<td>".$faculty['subject']."</td>";
            
            echo "</tr>";			
			
	    }		
		
		
		
		?>


</body>



</html>