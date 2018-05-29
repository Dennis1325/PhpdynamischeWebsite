<?php

//print_r($_GET);


$_POST["wachtwoord"];

if ($_POST["voornaam"] == ""){
    echo "je moet nog een voornaam invullen <br>";
}
if ($_POST["adres"] == ""){
    echo "je moet nog een adres invullen <br>";
}
if ($_POST["email"] == ""){
    echo "je moet nog een E-mail invullen <br>";
}
if ($_POST["wachtwoord"] == ""){
    echo "je moet nog een wachtwoord invullen <br>";
    echo ">Terug naar het formulier</a>";
}
else{
    echo "Voornaam: ".$_POST["voornaam"]."<br>" ;
    echo "Adres: ".$_POST["adres"]."<br>";
    echo "E-mail: ".$_POST["email"]."<br>";
}
?>