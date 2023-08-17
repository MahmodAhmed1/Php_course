<?php
$firstName = $_POST["firstName"] ?? "";
$lastName = $_POST["lastName"] ?? "";
$email = $_POST["email"] ?? "";
$address = $_POST["address"] ?? "";
$country = $_POST["Country"] ?? "";
$gender = $_POST["gender"] ?? "";
$userName = $_POST["userName"] ?? "";
$password = $_POST["password"] ?? "";
$department = $_POST["department"] ?? "";
$skills = $_POST["skills"] ?? "";
$captcha = strtolower($_POST["captcha"] ?? "");
$array = array();

if (!isset($firstName) || empty($firstName)) {
    $array["firstName"] = "first name is required";
}
if (!isset($lastName) || empty($lastName)) {
    $array["lastName"] = "last name is required";
}
if (!isset($department) || empty($department)) {
    $array["department"] = "department is required";
}
if (!isset($gender) || empty($gender)) {
    $array["gender"] = "gender is required";
}
if (!isset($email) || empty($email)) {
    $array["email"] = "email is required";
}
if ($captcha !== "xm37a2") {
    $array["captcha"] = "captcha not correct";
}

if(sizeof($array) != 0){
    $formErrors = json_encode($array);
    header("location:index.php?error=$formErrors&firstName=$firstName&lastName=$lastName&department=$department&gender=$gender&email=$email&address=$address&Country=$country&userName=$userName&password=$password&skills=".urlencode(serialize($skills)));
}
else{
    // open the file in append mode
    $file = fopen("customer.txt", "a");

    $customerInfo = $firstName . ":" . $lastName . ":" . $email . ":" . $address . ":" . $country . ":" . $gender . ":" . $userName . ":" . $password . ":" . $department . ":" . json_encode($skills);
 
    // write data to the file with a colon delimiter
    fwrite($file, "$customerInfo\n");

    // close the file
    fclose($file);

    header("location:display.php");
}

    
            // $gender = ($gender == "male") ? "Mr" : "Miss";
    
            // if ($captcha == "xm37a2") {
            //     echo "<p class='success'>Thanks $gender $firstName $lastName</p>";
            //     echo "<p>Review Your Information</p>";
            //     echo "<ul>";
            //     echo "<li>Name: $userName</li>";
            //     echo "<li>Address: $address</li>";
            //     echo "<li>Your skills:</li>";
            //     echo "<ul>";
            //     foreach ($skills as $key => $value) {
            //         echo "<li>$value</li>";
            //     }
            //     echo "</ul>";
            //     echo "<li>Department: $department</li>";
            //     echo "</ul>";
            // } else {
            //     echo "<p class='error'>Captcha not correct</p>";
            // }




    //header("location:display.php");

?>
