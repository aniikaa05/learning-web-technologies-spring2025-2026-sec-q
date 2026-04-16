<?php

if (isset($_POST['submit'])) {
    $username = $_POST['userName'];

    if ($username == "") {
        echo "Invalid Username";
    } else {
        echo "Name: " . $username;
    }
}

?>
<form action="" method="post">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="userName">
        <hr>
        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
