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
    $xx = $_SERVER['QUERY_STRING'];
    $qs = preg_replace("/(?<=^|&)(\w+)(?==)/", "$1[]", $_SERVER["QUERY_STRING"]);
    parse_str($qs, $new_GET);
    $jsons = array();
    echo "hello";
    for($j = 0; $j < count($new_GET['number']); $j++) {
        $temp = $new_GET['number'][$j];
        if(is_numeric($temp)) {
    //        $cart = array();
    //
    //        while($temp > 1) {
    //            $temp = $temp / 2;
    //            $cart[] = 2;
    //            
    //        }
            
            if($temp > 1000000) {
                $json = array("number"=>$temp,"error"=>"too big number (>1e6)");
            } else {
            
                $cart = primefactor($temp);
                $cart = array_reverse($cart);

                $json = array("number"=>$temp,"decomposition"=>$cart);
            }
        } else {
           $json = array("number"=>$temp,"error"=>"not a number");
        }
        $jsons[] = $json;
    }

    header('Content-Type: application/json');
    if(count($jsons) > 1) {
        echo json_encode($jsons);
    } else {
        echo json_encode($json);
    }
