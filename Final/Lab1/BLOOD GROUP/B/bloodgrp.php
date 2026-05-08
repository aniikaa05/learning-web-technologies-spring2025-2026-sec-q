<?php
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
                    <option value="">--Select--</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>