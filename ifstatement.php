<?php 
$title = "ifstatement";
include 'includes/header.php'
?>
    <h3 style="color: red"></h3>
    <?php 
    //Solo veremos declarasiones con el if:
        echo "<h2>If Statement</h2>";

        $calificacion = 30;
        // === , ==   , > , < , <= , >=
        if($calificacion >= 50){
            echo '<h3 style="color: green"> SI ACREDITASTE</h3>';
        }
        else{
            echo "<h3 style='color: red'> NO ACREDITASTE</h3>";
        }
        $grado = "A";
        //If Else IF-Else
        if($grado == "A"){
            echo "<h2 style='color: green'>ERES UNA SUPER ESTRELLA</h2>";
        }
            elseif($grado == "B"){
                echo "<h2 style='color: blue'>LO HICISTE BIEN</h2>";
            }
            else{
                echo "<h2 style='color: red'>FALLASTE...</h2>";
            }
        
    ?>

