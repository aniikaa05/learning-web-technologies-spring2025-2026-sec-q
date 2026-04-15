<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("data.txt", "a"); 
    fwrite($file, $username . "," . $password . "\n");
    fclose($file);

    echo "Registration Successful!";
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
Confirm Password: <input type="password"><br><br>

Gender:
<input type="radio"> Male
<input type="radio"> Female
<input type="radio"> Other
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