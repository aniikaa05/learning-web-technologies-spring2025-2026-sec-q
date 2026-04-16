<?php

if (isset($_POST['submit'])) {
    $username = $_POST['userName'];
    if ($username == "") {
        echo "Invalid Username";
    } else {
        echo "Name: " . $username;
    }
} else {
    echo "Form not submitted properly";
}

?>