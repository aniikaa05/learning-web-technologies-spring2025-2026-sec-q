<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

include('db.php');

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];

    $update = "UPDATE employees
               SET name='$name',
                   contact='$contact',
                   username='$username'
               WHERE id=$id";

    if($conn->query($update)){
        echo "Updated Successfully!";
    }else{
        echo "Update Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>

<h2>Update Employee</h2>

<form method="POST">

    Name:
    <input type="text" name="name"
    value="<?php echo $row['name']; ?>">
    <br><br>

    Contact:
    <input type="text" name="contact"
    value="<?php echo $row['contact']; ?>">
    <br><br>

    Username:
    <input type="text" name="username"
    value="<?php echo $row['username']; ?>">
    <br><br>

    <input type="submit" name="update" value="Update">

</form>

<br>

<a href="search_employee.php">Back</a>

</body>
</html>