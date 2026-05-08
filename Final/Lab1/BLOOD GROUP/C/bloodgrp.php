<?php
$blood = "";
if(isset($_POST['submit'])){
    $blood=$_POST['blood'] ?? "";

    if($blood==""){
        echo "Blood group must be selected";
    }
    else{
        echo "Blood Group: ".$blood;
    }
}
?>

<html>
    <body>
        <form method="post">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                <select name="blood">
                    <option value=""<?php if($blood == "") echo "selected"; ?> >--Select--</option>
                    <option value="A+"  <?php if($blood == "A+") echo "selected"; ?>>A+</option>
                    <option value="A-"  <?php if($blood == "A-") echo "selected"; ?>>A-</option>
                    <option value="B+"  <?php if($blood == "B+") echo "selected"; ?>>B+</option>
                    <option value="B-" <?php if($blood == "B-") echo "selected"; ?>>B-</option>
                    <option value="O+" <?php if($blood == "O+") echo "selected"; ?>>O+</option>
                    <option value="O-" <?php if($blood == "O-") echo "selected"; ?>>O-</option>
                    <option value="AB+" <?php if($blood == "AB+") echo "selected"; ?>>AB+</option>
                    <option value="AB-" <?php if($blood == "AB-") echo "selected"; ?>>AB-</option>
                    </select>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>