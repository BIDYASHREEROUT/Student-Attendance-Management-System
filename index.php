<?php

include('db.php');

?>


<html>

<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

    .bgnd{
		
		background:url("IIIT-Bhubneshwar.jpg");
	    background-repeat: repeat-x;
		
	}


</style>

</head>
<body>

<div class="container">


<h2><div class="well text-center" style="color:#990099">
WELCOME TO STUDENT ATTENDANCE MANAGEMENT SYSTEM</div></h2>


</div>

<br>

<br>


<div class="panel panel-default">

  
  
   <div class="panel-heading">
   
   
     <div class="text-center" style="color:#006666"> <h2><b><u>LOGIN OPTIONS</u></b></h2>  </div>
       
	  

   </div>
   
   <div class="bgnd">
   <br>
   
    <br>
	<br>
	
	<div class="text-center">
   
      <a class="btn btn-info margin-auto" href="admin_login.php">LOGIN AS ADMIN</a>
	  
	  <br>
	  <br>
	  <br>
	  <br>
	  
	  
	 </div >
	 
	 <div  class="text-center">
	  
	  <a class="btn btn-info margin-auto" href="faculty_login.php">LOGIN AS FACULTY</a>
	  
	  </div>
	  
	    <br>
	    <br>
	  <br>
	  
	  <div class="text-center">
	  
	   <a class="btn btn-info margin-auto" href="student_login.php">LOGIN AS STUDENT</a>
      
	  </div>
       <br>
	    <br>
		<br>
	  

    </div>
	
	

</div>




</body>

</html>

<?php   include "footer.php"                     ?>