<?php
include('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

if(mysqli_query($conn,$sql)){
    echo "Employee Deleted Successfully!";
}else{
    echo "Delete Failed!";
}
?>
<br>
<a href="search_employee.php">Back</a>