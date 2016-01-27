<?php
    $temp = $_GET["number"];
    $cart = array();

    while($temp > 1) {
        $temp = $temp / 2;
        $cart[] = 2;
        
    }

    $json = array("number"=>$_GET["number"],"decomposition"=>$cart);
    header('Content-type: application/json');
    echo json_encode($json);