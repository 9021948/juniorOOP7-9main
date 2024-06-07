<?php
// junior nahayo
    require_once "OOP9.php";
     $music1 = new Music('Bach', 'Klassiek', 3);
    $music2 = new Music('Bach', ['Klassiek', 'Oud'], 3);

    echo $music1->getName();
    echo "<br>";
    echo $music2->getName();
    echo "<br>";

    var_dump($music1);
    echo "<br>";
    var_dump($music2);

?>