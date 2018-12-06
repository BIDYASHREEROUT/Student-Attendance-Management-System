<?php

error_reporting(E_ALL & ~ E_NOTICE);
session_start();
 $pagetitle="ADMIN LogIn Page";
include("db.php");
include("header.php");


?>

<html>

<head>

  <h3 class=" container well text-center" style="color:#006666"> <b>ADMIN LOGIN</b></h3>

</head>


<body>

     
<?php
       if ($_POST['submit']){
       
        $username=($_POST['username']);
        $password=($_POST['password']);

        $sql="SELECT * FROM admin_login WHERE ADMIN_LOGIN_ID='$username' AND ADMIN_PASSWORD='$password'";
        $query=mysqli_query($con, $sql);
    
        $rows=mysqli_num_rows($query);
          
           if($rows >0){
         
              $_SESSION['username']=$username;
             
             header("Location:admin_main.php");
            }else{
            echo "<span style='color:red;'>User name or password is incorrect!</span>";
          }
        } 
?>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 

     <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center" style="color:#006666"><b><u>SIGN IN</u></b></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <button type="sumbit" name="submit" value="login" class="btn btn-lg btn-success btn-block">Login</button>  
								<br>
								<br>
								<a href="index.php"> <button type="button" name="back" value="back" class="btn btn-primary pull-left">BACK</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
 






</body>


</html>

<?php   include "footer.php"                     ?>