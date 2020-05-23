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
$test1 = 12;
$test2 = "Gewoon tekst";

var_dump($test1 == $test2);
echo "<br>";
var_dump($test1 === $test2);
echo "<br>";
var_dump($test1 != $test2);
echo "<br>";
var_dump($test1 > $test2);
echo "<br>";
var_dump($test1 < $test2);
echo "<br>";
var_dump($test1 <> $test2);
echo "<br>";
var_dump($test1 >= $test2);
echo "<br>";
var_dump($test1 <= $test2);



?>
</ul>
</body>
</html>