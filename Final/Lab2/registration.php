<?php 
include('public_header.php'); 
if(isset($_POST['submit'])){
    $_SESSION['user'] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'gender' => $_POST['gender'],
        'dob' => $_POST['dd']."/".$_POST['mm']."/".$_POST['yyyy']
    ];
    header('location: login.php');
    exit();
}
?>
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
            <input type="text" size="2" name="dd"> / <input type="text" size="2" name="mm"> / <input type="text" size="4" name="yyyy"> (dd/mm/yyyy)
        </fieldset><hr>
        <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">
    </fieldset>
</form>
<?php include('footer.php'); ?>