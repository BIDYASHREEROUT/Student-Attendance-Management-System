<?php

include("db.php");


?>


<html>

<head>
<title> ADMIN DASHBOARD</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.topnav {
  overflow: hidden;
  background-color: #CCE5FF;
}

.topnav a {
  float: right;
  color: #CCE5FF;
  text-align: center;
  color:black;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #CCE5FF;
  color: black;
}

.topnav a.active {
  background-color: #CCE5FF;
  color: black;
}

.bg{
	
	background:url("IIIT-Bhubneshwar.jpg");
	background-repeat: repeat-x;
	
	
	

}

</style>
</head>
<body >

<div class="topnav">
  <img src="IIIT_Bhubaneswar_Logo.png" alt="IIIT BBSR LOGO">
  
          <a href="index.php">
          <u><b>LOGOUT <span class="glyphicon glyphicon-log-out"></span></b></u>
         </a>
      

  <a href="student_details.php"><u><b>STUDENT DETAILS</b></u></a>
  <a href="faculty_details.php"><u><b>FACULTY DETAILS</b></u></a>
  <a class="active" href="admin_main.php"><u><b>HOME</b></u></a>
</div>




</body>
</html>







<div class="panel panel-default ">


    <div class="bg">
  
  
   <div class="panel-heading">
       
	  <h2>
	  <br>
	  <br>
   
      <a class="btn btn-success" href="register.php">ADD STUDENT</a>
	  
	 <br>
	 
	 <br>
	 <br>
	 
	 <br>
	 
	 <a class="btn btn-success" href="add_faculty.php">ADD FACULTY</a>
	  
	<br>
	
	<br>
	
	<br>
	<br>
	
	<br>
      
	  </h2>

   </div>

     
   </div>

</div>

<?php   include "footer.php"                     ?>

