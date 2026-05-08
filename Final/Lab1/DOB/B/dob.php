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
?>

<html>
    <body>
        <form method="post">
            <fieldset>
            <legend>Date of Birth</legend>
            <input type ="date" name="dob"><br>
            <input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>
</html>
