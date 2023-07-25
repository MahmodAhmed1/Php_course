<?php
    include("database.php");
    if($_GET['id']){
        $id = $_GET['id'];
    }else{
        header("location:allCustomer.php");
    }
    
    $dbconn = new db();
    $conn = $dbconn->connect("iti_db");

    $dbconn->delete($conn, "customers", $id);

?>