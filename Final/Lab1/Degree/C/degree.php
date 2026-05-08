<?php
$degree = [];
if(isset($_POST['submit'])){
    if(!isset($_POST['degree'])){
        echo "Degree must be selected";
    }
    else{
        $degree = $_POST['degree'];
        echo "Degree: ";
        foreach($degree as $d){
            echo $d." ";
        }
    }
}
?>

<html>
    <body>
        <form method="post">
            <fieldset>
                <legend>DEGREE</legend>

                <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $degree)) { echo "checked"; } ?>>SSC
                <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC", $degree)) { echo "checked"; } ?>>HSC
                <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc", $degree)) { echo "checked"; } ?>>BSc
                <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc", $degree)) { echo "checked"; } ?>>MSc <br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>