<?php
$customer = explode(":", $_POST["customer"]);

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

echo "<br>";
if(!isset($_POST["firstName"]) or empty($_POST["firstName"])){
    $customer[0] = $firstName;
}else{
    $customer[0] = $_POST["firstName"];
}
if(!isset($_POST["lastName"]) or empty($_POST["lastName"])){
    $customer[1] = $lastName;
}else{
    $customer[1] = $_POST["lastName"];
}
if(!isset($_POST["email"]) or empty($_POST["email"])){
    $customer[2] = $email;
}else{
    $customer[2] = $_POST["email"];
}
if(!isset($_POST["address"]) or empty($_POST["address"])){
    $customer[3] = $address;
}else{
    $customer[3] = $_POST["address"];
}
if(!isset($_POST["country"]) or empty($_POST["country"])){
    $customer[4] = $country;
}else{
    $customer[4] = $_POST["country"];
}
if(!isset($_POST["gender"]) or empty($_POST["gender"])){
    $customer[5] = $gender;
}else{
    $customer[5] = $_POST["gender"];
}
if(!isset($_POST["userName"]) or empty($_POST["userName"])){
    $customer[6] = $userName;
}else{
    $customer[6] = $_POST["userName"];
}
if(!isset($_POST["password"]) or empty($_POST["password"])){
    $customer[7] = $password;
}else{
    $customer[7] = $_POST["password"];
}
if(!isset($_POST["department"]) or empty($_POST["department"])){
    $customer[8] = $department;
}else{
    $customer[8] = $_POST["department"];
}
if(!isset($_POST["skills"]) or empty($_POST["skills"])){
    $customer[9] = $skills;
}else{
    $customer[9] = $_POST["skills"];
}
// Open the file for reading and writing
$filename = "customer.txt";
$file = fopen($filename, "r+");

// Read the entire contents of the file into an array
$contents = file($filename);

// Loop through the lines of the file
foreach ($contents as &$line) {
    $oldCustomer = explode(":", $line);

    // Check if the customer ID matches the ID of the customer we want to edit
    if ($oldCustomer[2] == $customer[2] and $oldCustomer[6] == $customer[6]) {
        $line = implode(":", $customer) . "\n";
        break;
    }
}

// Write the updated contents back to the file
file_put_contents($filename, implode("", $contents));

// Close the file
fclose($file);

header("location:display.php");

?>