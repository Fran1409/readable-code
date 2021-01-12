<?php

//fw = client
//orderPizza = orderPizza
//pizzatype = pizzaType
//p = price
//calc_cts = calculateCosts
//p_type = pizzaType


function orderPizza($pizzaType, $client) {

    //$type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calculateCosts($pizzaType);

    $address = 'unknown';
    if($client == 'koen'){
        $address = 'a yacht in Antwerp';
    } else if ($client == 'manuele'){
        $address = 'somewhere in Belgium';
    } else if ($client == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

/* function total_price($price) {
    return $price;
} */

function test($pizzaType) {
    echo "Test: type is {$pizzaType}. <br>";
}

function calculateCosts($pizzaType) {
    $cost = 'unknown';

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

/* function ordr_piz_all() {
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
} */

function make_Allhappy($do_it) {
    if ($do_it) {
        orderPizza('calzone', 'koen');
        orderPizza('marguerita', 'manuele');
        orderPizza('golden', 'students');
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);