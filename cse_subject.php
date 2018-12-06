<?php

include("header.php");

include("db.php");




?>

<html>

<head>

<title> CSE SUBJECT DASHBOARD</title>

</head>


<body>



<div class="panel panel-default">

  
  
   <div class="panel-heading">
   
       <a href="faculty_main.php"> <button type="button" name="back" value="back" class="btn btn-success pull-left">BACK</button></a>
     <div class="text-center" style="color:#006666"> <h2><b><u>UPDATE ATTENDANCE</u></b></h2>  </div>
      
	  

   </div>
	 
	 <div class="panel panel-body">
	 
	
        <div class="text-center" style="color:#006666"> <h3><b><u>SELECT SUBJECT FOR CSE BRANCH</u></b></h3>  </div>
	 
     </div>
	 
	 <br>
   
	
	<div class="text-center">
   
      <a class="btn btn-info margin-auto btn-lg" href="cse_attendance_register_co.php">CO</a>
	  
	  <br>
	  <br>
	  <br>
	  
	  
	 </div >
	 
	 <div  class="text-center">
	  
	  <a class="btn btn-info margin-auto btn-lg" href="cse_attendance_register_cd.php">CD</a>
	  
	  </div>
	  
	    <br>
	    <br>
	
	  
	  <div class="text-center">
	  
	   <a class="btn btn-info margin-auto btn-lg" href="cse_attendance_register_res.php">RES</a>
      
	  </div>
       <br>
	    <br>
	
	  

</body>

</html>

<?php   include "footer.php" ?>
