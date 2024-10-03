<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ENDEVINA EL NOMBRE: </p>
    <?php

        if(!isset($_POST["endevina"]) && isset($_SESSION["endevina"])){
            $_SESSION["endevina"] = null;
        }

        if(isset($_POST["endevina"])){
            $_SESSION["endevina"] = $_POST["endevina"];
        }

        if(!isset($_SESSION["endevina"])) {
            echo "<form action='' method='POST'>";
                echo "<label for='endevinar'></label>";
                echo "<input type='number' id='endevinar' name='endevina'>";
                echo "<input type='submit' value='SUBMIT'>";
            echo "</form>";
        } else {

            if($_SESSION["ocult"] === $_SESSION["endevina"]){
                echo "<p>CONGRATULATIONS!</p>";
                echo "<a href='ex41pagina1.php'>ENDEVINAR NÚMERO</a>";
                session_destroy();
            } else {
                
                if($_SESSION["ocult"] > $_SESSION["endevina"]){
                    echo "<p>Es mayor</p>";
                } else {
                    echo "<p>Es menor</p>";
                }

                echo "<form action='' method='POST'>";
                    echo "<label for='endevinar'></label>";
                    echo "<input type='number' id='endevinar' name='endevina'>";
                    echo "<input type='submit' value='SUBMIT'>";
                echo "</form>";

            }
        }
       
    ?>

</body>
</html>