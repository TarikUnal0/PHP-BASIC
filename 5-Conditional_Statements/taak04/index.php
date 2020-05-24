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
$prod_besteld = 2;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}

echo $prijs;
echo "<br>";
if($prod_besteld < 10) {
    $prijs = 1.25;
} elseif($prod_besteld < 20) {
    $prijs = 1.50;
} else {
    $prijs = 1.00;
}
echo $prijs;
echo "<br>";
if($prod_besteld < 10) {
    $prijs = 1.00;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.50;
}
echo $prijs;

?>
</ul>
</body>
</html>