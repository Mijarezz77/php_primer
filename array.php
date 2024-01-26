<?php 
$title = "arrays and printouts";
include 'includes/header.php';
 ?>
    <h1><?php echo $title ?></h1>
    <?php
    //a variable
    $num = 3;
    
    //an array
    //Only one dataype
    $numbers = array(1,2,3,4,5,5,53,3,7,8,9,10,42,6,53,6);
    //you can access the value in a subscript of the array using the index.
    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);
    echo  "<p>Array Numbers is size: $size</p>";

    for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";
    }
    ?>
    
