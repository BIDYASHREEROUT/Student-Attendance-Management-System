<?php
session_start();


$fid         = "";
$fname       = "";
$address     = "";
$contact_no  = "";
$email_id    = "";
$branch      = "";
$subject     = "";


$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'attendance management system');


if(isset($_POST['reg_fac'])) {
 
  $fid =  $_POST['fid'];
  $fname = $_POST['fname'];
  $address = $_POST['address'];
  $contact_no = $_POST['contact_no'];
  $email_id = $_POST['email_id'];	
  $branch = $_POST['branch'];
  $subject = $_POST['subject'];
  
  

  if (empty($fid)) { array_push($errors, "Faculty ID is required"); }
  if (empty($fname)) { array_push($errors, "Faculty name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($contact_no)) { array_push($errors, "Contact Number is required"); } 
  if (empty($email_id)) { array_push($errors, "E-Mail is required"); }
  if (empty($branch)) { array_push($errors, "Branch is required"); }
  if (empty($subject)) { array_push($errors, "Subject is required"); }
  

  $user_check_query = "SELECT * FROM faculty WHERE fid='$fid' OR fname='$fname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['fid'] === $fid) {
      array_push($errors, "Faculty ID already exists");
    }

    if ($user['fname'] === $fname) {
      array_push($errors, "Faculty name already exists");
    }
  }

  if (count($errors) == 0) {
 

  	$query = "INSERT INTO faculty (fid,fname,address,contact_no,email_id,branch,subject)
) 
  			  VALUES('$fid', '$fname', '$address', '$contact_no','$email_id','$branch','$subject')";
    mysqli_query($db, $query);
  	$_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: add_faculty.php');
  }
}

// ... 