<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>NOMBRE ENREGISTRAT</p>
    <?php
        if(isset($_POST["ocult"]));
        $_SESSION["ocult"] = $_POST["ocult"];
    ?>
    <a href="ex41pagina3.php">ENDEVINAR NÚMERO</a>

</body>
</html>

