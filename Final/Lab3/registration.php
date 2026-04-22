<?php session_start(); ?>
<?php 
if(isset($_POST['submit'])){
    $_SESSION['user'] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'gender' => $_POST['gender'],
        'dob' => $_POST['dob']
    ];
    header('location: login.php');
    exit();
}
?>

<table width="100%" border="1" cellspacing="0">
    <tr>
        <td align="right"> 
            <a href="login.php">Login</a>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="300px" align="center">
<form method="POST">
    <fieldset style="width:400px">
        <legend><b>REGISTRATION</b></legend>
        Name: <input type="text" name="name"><hr>
        Email: <input type="email" name="email"> <b>i</b><hr>
        User Name: <input type="text" name="username"><hr>
        Password: <input type="password" name="password"><hr>
        Confirm Password: <input type="password" name="conf_pass"><hr>
        <fieldset><legend>Gender</legend>
            <input type="radio" name="gender" value="Male"> Male 
            <input type="radio" name="gender" value="Female"> Female 
            <input type="radio" name="gender" value="Other"> Other
        </fieldset><hr>
        <fieldset><legend>Date of Birth</legend>
            <input type=date >
        </fieldset><hr>
        <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">
    </fieldset>
</form>