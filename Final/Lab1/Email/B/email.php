<?php
$email = "";
 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    if($email == ""){
        echo "Email must be given";
    }
    else{
        echo "Email: ".$email;
    }
 }
 else{
    echo "Form not submitted properly";
 }
 ?>

<html>
    <body>
        <form method="POST">
            <fieldset>
                <legend>EMAIL</legend>
                <input type="text" name="email" value=" <?php echo $email; ?>">
                <input type="submit" name="submit" value="Submit">

            </fieldset>
        </form>
    </body>
</html>