<?php
require("db.php");

$id_arr = $_POST["idcheckbox"];

$multiple_id = implode(",",$id_arr);

$sql = "DELETE FROM bat WHERE id in ($multiple_id)";

$result = mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo mysqli_error();
}
?>