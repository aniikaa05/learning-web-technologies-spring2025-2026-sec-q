<?php
$username = "";
if (isset($_POST['submit'])) {
    $username = $_POST['userName'];

    if ($username == "") {
        echo "Invalid Name";
    } else {
        echo "Name: " . $username;
    }
} 
?>

<form action="" method="post">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="userName" value="<?php echo $username; ?>"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
