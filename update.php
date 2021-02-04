<?php
require("db.php");

$id = $_POST["id"];
$fn = $_POST["fn"];
$ln = $_POST["ln"];
$gd = $_POST["gd"];
$sk=implode(",",$_POST["skill"]);

$sql = "UPDATE bat SET fn = '$fn', ln = '$ln', gd='$gd' skill = '$sk' WHERE id =$id";

$result = mysql_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error($connect);
}
?>