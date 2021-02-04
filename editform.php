<?php

require("db.php");

$id = $_GET["id"];

$sql = "SELECT * FROM bat WHERE id = $id";

$result = mysqli_query($connect,$sql);

$row = mysqli_fetch_assoc($result);

$gender = ["male"=>"Man","female"=>"woman","other"=>"blank"];
$skill_arr=array("java","php","python","html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="update.php" method="post">
        <div class="form-group">
            <label for="firstname">name</label>
            <input type="text" name="fn" id="" class="form-control" value="<?php echo $row["fn"]?>">
        </div>
        <div class="form-group">
            <label for="lastname">last</label>
            <input type="text" name="fn" id="" class="form-control" value="<?php echo $row["ln"]?>">
        </div>
            <div class="form-group">
                <label for="gender">gender</label>
                    <?php 
                    // echo $row["gd"];
                        $gd = $row["gd"];
                            foreach($gender as $key=>$val){
                                if($key ==$gd){
                                    echo "<input type='radio' name='gender' value='$key' checked>$val";
                                }else{
                                    echo "<input type='radio' name='gender' value='$key'>$val";
                                }
                            }
                    ?>
            </div>
            <div class="form-group">
                    <?php
                        $skill=explode(",",$row["skill"]);
                        foreach($skill_arr as $value){
                            if(in_array($value,$skill)){
                                echo "<input type='checkbox' name='skill[]' value='$value'checked>$value";
                            }else{
                                echo "<input type='checkbox' name='skill[]' value='$value'>$value";
                            }
                        }
                    ?>
            </div>
    </div>
        <input type="submit" value="save" class="btn btn-dark">
        </form>
        
</body>
</html>