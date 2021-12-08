<?php

require __DIR__.'/vendor/autoload.php';


use EditString\HammingEditDistance;
use EditString\LevenshteinEditDistance;

$calObj = $_POST['type'] == 1 ? new LevenshteinEditDistance() : new HammingEditDistance() ;

if ($_POST['type']) {
    echo $calObj->calculate(
        $_POST['source'],
        $_POST['target'],
        strlen($_POST['source']),
        strlen($_POST['target']) 
    ); 
}else{
    echo $calObj->calculate(
        $_POST['source'],
        $_POST['target'],
    ); 
}

