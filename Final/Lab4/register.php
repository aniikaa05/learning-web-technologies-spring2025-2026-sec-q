<?php
include('db.php');
if(isset($_POST['register'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql = "INSERT INTO admin(username, password) VALUES ('$username', '$password')";
    if(mysqli_query($conn,$sql)){
        echo "Inserted";
    }
    else{
        echo "Not Inserted!";
    }
}
?>

<html>
<body>
    <h2 align="center">REGISTRATION</h2>
    <form method="post" action="">
        <fieldset>
        <legend>Admin Registration</legend>
        Username: <input type= "text" name ="username" required><br>
        Password: <input type= "password" name="password" required><br>
        <input type = "submit" name ="register" value="Register">
        <a href= "login.php"> Login Here</a>
</fieldset>
</form>
</body>
</html>