<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        if (!isset($_SESSION['texto'])) {
            $_SESSION['texto'] = '';
        }

        if(isset($_POST["texto"])) {
            $_SESSION['texto'] .= $_POST["texto"]."<br><br>";
        }

    ?>
    
    <form action="" method="POST">
        <textarea name="texto"></textarea>
        <input type="submit" value="SUBMIT">
    </form>
    
    <?php

        if(isset($_SESSION['texto']))
        echo "<p>".$_SESSION['texto']."</p>";

    ?>

</body>
</html>