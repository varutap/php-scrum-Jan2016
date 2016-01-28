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
    
    $temp = $_GET["number"];
    if(is_numeric($temp)) {
//        $cart = array();
//
//        while($temp > 1) {
//            $temp = $temp / 2;
//            $cart[] = 2;
//            
//        }
        
        $cart = primefactor($temp);
        $cart = array_reverse($cart);

        $json = array("number"=>$_GET["number"],"decomposition"=>$cart);
    } else {
       $json = array("number"=>$_GET["number"],"error"=>"not a number");
    }
    header('Content-type: application/json');
    echo json_encode($json);