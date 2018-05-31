<?php

//print_r($_POST);
//print_r($_POST["dieren"]);

//$gekozenDier = $_POST["dieren"];
//if ($gekozenDier == "aap"){
//    echo "<img src='../img/apen/aap1.jpg' >";
//}
//if ($gekozenDier == "wolf"){
//    echo "<img src='../img/wolven/Wolf1.jpg' >";
//}
//if ($gekozenDier == "krokodil"){
//    echo "<img src='../img/krokodil1.jpg' >";
//}
//if ($gekozenDier == "neushoorn"){
//    echo "<img src='../img/Neushoorn1.jpg' >";
//}
//if ($gekozenDier == "beer"){
//    echo "<img src='../img/Beer1.jpg' >";
//}

foreach ($_POST["dieren"] as $dier){
    echo "<img src='../img/".$dier."1.jpg'>";
}

?>