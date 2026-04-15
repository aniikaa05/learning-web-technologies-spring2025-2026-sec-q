<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($username == "" || $password == "") {
        echo "Fields cannot be empty!";
    }
    elseif ($password != $confirm) {
        echo "Password does not match!";
    }
    elseif (isset($_SESSION['users'][$username])) {
        echo "User already exists!";
    }
    else {
        $_SESSION['users'][$username] = $password;
        echo "Registration Successful!";
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
<h3>REGISTRATION</h3>

<form method="post">
Name: <input type="text"><br><br>
Email: <input type="email"><br><br>

User Name: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
Confirm Password: <input type="password" name="confirm"><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<br><br>

Date of Birth:
<input type="text" size="2"> /
<input type="text" size="2"> /
<input type="text" size="4">
<br><br>

<input type="submit" name="submit" value="Submit">
<input type="reset" value="Reset">
</form>

</center>
</td>
</tr>

<tr>
<td align="center">Copyright © 2017</td>
</tr>
</table>

</body>
</html>