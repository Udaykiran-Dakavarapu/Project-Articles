<?php 
include "includes/connect.php";
session_start();
if(isset($_SESSION['email'])) 
    header('location:index.php');

    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `user_email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION["user"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            header('location:index.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "sign.css" />
  </head>
<body>
  <div class="login-box">
    <img src="log.png"  width="100px" height="100px">
    <h1>login </h1>
        <form>
          user name:<br>
          <input type="text" name="user_name" placeholder="user_id">
          <br><br>
          Password:<br>
          <input type="password" name="pass" placeholder="password">
          <br><br>
          <input type="submit" name="sub" value=" submit">
          
        </form>
  </div>
</body>
</html>
