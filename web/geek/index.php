<?php
$width = $_GET['width'];
$map = strtolower($_GET['map']);

function findRow($map, $width, $type) {
  $location = strpos($map, $type);
  $row = floor($location / $width);
  return $row;
}
function findColumn($map, $width, $type) {
  $location = strpos($map, $type);
  $column = $location % $width;
  return $column;
}

class direction {
  var $dx = 0;
  var $dy = 0;
}

function findDirection($fromRow, $fromCol, $toRow, $toCol) {
   $dY = $toRow - $fromRow; 
   $dX = $toCol - $fromCol;

   $directions = array();
   for ($i = 0; $i < $dY; $i++) {
     $direction = new direction();
     $direction->dx = 0;
     $direction->dy = 1;
     $directions[] = $direction;
   }
   for ($i = 0; $i < $dX; $i++) {
     $direction = new direction();
     $direction->dx = 1;
     $direction->dy = 0;
     $directions[] = $direction;
   }
   return $directions;
}

function getMaps($map, $width) {
  $maps = array();
  //$r = ceil(strlen($map)/$width);
  for ($i = 0; $i < strlen($map); $i+=3) {
     $ss = substr($map, $i, 3);
     $maps[] = $ss;
  } 
  return $maps;
}

class response {
  var $map;
  var $moves;
}
if (strlen($map) == ($width * $width)) {
  

  $p_row = findRow($map, $width, "p");
  $p_column = findColumn($map, $width, "p");
  $w_row = findRow($map, $width, "w");
  $w_column = findColumn($map, $width, "w");
  $f_row = findRow($map, $width, "f");
  $f_column = findColumn($map, $width, "f");

  $move1 = findDirection($p_row, $p_column, $w_row, $w_column);
  $move2 = findDirection($w_row, $w_column, $f_row, $f_column);

  $all_move = array_merge($move1, $move2);
  //print_r($all_move);

  header('Content-type: application/json');

  $maps = getMaps($map, $width);
  $response = new response();
  $response->map = $maps;
  $response->moves = $all_move;

  echo json_encode($response);

}

