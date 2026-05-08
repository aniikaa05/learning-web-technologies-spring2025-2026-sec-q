<?php
if(isset($_POST['submit'])){
    $dob=$_POST['dob'];
    if($dob == ""){
        echo "Date of Birth must be given";
    }
    else{
        echo "Date of Birth: ". $dob;
    }
}
?>