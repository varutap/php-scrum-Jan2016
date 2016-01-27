<?php

    $json = array("alive" => "true");
    header('Content-type: application/json');
    echo json_encode($json);
?>