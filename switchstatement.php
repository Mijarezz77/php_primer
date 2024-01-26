<?php 
$title = "Switchstatement";
include 'includes/header.php';
 ?>
    <h1>Switch Statements</h1>
     <?php
     $grade = "C";

     switch($grade){
        case "A":
           echo "<h2 style= 'color: green'>ERES UNA SUPER ESTRELLA</h2>";




           break;
           case "B":
            echo "<h2 style='color: blue'>LO HICISTE BIEN</h2>";
            break;
            default:
            echo "<h2 style='color: red'>HAS FALLADO...</h2>";
     }
     ?>
