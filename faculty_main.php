<?php

include("header.php");

include("db.php");




?>

<html>

<head>

<title> FACULTY DASHBOARD</title>

</head>


<body>



<div class="panel panel-default">

  
  
   <div class="panel-heading">
   
     <a href="index.php">
          <h4 class="pull-right"><u>LOGOUT</u> <span class="glyphicon glyphicon-log-out pull-right"></span></h4>
         </a>
     <div class="text-center" style="color:#006666"> <h2><b><u>UPDATE ATTENDANCE</u></b></h2>  </div>
        
	  

   </div>
	 
	 <div class="panel panel-body">
	 
	
        <div class="text-center" style="color:#006666"> <h3><b><u>SELECT BRANCH</u></b></h3>  </div>
	 
     </div>
	 
	
	<div class="text-center">
   
      <a class="btn btn-info margin-auto btn-lg" href="ce_subject.php">CE</a>
	  
	  <br>
	  <br>
	  <br>
	  
	  
	 </div >
	 
	 <div  class="text-center">
	  
	  <a class="btn btn-info margin-auto btn-lg" href="cse_subject.php">CSE</a>
	  
	  </div>
	  
	    <br>
	    <br>
	
	  
	  <div class="text-center">
	  
	   <a class="btn btn-info margin-auto btn-lg" href="it_subject.php">IT</a>
      
	  </div>
       <br>
	    <br>
	
	  

</body>

</html>

<?php   include "footer.php" ?>