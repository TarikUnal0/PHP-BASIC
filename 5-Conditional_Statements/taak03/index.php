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
$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}
else{
    echo "niet gelijk";
}
echo "<br>";
if ($test1 != $test2){
    echo "Het is ongelijk";
}
else{
    echo "het is gelijk";
}
echo "<br>";
if ($test1 === $test2){
    echo "Het is identiek";
}
else{
    echo "het is niet gelijk";
}
echo "<br>";
if ($test1 > $test2){
    echo "test1 is groter dan test2";
}
else{
    echo "test2 is groter dan test1";
}
echo "<br>";

if ($test1 < $test2){
    echo "test1 is kleiner dan test2";
}
else{
echo "test1 is groter dan test2";
}

echo "<br>";
if ($test1 >= $test2){
    echo "test1 is groter of gelijk aan test2";
}
else{
    echo "test1 is niet groter of gelijk aan test2";
}
echo "<br>";
if ($test1 <= $test2){
    echo "test1 is kleiner of gelijk aan test2";
}
else{
    echo "test1 is niet kleiner of gelijk aan test2";
}

?>
</ul>
</body>
</html>