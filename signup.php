<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['first_name'];
		$lname=$_POST['last_name'];
        $email=$_POST['Email_id'];
        $pass=$_POST['pass'];
		$phone=$_POST['phone']
        $qry = "INSERT INTO `signuptable` ( `user_name`,`user_lname`, `user_email`, `password`,`user_phone`) VALUES ('$name','$lname','$email','$pass','$phone')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "signup.css" />
  </head>
<body>
<div class="head">
<?php include "head.php"?>
</div>
  <div class="login-box">
    <img src="log.png"  width="100px" height="100px">
    <h1>Sign up </h1>
        <form>
          First name:  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Last name:<br>
          <input type="text" name="first_name" placeholder="firstname">&emsp;
          <input type="text" name="last_name" placeholder="lastname">
          <br><br>
          Email id:<br>
          <input type="text" size="35" name="Email_id" placeholder="Email">
          <br><br>
          Password: &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Confirm Password:<br>
          <input type="password" name="pass" placeholder="password">&emsp;
          <input type="text" name="pass" placeholder="Confirm password">
          <br><br>
          Phone:<br>
          <input type="text" name="phone" placeholder="phone">
          <br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="submit" name="sub" value=" sign_up">
          
        </form>
  </div>
</body>
</html>
