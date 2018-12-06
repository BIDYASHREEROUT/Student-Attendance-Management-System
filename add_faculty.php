<?php include('faculty_server.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration for faculty</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
 
  	<h2>Register Faculty</h2>
  </div>
	
  <form action="add_faculty.php" method="post">
  	<?php include('errors.php'); ?>
	<div class="input-group">
	
  	  <label>Faculty ID</label>
  	  <input type="text" name="fid" value="<?php echo $fid; ?>">
  	</div>
  	<div class="input-group">
  	  <label> Faculty Name</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Contact Number</label>
  	  <input type="text" name="contact_no" value="<?php echo $contact_no; ?>">
	  
	  
  	</div>
	
	
	<div class="input-group">
  	  <label>E-Mail id</label>
  	  <input type="text" name="email_id" value="<?php echo $email_id; ?>">
	  
	  
  	</div>
	
  	<div class="input-group">
  	  <label>Branch</label>
  	  <input type="text" name="branch" value="<?php echo $branch; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Subject</label>
  	  <input type="text" name="subject" value="<?php echo $subject; ?>">
  	</div>
	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_fac">Register Faculty</button>
  	</div>
  </form>
</body>
</html>