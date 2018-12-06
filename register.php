<?php include('server.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration for student</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
 
  	<h2>Register Student</h2>
  </div>
	
  <form action="register.php" method="post">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Student ID</label>
  	  <input type="text" name="sid" value="<?php echo $sid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Student Name</label>
  	  <input type="text" name="sname" value="<?php echo $sname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Branch</label>
  	  <input type="text" name="branch" value="<?php echo $branch; ?>">
  	</div>
	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
	<div class="input-group">
  	  <label>Date of Birth</label>
  	  <input type="text" name="dob" value="<?php echo $dob; ?>">
  	</div>
	<div class="input-group">
  	  <label>Sex</label>
  	  <input type="text" name="sex" value="<?php echo $sex; ?>">
  	</div>
	<div class="input-group">
  	  <label>Semester</label>
  	  <input type="text" name="sem" value="<?php echo $sem; ?>">
  	</div>
	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="mobno" value="<?php echo $mobno; ?>">
  	</div>
	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register Student</button>
  	</div>
  </form>
</body>
</html>