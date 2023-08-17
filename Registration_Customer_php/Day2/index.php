<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
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
    <?php
        $errors = $_GET["error"] ?? "[]";
        $formErrors = json_decode($errors, true);
    ?>
    <div class="container"> 
    <h2>Customer Registration</h2> 
    <form action="file.php" method="POST">
        <!-- first name input  -->
        <div class="form-group"> 
            <span for="firstName">First Name:</span>
            <input type="text" name="firstName" value="<?php echo $_GET["firstName"] ?? ""; ?>">
            <p class="error">
                <?php
                    if(isset($formErrors["firstName"])){
                        echo $formErrors["firstName"];
                    }
                ?>
            </p>
        </div>
        <!-- last name input -->
        <div class="form-group"> 
            <span for="lastName">Last Name:</span><br>
            <input type="text" name="lastName" id="lastName" value="<?php echo $_GET["lastName"] ?? ""; ?>">      
            <p class="error"> 
                <?php
                    if(isset($formErrors["lastName"])){
                        echo $formErrors["lastName"];
                    }
                ?>
            </p>
        </div>
        <!-- email input -->
        <div class="form-group"> 
            <span for="email">Email:</span><br>
            <input type="text" name="email" id="email" value="<?php echo $_GET["email"] ?? ""; ?>">  
            <p class="error"> 
                <?php
                    if(isset($formErrors["email"])){
                        echo $formErrors["email"];
                    }
                ?>
            </p>   
        </div>
        <!-- address input -->
        <div class="form-group"> 
            <span for="address">Address:</span><br>
            <textarea id="address" name="address" rows="5" cols="20"><?php echo $_GET["address"] ?? ""; ?></textarea><br><br>
        </div>
        <!-- select country -->
        <div class="form-group"> 
            <span for="Country">Country</span><br>
            <select id="Country" name="Country">
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
                <option value="matroh">Marsa Matroh</option>
            </select><br><br>
        </div>        
        <!-- choose gender -->
        <div class="form-group"> 
            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male" <?php if(isset($_GET["gender"]) and  $_GET["gender"]=="male"){echo "checked";} ?>>
            <span for="male">Male</span>
            <input type="radio" id="female" name="gender" value="female" <?php if(isset($_GET["gender"]) and $_GET["gender"]=="female"){echo "checked";} ?>>
            <span for="female">Female</span>
            <p class="error"> 
                <?php
                    if(isset($formErrors["gender"])){
                        echo $formErrors["gender"];
                    }
                ?>
            </p>
        </div>
        <!-- choose skills -->
        <div class="form-group"> 
            <p>Skills</p>
            <input type="checkbox" id="PHP" name="skills[]" value="PHP">
            <span for="PHP"> PHP</span><br>
            <input type="checkbox" id="MySQL" name="skills[]" value="MySQL">
            <span for="MySQL"> MySQL</span><br>
            <input type="checkbox" id="Laravel" name="skills[]" value="Laravel">
            <span for="Laravel"> Laravel</span><br>
            <input type="checkbox" id="PostgreSQL" name="skills[]" value="PostgreSQL">
            <span for="PostgreSQL"> PostgreSQL</span><br><br>
        </div>
        <!-- user name input -->
        <div class="form-group"> 
            <span for="userName">User Name:</span><br>
            <input type="text" name="userName" id="userName" value="<?php echo $_GET["userName"] ?? ""; ?>"><br><br>
        </div>
        <!-- password input -->
        <div class="form-group"> 
            <span for="password">Password:</span><br>
            <input type="password" name="password" id="password"><br><br>
        </div>
        <!-- department -->
        <div class="form-group"> 
            <p>Department:</p>
            <input type="radio" id="IS" name="department" value="IS">
            <span for="IS">IS</span>
            <input type="radio" id="CS" name="department" value="CS">
            <span for="CS">CS</span>
            <input type="radio" id="AI" name="department" value="AI">
            <span for="AI">AI</span>
            <input type="radio" id="IT" name="department" value="IT">
            <span for="IT">IT</span>
            <input type="radio" id="DS" name="department" value="DS">
            <span for="DS">DS</span>
        </div>

        <!-- captcha -->
        <div class="form-group"> 
            <span for="captcha">Xm37A2</span><br>
            <input type="text" name="captcha" id="captcha" value="<?php echo $_GET["captcha"] ?? ""; ?>"><br>          
            <p class="error"> 
                <?php
                    if(isset($formErrors["captcha"])){
                        echo $formErrors["captcha"];
                    }
                ?>
            </p>
        </div>

        <input type="submit" value="Submit">

    </form>
    </div>
</body>
</html>