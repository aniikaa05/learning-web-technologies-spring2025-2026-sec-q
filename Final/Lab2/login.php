<?php
session_start();
if(isset($_POST['submit'])){
    if(isset($_SESSION['user']) && $_POST['username'] == $_SESSION['user']['username'] && $_POST['password'] == $_SESSION['user']['password']){
        $_SESSION['status'] = "active";
        if(isset($_POST['remember'])){
            setcookie('username', $_POST['username'], time()+3600, "/");
        }
        header('location: dashboard.php');
    } else {
        echo "Invalid username or password";
    }
}
include('header.php');
?>
<form method="POST">
    <fieldset>
        <legend><b>LOGIN</b></legend>
        User Name : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><hr>
        <input type="checkbox" name="remember"> Remember Me <br><br>
        <input type="submit" name="submit" value="Submit">
        <a href="forgot_password.php">Forgot Password?</a>
    </fieldset>
</form>
<?php include('footer.php'); ?>