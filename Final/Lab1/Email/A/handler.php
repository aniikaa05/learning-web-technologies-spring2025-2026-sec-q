<?php
    if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if($email == ""){
        echo "Email must be given";
    }
    else{
        echo "Email: ". $email;
    }
}
else{
    echo "Form not submitted properly";
}
?>