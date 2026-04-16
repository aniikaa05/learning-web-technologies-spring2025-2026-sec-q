<?php
$dob="";
if(isset($_POST["dob"])){
    $dob= $_POST["$dob"];
}
?>
<html>
    <body>
        <from method="post">
           
            <fieldset>
            <legend>Date of Birth</legend>
            <input type ="date" name="Date of Birth" value="<?php echo $dob; ?>"><br>
            <input type="submit">
</fieldset>
</form>
<?php
if($dob != ""){
    echo "Date of Birth: " . $dob;
}
?>
</body>
</html>
