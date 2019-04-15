
<?php
    
    if(isset($_POST['submit'])) {
        if (count($_FILES['avatar']['name']) > 0) {
            //Loop through each file
            for ($i = 0; $i < count($_FILES['avatar']['name']); $i++) {
                //Get the temp file path
                $taille_maxi = 1000000;
                $extensions = array('.png', '.gif', '.jpg', '.jpeg');
                $tmpFilePath = $_FILES['avatar']['tmp_name'][$i];
                $taille = filesize($_FILES['avatar']['tmp_name'][$i]);
                $extension = strrchr($_FILES['avatar']['name'][$i], '.');
                if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                {
                    echo 'le fichier '. $_FILES['avatar']['name'][$i]. 'n\'est pas un fichier de type png, gif, jpg ou jpeg'. '<br>';
                }
                if ($taille > $taille_maxi || !($taille) ){
                    echo 'le fichier '. $_FILES['avatar']['name'][$i].' est trop gros'. '<br>';
                }
                //Make sure we have a filepath
                if ($tmpFilePath != "") {
                
                    //save the filename
                    $shortname = 'image'.uniqid().$extension;
                
                    //save the url and the file
                    $filePath = "upload/".$shortname;
                
                    //Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $filePath)) {
                    
                        $files[] = $shortname;
                        echo 'le fichier '. $_FILES['avatar']['name'][$i].' a bien été uploaded'. '<br>';
                        //insert into db
                        //use $shortname for the filename
                        //use $filePath for the relative url to the file
                        
                        
                        }
                    
                    }
                }
            }
        }
    
    
        //show success message

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
        <label for="avatar">Fichier</label>
        <input type="file" name="avatar[]" multiple="multiple" />
        <input type="submit" name="submit" value="submit">
    </form>
<a href="vignets.php">Voir les vignettes</a>
</body>
</html>