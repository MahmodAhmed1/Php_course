<?php

include("databse.php");

if (isset($_COOKIE['user_data'])) {
    $data_info = $_COOKIE['user_data'];
    $user_data = explode(":", $data_info);
    // Do something with $user_data
  }


  $dbconnection = new db();


    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname = "iti_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

        // Check if database exists
        $result = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'");
        if (mysqli_num_rows($result) == 0) {
            // Create database
            $sql = "CREATE DATABASE $dbname";
            mysqli_query($conn, $sql);
        }
        // Select database
        mysqli_select_db($conn, $dbname);
    
    



        $query = "SELECT * FROM customers WHERE email='" . $user_data[1] . "'";
        $result = mysqli_query($conn, $query);
        
        // Check if the query was successful
        if (!$result) {
            die("Error executing query: " . mysqli_error($conn));
        }
        
        if(mysqli_fetch_assoc($result) == NULL){
                // Insert data into database
                $sql = "INSERT INTO $table_name (name, email, password, roomNumber, picture)
                VALUES ('$user_data[0]', '$user_data[1]', '$user_data[2]', '$user_data[3]', '$user_data[4]')";
                $conn->query($sql);

                header("location:allCustomer.php");
        }
        else{
            header("location:registration.php");
        }
        
        $conn->close();

?>