<?php
$email = $_REQUEST['email'];
var_dump($email);
$users = file("customer.txt");
foreach ($users as $key => $value) {
    $userData = explode(":", $value);
    if ($email == $userData[2]) {
        unset($users[$key]);
        break;
    }
}


$userFile = fopen("customer.txt", "w");
foreach ($users as $key => $value) {
    fwrite($userFile, $value);
}
fclose($userFile);

header("location:display.php");
