<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>

<html>
<body>
    <h2>Dashboard</h2>
    <ul>
        <li><a href ="add_employee.php">Add Employee</a></li>
        <li><a href ="search_employee.php">Search Employee</a></li>
        <li><a href ="logout.php">Logout</a></li>
        <li><a href ="update_employee.php">Update</a></li>

</ul>
</body>
</html>