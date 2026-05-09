<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include('db.php');

if (isset($_POST['add'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO employees(name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "New Employee added succesfully!";
    }
    else{
        echo "Error!";
    }
}


?>


<html>
<body>
<h2>Add Employee</h2>
<form method = "post">
    Name:
    <input type="text" name="name" required>
    <br><br>

    Contact:
    <input type="text" name="contact" required>
    <br><br>

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="add" value="Add Employee">

</form>
    <a href="dashboard.php">Back</a>
</body>
</html>