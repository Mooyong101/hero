<?php
require('db.php');

$sql = "SELECT * FROM bat"; 
$result = mysqli_query($connect,$sql);
$row=mysqli_num_rows($result);
$count=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <?php if($row>0){?>
        <div class="container">
        <table class="table table-whirte">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>name</td>
                    <td>last</td>
                    <td>Gender</td>
                    <td>skill</td>
                </tr>
            </thead>

            <tbody>
            <?php while($order = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $count++?></td>
                    <td><?php echo $order["fn"];?></td>
                    <td><?php echo $order["ln"];?></td>
                    <td><?php if($order["gd"]=="male"){?>
                    M
                    <?php }elseif($order["gd"]=="female"){?>
                    W
                    <?php }else{?>
                    other
                    <?php }?>
                    </td>

                    <td><?php echo $order["skill"];?></td>
                    <td><a href="editform.php?id=<?php echo $order["id"]?>" class="btn btn-primary">edit</a></td>
                    <td><a href="delete.php?idemp=<?php echo $order["id"]?>" class="btn btn-dark">Del</a></td>
                    <form action="multidelete.php" method="post">
                    <td>
                        <input type="checkbox" name="idcheckbox[]" value="<?php echo $order["id"]?>">
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table> 
        
    
    <?php }else{?>
            !!!!!!!!!
    <?php } ?>
    <input type="submit" value="del" class="btn btn-dark">
    </form>
    <button class="btn btn-dark" onclick="checkall()">select</button>
    <button class="btn btn-dark" onclick="uncheckall()">cancel</button>
    </div>
</body>

<script>
function checkall(){
    var form=document.forms[0].length;
    for(i=0;i<form-1;i++){
        document.forms[0].elements[i].checked=true;
    }
}

function uncheckall(){
    var form=document.forms[0].length;
    for(i=0;i<form-1;i++){
        document.forms[0].elements[i].checked=false;
    }
}
</script>
</html>