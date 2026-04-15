<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$message = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    if (isset($_SESSION['users'][$username])) {
        $message = "Password: " . $_SESSION['users'][$username];
    } else {
        $message = "User not found!";
    }
}
?>

<html>
<body>

<table border="1" width="600" align="center">
<tr>
<td>
<b>X Company</b>
<span style="float:right;">
<a href="index.php">Home</a> |
<a href="login.php">Login</a> |
<a href="register.php">Registration</a>
</span>
</td>
</tr>

<tr>
<td>
<center>
<h3>FORGOT PASSWORD</h3>

<form method="post">
Enter Username: <input type="text" name="username"><br><br>
<input type="submit" name="submit" value="Submit">
</form>

<br>
<?php echo $message; ?>

</center>
</td>
</tr>

<tr>
<td align="center">Copyright © 2017</td>
</tr>
</table>

</body>
</html>