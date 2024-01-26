
    <?php
    $phrase1 = "Students who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "fcratlas";
    echo $phrase1 . ', named Tiffany, ' . $phrase2;
    echo"<br/>";
    echo"<hr/>";
    //string tansformation
    echo "uppercase first latter: "     . ucfirst($name)."<br/>";
    echo "uppercase first latter of each word: "     . ucwords($name)."<br/>";
    echo 'Upper case: '. strtoupper($name).'<br/>';
    echo 'Lower case: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo"<hr/>";
    echo "Repeast String: " .str_repeat('a',10). '<br/>';
    echo "Repeast String - Nested Funtion: " . strtoupper(str_repeat('a',10)). '<br/>';
    echo "Get a Substring: " . substr($name, 3, 5)."<br/>";

    echo "Get position of string: " .strpos($name,"W")."<br/>";
    //Returns  NULL
    //echo 'Get position of string: ' . strpos($combine,'z').'<br/>'
    echo 'Find Character "R": '. strchr($name, 'R') . '<br/>';
    echo 'Find Character "r": '. strchr($name, 'r') . '<br/>';
    echo 'Find Character "s": '. strchr($name, 's') . '<br/>';
    echo 'Find Character "e": '. strchr($name, 'e') . '<br/>';

    echo "Find  Length of string: " .strlen($name) ."<br/>";

    echo 'Without Trim: ' . "A" . "B C D" . "E" . '<br/>';
    echo 'Trim  spaces  on both sides:' . "A" . trim("B C D") . "E" . '<br/>';
    echo 'Trim  spaces  to the left:' . "A" . ltrim("B C D") . "E" . '<br/>';
    echo 'Trim  spaces  yo the right:' . "A" . rtrim("B C D") . "E" . '<br/>';

    echo 'Replace string with another: ' . str_replace("stand", "sit",$phrase2) .'<br/>';
    
    ?>
