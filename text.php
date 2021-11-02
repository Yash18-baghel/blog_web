<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    if(isset($_FILES["myfile"])){
        echo "asdfjl";
    }

?>

<body>
    <form action="text.php" id="form" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <br>
        <input name="m" type="submit">
    </form>
</body>

</html>