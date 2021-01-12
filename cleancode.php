<?php

//fw = client
//orderPizza = orderPizza
//pizzatype = pizzaType
//p = price
//calc_cts = calculateCosts
//p_type = pizzaType


function orderPizza($pizzaType, $client) {

    //$type = $pizzaType;
    //echo 'Creating new order... <br>';
    //$toPrint = 'A ';
    //$toPrint .= $pizzatype;
    $address = getAddress($client);
    $price = calculateCosts($pizzaType);

    echo 'Creating new order... <br>A '.$pizzaType.' pizza should be sent to ' . $client . '. <br>The address: '.$address.'<br>The bill is €'.$price.'.<br> Order finished.<br><br>';
    //echo $toPrint; echo '<br>';
    //echo $toPrint.'The bill is €'.$price.'.<br> Order finished.<br><br>';
    //echo "Order finished.<br><br>";
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

/* function total_price($price) {
    return $price;
} */

/* function test($pizzaType) {
    echo "Test: type is {$pizzaType}. <br>";
} */

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
    } //else {
        // Should not do anything when false
    //}
}

make_Allhappy(true);