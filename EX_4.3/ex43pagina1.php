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
    
        if (!isset($_SESSION['letters'])) {
            $_SESSION['letters'] = '';
        }

        if (isset($_GET['letter']) && isset( $_SESSION['letters']) ) {
            $_SESSION['letters'] .= $_GET['letter'];
            echo "<p>".$_SESSION['letters']."</p>";
        }

        $letras = range('A', 'Z');

        echo '<div style="margin-top: 10px;">';
        foreach ($letras as $letra) {
            echo '<a href="?letter='.$letra.'" style="margin-right: 10px;">'.$letra.'</a>';
        }
        echo '</div>';

    ?>


</body>
</html>