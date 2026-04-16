<?php 
include('logged_header.php'); 
if(isset($_POST['submit'])){
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['gender'] = $_POST['gender'];
    $_SESSION['user']['dob'] = $_POST['dob'];
    header('location: view_profile.php');
    exit();
}
?>
<form method="POST">
    <fieldset>
        <legend><b>EDIT PROFILE</b></legend>
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><hr>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><hr>
        Gender: 
        <input type="radio" name="gender" value="Male" <?php if($user['gender']=='Male') echo "checked"; ?>> Male
        <input type="radio" name="gender" value="Female" <?php if($user['gender']=='Female') echo "checked"; ?>> Female
        <input type="radio" name="gender" value="Other" <?php if($user['gender']=='Other') echo "checked"; ?>> Other
        <hr>
        Date of Birth: <input type="text" name="dob" value="<?php echo $user['dob']; ?>"> (dd/mm/yyyy)<hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
<?php include('footer.php'); ?>