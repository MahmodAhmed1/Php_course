<?php
session_start();

if (!isset($_SESSION['user_data'])) {
  header("Location: login.php");
  exit();
}else{
  $user_name = $_SESSION['user_data']['0'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="display.css">
</head>
<body>
<nav> 
    <div class="logo">logo</div> 
    <ul class="nav-items"> 
    <li><a href="Login.php">Login</a></li>
        <li><a href="registration.php">Registration</a></li>
    </ul> 
  </nav>
  <div class="container">
    <h2>Welcome, <?php echo $user_name; ?>!</h2>
    <p>You have successfully logged in.</p>
    <p>THANK YOU!</p>
    
  </div>
</body>
</html>