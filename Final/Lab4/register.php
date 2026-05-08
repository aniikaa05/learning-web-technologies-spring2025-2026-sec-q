<?php
include 'db.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO userinfo(name, contact, username, password)
            VALUES('$name', '$contact', '$user', '$pass')";

    if($conn->query($sql)){
        echo "Registered Successfully!";
    } else {
        echo "Error!";
    }
}
?>
<fieldset>
<form method="POST" onsubmit="return validateForm()">
    <legend><h2 align="center">Registration</h2></legend>
    Name: <input type="text" id="name" name="name"><br>
    Contact No: <input type="number" id="contact" name="contact"><br>
    Username: <input type="text" id="username" name="username"><br>
    Password: <input type="password" id="password" name="password"><br>
    <button name="register">Register</button>
</form>
</fieldset>
<script src="js/validation.js"></script>