<?php
require("db.php");

$idemp = $_GET["idemp"];

$sql = "DELETE FROM bat WHERE id = $idemp";

$result = mysqli_query($connect,$sql);

if($result){
    header("locaiton:index.php");
    exit(0);
}else{
     echo mysqli_error($connect);
}


?>