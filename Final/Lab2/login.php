<?php
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("data.txt", "r");

    while(!feof($file)){
        $line = fgets($file);

        if($line != ""){
            $line = trim($line);

            $u = "";
            $p = "";
            $found = false;
            for($i = 0; $i < strlen($line); $i++){
                if($line[$i] == ","){
                    $found = true;
                    continue;
                }

                if($found == false){
                    $u = $u . $line[$i];
                } else {
                    $p = $p . $line[$i];
                }
            }

            if($u == $username && $p == $password){
                $_SESSION['user'] = $username;
                header("Location: dashboard.php");
                exit();
            }
        }
    }

    fclose($file);

    echo "Invalid User!";
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
<h3>LOGIN</h3>

<form method="post">
User Name: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>

<input type="checkbox"> Remember Me<br><br>

<input type="submit" name="submit" value="Submit">
<a href="forgot.php">Forgot Password?</a>
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