<?php include('logged_header.php'); ?>
<fieldset>
    <legend><b>PROFILE</b></legend>
    <table width="100%">
        <tr><td>Name:</td><td><?php echo $user['name']; ?></td><td rowspan="4"><img src="user.png" width="100"><br><a href="profile_picture.php">Change</a></td></tr>
        <tr><td>Email:</td><td><?php echo $user['email']; ?></td></tr>
        <tr><td>Gender:</td><td><?php echo $user['gender']; ?></td></tr>
        <tr><td>Date of Birth:</td><td><?php echo $user['dob']; ?></td></tr>
    </table><hr>
    <a href="edit_profile.php">Edit Profile</a>
</fieldset>
<?php include('footer.php'); ?>