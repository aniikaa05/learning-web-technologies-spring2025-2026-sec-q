<?php
if(isset($_POST['submit'])){
    if(!isset($_POST['degree'])){
        echo "Must select a degree";
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