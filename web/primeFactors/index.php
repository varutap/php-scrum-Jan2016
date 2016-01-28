<?php
    
    function primefactor($num) {
        $sqrt = sqrt($num);
        for ($i = 2; $i <= $sqrt; $i++) {
            if ($num % $i == 0) {
                return array_merge(primefactor($num/$i), array($i));
            }
        }
        return array($num);
    }
    $numbea = $_SERVER['number'];
    $numbeas = array_keys($numbea);
    header('Content-type: application/json');

    foreach($numbeas as $temp) {
    if(is_numeric($temp)) {
//        $cart = array();
//
//        while($temp > 1) {
//            $temp = $temp / 2;
//            $cart[] = 2;
//            
//        }
        
        if($temp > 1000000) {
            $json = array("number"=>$_GET["number"],"error"=>"too big number (>1e6)");
        } else {
        
            $cart = primefactor($temp);
            $cart = array_reverse($cart);

            $json = array("number"=>$_GET["number"],"decomposition"=>$cart);
        }
    } else {

       $json = array("number"=>$_GET["number"],"error"=>"not a number");
    }
    echo json_encode($json);
    }