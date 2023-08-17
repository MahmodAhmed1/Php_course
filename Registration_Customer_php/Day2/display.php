<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

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

<table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Country</th>
            <th>Gender</th>
            <th>Username</th>
            <th>Department</th>
            <th>Skills</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            $data = file("customer.txt");
            foreach ($data as $value) {
                $j = 0;
                $customer = explode(":", $value);
                echo "<tr>";
                for ($i=0; $i<count($customer); $i++) {
                    if($i==7){

                    }else{
                        echo "<td>" . $customer[$i] . "</td>";
                    }

                    
                }
                echo "<td><a href='edit.php?customer=" . $value . "'><button class='editButton'>Edit</button></a></td>";
                echo "<td><a href='delete.php?email=" . $customer[2] . "'><button class='deleteButton'>Delete</button></a></td>";
                $j++;
                echo "</tr>";
            }
        ?>
    </table>

    <button class="back_button"><a class="back_a" href="index.php">back</a></button>
</body>
</html>