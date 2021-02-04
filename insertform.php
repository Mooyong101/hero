<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <form action="insertdata.php" method="post">
            <div class="form-group">
                <label for="fname">Name</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="lname">Last</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="radio" name="gend" value="male">Man
                <input type="radio" name="gend" value="female">Woman
                <input type="radio" name="gend" value="other">other
            </div>
            <div class="form-group">
                <label for="">Skill</label>
                <input type="checkbox" name="skill[]" value="java">Java
                <input type="checkbox" name="skill[]" value="php">PHP
                <input type="checkbox" name="skill[]" value="python">Python
                <input type="checkbox" name="skill[]" value="html">HTML
            </div>
            <input type="submit" value="save" class="btn btn-whirte">
            <input type="reset" value="reset" class="btn btn-whirte">
            <a href="index.php" class="btn btn-whirte">back</a>
        </form>
        
    </div>
</body>
</html>