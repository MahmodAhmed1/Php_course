<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Submission Result</h2>
        <?php

        $firstName = $_REQUEST["firstName"];
        $lastName = $_REQUEST["lastName"];
        $address = $_REQUEST["address"];
        $country = $_REQUEST["Country"];
        $gender = $_REQUEST["gender"];
        $userName = $_REQUEST["userName"];
        $password = $_REQUEST["password"];
        $department = $_REQUEST["department"];
        $skills = $_REQUEST["skills"];
        $captcha = strtolower($_REQUEST["captcha"]);

        $gender = ($gender == "male") ? "Mr" : "Miss";

        if ($captcha == "xm37a2") {
            echo "<p class='success'>Thanks $gender $firstName $lastName</p>";
            echo "<p>Review Your Information</p>";
            echo "<ul>";
            echo "<li>Name: $userName</li>";
            echo "<li>Address: $address</li>";
            echo "<li>Your skills:</li>";
            echo "<ul>";
            foreach ($skills as $key => $value) {
                echo "<li>$value</li>";
            }
            echo "</ul>";
            echo "<li>Department: $department</li>";
            echo "</ul>";
        } else {
            echo "<p class='error'>Captcha not correct</p>";
        }

        ?>
    </div>
</body>
</html>