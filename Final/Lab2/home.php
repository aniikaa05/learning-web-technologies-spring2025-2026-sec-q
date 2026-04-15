<?php 
session_start(); 
?>
<html>
<head>
<title>Home</title>
</head>
<body>

<table border="1" width="600" align="center">
    <tr>
        <td>
            <b>X Company</b>
            <span style="float:right;">
                <a href="home.php">Home</a> |
                <?php if(isset($_SESSION['user'])) { ?>
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="logout.php">Logout</a>
                <?php } else { ?>
                    <a href="login.php">Login</a> |
                    <a href="register.php">Registration</a>
                <?php } ?>
            </span>
        </td>
    </tr>

    <tr>
        <td height="150">
            <?php if(isset($_SESSION['user'])) { ?>
                <h3>Welcome, <?php echo $_SESSION['user']; ?>!</h3>
                <p>You are successfully logged in.</p>
            <?php } else { ?>
                <h3>Welcome to X Company</h3>
                <p>Please login to continue.</p>
            <?php } ?>
        </td>
    </tr>

    <tr>
        <td align="center">
            Copyright © 2017
        </td>
    </tr>
</table>

</body>
</html>