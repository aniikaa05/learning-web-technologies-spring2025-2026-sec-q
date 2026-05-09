<?php include('public_header.php'); ?>
<?php 
if(isset($_POST['submit'])){
    if(isset($_SESSION['user']) && $_POST['username'] == $_SESSION['user']['username'] && $_POST['password'] == $_SESSION['user']['password']){
        $_SESSION['status'] = "logged_in";
        if(isset($_POST['remember'])){
            setcookie('remember_user', $_POST['username'], time()+3600, "/");
        }
        header('location: dashboard.php');
        exit();
    } else {
        echo "Invalid user info!";
    }
}
?>
<form method="POST">
    <fieldset style="width:300px">
        <legend><b>LOGIN</b></legend>
        User Name: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><hr>
        <input type="checkbox" name="remember"> Remember Me<br><br>
        <input type="submit" name="submit" value="Submit"> <a href="forgot_password.php">Forgot Password?</a>
    </fieldset>
</form>
<?php include('footer.php'); ?>