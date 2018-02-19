<h1>Online printing system</h1>
<div class="nav">
    <ul>
        <li><a href="home1.html">Home</a></li>
        <?php  if(!isset($_SESSION['email'])) {    ?>
        <li><a href="signup.php">sign up</a></li>
        
        <li><a href="login.php">login</a></li>
        <?php  } ?>
        <?php if(isset($_SESSION['email'])) {    ?>
        <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
    </ul>
</div>