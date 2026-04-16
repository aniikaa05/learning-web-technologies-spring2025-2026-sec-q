<?php
$name = "";
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
?>

<html>
<body>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="submit">
</form>

<?php
if ($name != "") {
    echo "Name: " . $name;
}
?>

</body>
</html>