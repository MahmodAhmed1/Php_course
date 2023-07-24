<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
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
    <h2>User Login</h2>
    <form action="loginHand.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>