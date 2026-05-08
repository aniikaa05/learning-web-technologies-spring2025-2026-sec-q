<?php
$email="";
if(isset($_POST["email"])){
    $email=$_POST["email"];

    if($email != ""){
    echo "Email: " .$email;
    }

}
?>

<html>
    <body>
        <form method="post">
            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>