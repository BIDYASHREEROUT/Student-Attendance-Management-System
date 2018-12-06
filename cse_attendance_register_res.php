<?php

include("db.php");

include("header.php");

if(isset($_POST['submit']))
{
	
	if(isset($_POST['submit']))
{
	foreach($_POST['attendance_status'] as $id=>$attendance_status)
	{
		$sid=$_POST['sid'][$id];
		$sname=$_POST['sname'][$id];
		$date=date("Y-m-d");
		
		 mysqli_query($con,"insert into attendance_records_cse_res(student_id,student_name,attendance_status,date)values('$sid','$sname','$attendance_status','$date')");
		
		
	}
	
}
	
}

?>


<div class="panel panel-default container ">


	 
	 <b><h4><div class="well text-center"><b>DATE : <?php echo date("d-m-Y");     ?></b></div></h4></b>
	 
	 <div class="panel panel-body">
	 
	   <form action="cse_attendance_register_res.php" method="Post">
	 
	     <table class="table table-striped">
	    
		<tr>
		
		<th>SL.No.</th>
		
		<th>STUDENT ID</th>
		
		<th>STUDENT NAME</th>
		
		<th>ATTENDANCE STATUS</th>
		
		</tr>
		
		
		
		<?php  $result=mysqli_query($con,"select sid,sname FROM student WHERE branch='CSE'");
		
		$serialnumber=0;
		$counter=0;
		while($row=mysqli_fetch_array($result))
		{
			$serialnumber++;
			
		
		?>
		<tr>
		<td>  <?php echo $serialnumber; ?></td>
		<td>  <?php echo $row['sid']; ?>
		<input type="hidden" value="<?php echo $row['sid']; ?>" name="sid[]">
		</td>
		<td>  <?php echo $row['sname']; ?>
		<input type="hidden" value="<?php echo $row['sname']; ?>" name="sname[]">
		</td>
	    <td>  
		
		<input type="radio" name="attendance_status[<?php  echo $counter;   ?>]" value="Present">Present</input>
		
		<input type="radio" name="attendance_status[<?php  echo $counter;   ?>]" value="Absent">Absent</input>
		
		</td>
	     </tr> 
	     <?php
		 $counter++;
		   }
		 
		  ?>
          </table>
		  
		  <input type="submit" name="submit" value="submit" class="btn btn-primary"></input>
		  <a href="cse_subject.php"> <button type="button" name="back" value="back" class="btn btn-success pull-right">BACK</button></a>
		  </form>
	     
</div>

</div>

<?php   include "footer.php"     ?>