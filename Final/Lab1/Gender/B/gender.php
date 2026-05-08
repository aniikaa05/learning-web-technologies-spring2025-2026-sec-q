<?php
$gender="";
if(isset($_POST['submit'])){
    $gender=$_POST['gender'] ?? "";
    if($gender==""){
        echo "Gender must be selected";
    }
    else{
        echo "Gender: ".$gender;
    }
}
?>

<html>
    <body>
        <form method="post" >
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male">Male
                 <input type="radio" name="gender" value="Female">Female
                  <input type="radio" name="gender" value="Others">Others <br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>