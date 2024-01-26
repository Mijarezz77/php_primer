<?php 
$title = "Index";
include 'includes/header.php';
 ?>
<!-- Basic HTML -->
    <h1>Hello HTML - PHP primer </h1>
     <br/>
    <?php
    // printint to HTML using echo
    echo "Hola";
    echo "<br/>";
    echo "Segunda linea";
    echo "<br/>";
    ?>

    <?php 
    $name = "FC.RATLAS";
    $age = 19;
    //echo variable
    echo $name;
    echo "<h1>Mi nombre es: ".$name." </h1>";
    echo "<h1>Mi edad es: ".$age." </h1>";
    //Echo using double quotes and interpolation
    echo"<h1>My Name is: $name</h1>";
    ?>

    <button type="button" class="btn btn-dark"> CLICK ME! </button>
    

