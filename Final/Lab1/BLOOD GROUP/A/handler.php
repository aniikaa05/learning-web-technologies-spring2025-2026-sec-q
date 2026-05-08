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