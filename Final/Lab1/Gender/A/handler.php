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