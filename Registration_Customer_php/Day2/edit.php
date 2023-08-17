<?php
$customer = explode(":", $_GET["customer"]);
$firstName = $customer[0] ?? "";
$lastName = $customer[1] ?? "";
$email = $customer[2] ?? "";
$address = $customer[3] ?? "";
$country = $customer[4] ?? "";
$gender = $customer[5] ?? "";
$userName = $customer[6] ?? "";
$password = $customer[7] ?? "";
$department = $customer[8]  ?? "";
$skills = $customer[9] ?? "";
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <title>Edit Customer</title> 
  
  <link rel="stylesheet" href="display.css"> 
 
</head> 
<body> 
  <nav> 
    <div class="logo">logo</div> 
    <ul class="nav-items"> 
    <li><a href="index.php">Add Customer</a></li>
        <li><a href="display.php">Display All</a></li>
    </ul> 
  </nav> 
  <div class="container"> 
    <h2>Edit Customer</h2> 
    <form method="post" action="editFile.php"> 
      <input type="hidden" name="customer" value="<?php if(isset($_GET['customer'])) { echo htmlspecialchars($_GET['customer']); } ?>"> 
      <div class="form-group"> 
        <label for="firstName">First Name:</label> 
        <input type="text" name="firstName" value="<?php echo $firstName ?? ""; ?>"> 
      </div> 
      <div class="form-group"> 
        <label for="lastName">Last Name:</label> 
        <input type="text" name="lastName" value="<?php echo $lastName ?? ""; ?>"> 
      </div> 
      <div class="form-group"> 
        <label for="email">Email:</label> 
        <input type="text" name="email" value="<?php echo $email ?? ""; ?>" readonly> 
      </div> 
      <div class="form-group"> 
        <label for="username">Username:</label> 
        <input type="text" name="userName" value="<?php echo $userName ?? ""; ?>" readonly> 
      </div> 
      <div class="form-group"> 
      <label for="Country">Country</label> 
      <select id="Country" name="Country"> 
        <option <?php if ($country == "Cairo"){echo "selected";}?> value="Cairo">Cairo</option> 
        <option value="Giza" <?php if ($country == "Giza"){echo "selected";} ?>>Giza</option> 
        <option value="Alexandria" <?php if ($country == "Alexandria"){echo "selected";} ?>>Alexandria</option> 
        <option value="matroh" <?php if ($country == "matroh"){echo "selected";} ?>>Marsa Matroh</option> 
      </select>
      </div> 
      <div class="form-group"> 
        <p>Gender:</p> 
        <input type="radio" id="male" name="gender" value="male" <?php if(isset($gender) and $gender=="male"){echo "checked";} ?>> 
        <span for="male">Male</label> 
        <input type="radio" id="female" name="gender" value="female" <?php if(isset($gender) and $gender=="female"){echo "checked";} ?>> 
        <span for="female">Female</span><br><br>
      </div> 
      <div class="form-group"> 
        <label for="address">Address:</label> 
        <textarea name="address"><?php echo $address ?? ""; ?></textarea> 
      </div> 

      <div class="form-group"> 
        <label for="password">Password:</label> 
        <input type="password" name="password" value="<?php echo $password ?? ""; ?>"> 
      </div> 
      <div class="form-group"> 
        <p>Department:</p> 
        <input type="radio" id="IS" name="department" value="IS" <?php if(isset($department) and $department=="IS"){echo "checked";} ?>> 
        <span for="IS">IS</span> 
        <input type="radio" id="CS" name="department" value="CS" <?php if(isset($department) and $department=="CS"){echo "checked";} ?>> 
        <span for="CS">CS</span> 
        <input type="radio" id="AI" name="department" value="AI" <?php if(isset($department) and $department=="AI"){echo "checked";} ?>> 
        <span for="AI">AI</span> 
        <input type="radio" id="IT" name="department" value="IT" <?php if(isset($department) and $department=="IT"){echo "checked";} ?>> 
        <span for="IT">IT</span> 
        <input type="radio" id="DS" name="department" value="DS" <?php if(isset($department) and $department=="DS"){echo "checked";} ?>>
        <span for="DS">DS</span><br><br>

      <div class="form-group"> 
        <input type="submit" value="Save"> 
        <input type="reset" value="Reset"> 
      </div> 
    </form> 
  </div> 
</body> 
</html> 
