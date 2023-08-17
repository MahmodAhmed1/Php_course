<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="home.php" method="POST">
        <!-- first name input  -->
        <div>
            <label for="firstName">First Name:</label><br>
            <input type="text" name="firstName" id="firstName" required><br><br>
        </div>
        <!-- last name input -->
        <div>
            <label for="lastName">Last Name:</label><br>
            <input type="text" name="lastName" id="lastName" required><br><br>       
        </div>
        <!-- address input -->
        <div>
            <label for="address">Address:</label><br>
            <textarea id="address" name="address" rows="5" cols="20"></textarea><br><br>
        </div>
        <!-- select country -->
        <div>
            <label for="Country">Country</label><br>
            <select id="Country" name="Country">
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
                <option value="matroh">Marsa Matroh</option>
            </select><br><br>
        </div>        
        <!-- choose gender -->
        <div>
            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <!-- choose skills -->
        <div>
            <p>Skills</p>
            <input type="checkbox" id="PHP" name="skills[]" value="PHP">
            <label for="PHP"> PHP</label><br>
            <input type="checkbox" id="MySQL" name="skills[]" value="MySQL">
            <label for="MySQL"> MySQL</label><br>
            <input type="checkbox" id="Laravel" name="skills[]" value="Laravel">
            <label for="Laravel"> Laravel</label><br>
            <input type="checkbox" id="PostgreSQL" name="skills[]" value="PostgreSQL">
            <label for="PostgreSQL"> PostgreSQL</label><br><br>
        </div>
        <!-- user name input -->
        <div>
            <label for="userName">User Name:</label><br>
            <input type="text" name="userName" id="userName" required><br><br>
        </div>
        <!-- password input -->
        <div>
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required><br><br>
        </div>
        <!-- department -->
        <div>
            <label for="department">Department:</label><br>
            <input type="text" name="department" value="openSource" readonly><br><br>
        </div>
        <!-- captcha -->
        <div>
            <label for="captcha">Xm37A2</label><br>
            <input type="text" name="captcha" id="captcha" required><br><br>
        </div>

        <input type="submit" value="Submit">

    </form>
</body>
</html>