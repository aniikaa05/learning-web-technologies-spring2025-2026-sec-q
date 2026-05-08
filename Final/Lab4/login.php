<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['user'] = $user;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login!";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button name="login">Login</button>
</form>