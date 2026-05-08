<?php
if(isset($_POST['submit'])){
    if(!isset($_POST['degree'])){
        echo "Degree must be selected";
    }
    else{
        $degree=$_POST['degree'];
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
                <input type="checkbox" name="degree[]" value="SSC">SSC
                <input type="checkbox" name="degree[]" value="HSC">HSC
                <input type="checkbox" name="degree[]" value="BSc">BSc
                <input type="checkbox" name="degree[]" value="MSc">MSc <br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </body>
</html>