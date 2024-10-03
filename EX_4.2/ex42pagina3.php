<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>COINCIDÈNCIES</p>
    <a href="ex42pagina1.php">Tornar a pàgina 1</a>

    <?php 
        $frase1_separada = explode(" ", $_SESSION["frase1"]);
        $frase2_separada = explode(" ", $_POST["frase2"]);

        $coincidencias = 0;

        foreach ($frase1_separada as $palabra_frase1) {

            foreach ($frase2_separada as $palabra_frase2) {


                if($palabra_frase1 == $palabra_frase2) {
                    $coincidencias += 1;
                    echo "<p>la paraula $palabra_frase1 està a les dues frases.</p>";
                }
            }
        }

        if($coincidencias === 0){
            echo "<p>No hi ha cap coincidència.</p>";
        }
    ?>

</body>
</html>