<?php
/**
 * Created by PhpStorm.
 * User: kernelkill
 * Date: 06/10/19
 * Time: 16:07
 */
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <h1>Fazendo upload de arquivo</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="MAX_FILE_SIZE" value="200000">
        <input type="file" name="arquivo">
        <input type="submit" value="Enviar Arquivo">

    </form>

</body>
</html>
