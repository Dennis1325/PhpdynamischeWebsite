<html>
<head>
    <title>Dierkiezen</title>
</head>
<body>

<form action="../DierKiezen/index.php" method="get">
    Aap <input type="radio" name="aap">
    <br>
    Wolf <input type="radio" name="wolf">
    <br>
    Krokodil <input type="radio" name="krokodil">
    <br>
    Neushoorn <input type="radio" name="neushoorn">
    <br>
    Beer <input type="radio" name="beer">
    <br>
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>

<?php

if ($_GET["aap"] == true){
    echo "<img src='../img/apen/aap1.jpg'>";
}
if ($_GET["wolf"] == true){
    echo "<img src='../img/wolven/Wolf1.jpg'>";
}


?>
<style>
    body{
        text-align: center;
    }
</style>
