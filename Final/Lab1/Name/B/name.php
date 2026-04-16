<form action="" method="post">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="userName">
        <hr>
        <input type="submit" value="Submit">
</fieldset>
</form>
<?php
if(isset($_POST['userName'])) {
    $name = $_POST['userName'];
    echo "Name: ". $name;
}
?>