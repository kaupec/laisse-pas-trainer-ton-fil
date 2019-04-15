<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-15
     * Time: 10:00
     */
    
$it = new FilesystemIterator('upload/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="row">

<?php
foreach ($it as $fileinfo) {
$filename = $fileinfo->getFilename();
?>
    <div class="mx-auto">
    <a href="delete.php?filename=<?= $filename?>">delete</a>
<img src="upload/<?=$filename?>" alt="..." class="img-thumbnail" style="width: 200px;">
<p><?= $filename ?></p>
    </div>
<?php }?>
</div>
<button type="button" class="btn btn-dark"><a href="upload.php">upload</a></button>

</body>
</html>

