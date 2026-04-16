<?php 
session_start();
if(!isset($_SESSION['status'])){
    header('location: login.php');
    exit();
}
$user = $_SESSION['user'];
?>
<table width="100%" border="1" cellspacing="0">
    <tr>
        <td><h2>X Company</h2></td>
        <td align="right">
            Logged in as <a href="view_profile.php"><?php echo $user['name']; ?></a> | 
            <a href="logout.php">Logout</a>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
            <b>Account</b><hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="profile_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </td>
        <td valign="top" height="300px" style="padding:20px">