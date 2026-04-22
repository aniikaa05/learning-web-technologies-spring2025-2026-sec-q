<?php
session_start();

$users = $_SESSION['users'] ?? [];

$user = [];
foreach($users as $u){
    $user = $u;
    break;
}
?>

<head>
    <title>Edit</title>
</head>

<body>
    <h1>Edit User!</h1>
    <br>

    <form method="post" action="update.php">
        USERNAME: <input type="text" name="username" value="<?= $user['name'] ?? '' ?>"/> <br>
        EMAIL: <input type="text" name="email" value="<?= $user['email'] ?? '' ?>"/> <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>