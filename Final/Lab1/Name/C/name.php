<?php
$name = "";
if (isset($_POST['userName'])) {
    $name = $_POST['userName'];
}
?>
<form action="" method="post">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="userName" value="<?php echo $name; ?>"> 
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
<?php 
if ($name != "") {
    echo "Output: " . $name;
}
?>