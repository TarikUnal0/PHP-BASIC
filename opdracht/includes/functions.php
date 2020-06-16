<?php


function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!' ;
    echo $aantalProd;
    
}


function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}


function korting(){
$leeftijd = $_GET['leeftijd'];
switch($leeftijd){
    case 19:
        echo "19 cent"; 
    break;
    case 18:
        echo "18 cent";
    break;
    case 17:
        echo "17 cent";
    break;
    case 16:
        echo "16 cent";
    break;
    case 15:
        echo "1 euro";
    break;
    case 14:
        echo "1 euro";
    break;
    case 13:
        echo "1 euro";
    break;
    case 12:
        echo "1 euro";
    break;
    case 11:
        echo "1 euro";
    break;
    case 10:
        echo "1 euro";
    break;
    case 9:
        echo "1 euro";
    break;
    case 8:
        echo "1 euro";
    break;
    case 7:
        echo "1 euro";
    break;
    case 6:
        echo "1 euro";
    break;
    case 5:
        echo "1 euro";
    break;
    case 4:
        echo "1 euro";
    break;
    case 3:
        echo "1 euro";
    break;
    case 2:
        echo "1 euro";
    break;
    case 1:
        echo "1 euro";
    break;
};
}

function prijs(){
    $productnummer = $_GET['productnummer'];
    $aantalProd = $_GET['aantal'];
    switch($productnummer){
        case 1:
            echo "0.30";
        break;
        case 0:
            echo "0.25";
        break;
        
    };
echo  $productnummer * $aantalProd ;
}
?>