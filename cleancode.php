<?php

function orderPizza($pizzaType, $client) {

    $address = getAddress($client);
    $price = calculateCosts($pizzaType);

    echo 'Creating new order... <br>A '.$pizzaType.' pizza should be sent to ' . $client . '. <br>The address: '.$address.'<br>The bill is €'.$price.'.<br> Order finished.<br><br>';
}

function getAddress($client) {
    $address = 'unknown';
    if($client == 'koen'){
        $address = 'a yacht in Antwerp';
    } else if ($client == 'manuele'){
        $address = 'somewhere in Belgium';
    } else if ($client == 'students') {
        $address = 'BeCode office';
    }
    return $address;
}

function calculateCosts($pizzaType) {
    $cost = 0;

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else if ($pizzaType == 'golden') {
        $cost = 100;
    } else if ($pizzaType == 'calzone') {
        $cost = 10;
    } else if ($pizzaType == 'hawai') {
        throw new Exception('Computer says no');
    }

    return $cost;
}

function makeAllHappy($do_it) {
    if ($do_it) {
        orderPizza('calzone', 'koen');
        orderPizza('marguerita', 'manuele');
        orderPizza('golden', 'students');
    } 
}

makeAllHappy(true);