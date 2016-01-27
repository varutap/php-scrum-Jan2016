<?php
    $temp = $_GET["number"];
    if(is_numeric($temp)) {
        $cart = array();

        while($temp > 1) {
            $temp = $temp / 2;
            $cart[] = 2;
            
        }

        $json = array("number"=>$_GET["number"],"decomposition"=>$cart);
    } else {
       $json = array("number"=>$_GET["number"],"error"=>"not a number");
    }
    header('Content-type: application/json');
    echo json_encode($json);