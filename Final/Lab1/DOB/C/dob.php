<?php
$dob="";
if(isset($_POST['submit'])){
    $dob= $_POST['dob'];
    if($dob == ""){
    echo "Date of Birth must be given ";
}
else{
    echo "Date of Birth: ".$dob;
}
}
else{
    echo "Form not submitted properly";
}
?>

<html>
    <body>
        <form method="post">
            <fieldset>
            <legend>Date of Birth</legend>
            <input type ="date" name="dob" value="<?php echo $dob; ?>"><br>
            <input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>
</html>
