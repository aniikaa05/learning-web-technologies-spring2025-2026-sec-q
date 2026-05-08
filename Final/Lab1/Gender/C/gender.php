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
                <input type="radio" name="gender" value="Male"  <?php if($gender == "Male") echo "checked"; ?>>Male
                 <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>>Female
                  <input type="radio" name="gender" value="Others" <?php if($gender == "Others") echo "checked"; ?>>Others <br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>