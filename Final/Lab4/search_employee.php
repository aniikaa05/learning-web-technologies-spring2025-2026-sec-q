<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Employee</title>
</head>
<body>

<h2>Search Employee</h2>

<form method="GET">

    Username:
    <input type="text" name="search">

    <input type="submit" value="Search">

</form>

<br>

<?php

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $sql = "SELECT * FROM employees
        WHERE username='$search'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){

            echo "ID: ".$row['id']."<br>";
            echo "Name: ".$row['name']."<br>";
            echo "Contact: ".$row['contact']."<br>";
            echo "Username: ".$row['username']."<br>";

            echo "
            <a href='update_employee.php?id=".$row['id']."'>Update</a>
            |

            <a href='delete_employee.php?id=".$row['id']."'>
            Delete
            </a>

            <hr>";
        }

    }else{
        echo "No Employee Found!";
    }
}
?>

<br>

<a href="dashboard.php">Back</a>

</body>
</html>