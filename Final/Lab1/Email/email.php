<?php
$email="";
if(isset($_POST["email"])){
    $email=$_POST["email"];
}
?>

<html>
    <body>
        <form method="post">
            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <input type="submit">
</form>
<?php
if($email != ""){
    echo "Email: " .$email;
}
?>
</body>
</html>