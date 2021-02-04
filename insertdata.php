<?php
require("db.php");

$fn = $_POST["fname"];
$ln = $_POST["lname"];
$gd = $_POST["gend"];
$sk = implode(",", $_POST["skill"]);
$sql = "INSERT INTO bat(fn,ln,gd,skill) VALUE('$fn','$ln','$gd','$sk')";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error();
}

?>