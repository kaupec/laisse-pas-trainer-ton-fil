<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-15
     * Time: 10:32
     */
    $filename =$_GET['filename'];
    if (file_exists('upload/'.$filename)){
        unlink('upload/'.$filename);}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
<a href='vignets.php'>back</a>
<a href="upload.php">upload</a>
</body>

