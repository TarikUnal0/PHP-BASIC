<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<ul>

<?php 
    $var1 = 7;
    $var2 = 25;
    if($var1 < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 5!";
    }
    echo "<br>";
    if($var1 < 15 || $var1 > 8) {
        echo "Het getal is kleiner dan 15 maar niet groter dan 8!";
    } else {
        echo "Het getal is niet kleiner dan 15 en ook niet groter dan 8!";
    }
    echo "<br>";
    if($var1 < 5 xor $var2 > 20) {
        echo "Éen van de variabellen is waar!";
    } else {
        echo "Geen van de variabelen zijn waar, of ze zijn allebei waar!";
    }
    echo "<br>";
    if(!$var1 < 5 ) {
        echo "Geen van de variabelen zijn waar!";
    } else {
        echo "Één of beide variabelen zijn waar!";
    }
    
?>


</ul>
</body>
</html>