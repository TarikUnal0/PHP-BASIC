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
function zetTweeWoordenAanElkaar(){
    $woordje = "Hallo";
    $zinnetje = "mooie blauwe planeet";
    $heleZin = $woordje . " " . $zinnetje ;
    echo $heleZin;

}


zetTweeWoordenAanElkaar();
?>
</ul>
</body>
</html>