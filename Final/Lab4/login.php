<?php
session_start();
include('db.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
if(mysqli_num_rows($result)>0){
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
}
else{
        echo "Invalid username or password!";
    }
}

?>

<html>
<body>
    <h2 align="center">ADMIN LOGIN</h2>
    <form method="post" action="">
        <fieldset>
        <legend>Admin Login</legend>
        Username: <input type= "text" name ="username" required><br>
        Password: <input type= "password" name="password" required><br>
        <input type = "submit" name ="login" value="Login">
        <a href="register.php">Create Account</a>
</fieldset>
</form>
</body>
</html>