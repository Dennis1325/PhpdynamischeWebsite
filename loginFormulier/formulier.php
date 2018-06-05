<?php
if ($_POST){
    $userName = $_POST["naam"];
    $mail = $_POST["email"];
    $password = $_POST["wachtwoord"];

//    if ($mail == "piet@worldonline.nl" && $password == "doetje123" || $mail == "klaas@carpets.nl" && $password == "snoepje777" || $mail == "truushendriks@wegweg.nl" && $password == "arkiearkie201"){
//        echo "Welkom";
//    }else {
//        echo "Sorry, geen toegang!";
//    }

    if (inloggen($userName, $mail, $password)){
        echo "Welkom";
    }
    else{
        echo "Sorry, geen toegang!";
    }
}

function inloggen($naam, $mail, $password){
    if ($naam == "piet" && $mail == "piet@worldonline.nl" && $password == "doetje123" ||$naam == "klaas" && $mail == "klaas@carpets.nl" && $password == "snoepje777" || $naam == "truus" && "truushendriks@wegweg.nl" && $password == "arkiearkie201"){
        return true;
    }
    else{
        return false;
    }

}

?>