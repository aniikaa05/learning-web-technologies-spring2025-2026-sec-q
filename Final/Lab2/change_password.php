<?php 
include('logged_header.php'); 
if(isset($_POST['submit'])){
    if($_POST['curr_pass'] == $user['password'] && $_POST['new_pass'] == $_POST['re_pass']){
        $_SESSION['user']['password'] = $_POST['new_pass'];
        echo "Password updated!";
    }
}
?>
<form method="POST">
    <fieldset>
        <legend><b>CHANGE PASSWORD</b></legend>
        Current Password: <input type="password" name="curr_pass"><br>
        <span style="color:green">New Password:</span> <input type="password" name="new_pass"><br>
        <span style="color:red">Retype New Password:</span> <input type="password" name="re_pass"><hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
<?php include('footer.php'); ?>