<?php
$source = $_FILES['profile']['tmp_name'];
$dest = "./" .basename($_FILES['profile']['name']);
move_uploaded_file($source, $dest);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>upload php</title>
    </head>
    <body>
        <p><h3><a href="index.html">Go To Index</a></h3></p>
        <img src="<?=$_FILES['profile']['name']?>" alt=""/>
    </body>
</html>