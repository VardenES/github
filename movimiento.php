<?php

$x = 6;
$y = 5;

$ubicacion = array("posX"=>$x,"posY"=>$y);

echo $ubicacion["posX"];

// move East
function move_e(&$ubicacion) {
	$ubicacion["posX"]++;		
}
// move West
function move_w(&$ubicacion){
	$ubicacion["posX"]--;
}
// move North
function move_n(&$ubicacion){
	$ubicacion["posY"]--;
}
// move South
function move_s(&$ubicacion){
	$ubicacion["posY"]++;
}
// move South West
function move_sw(&$ubicacion){
	$ubicacion["posX"]--;
	$ubicacion["posY"]++;
}
// move South East
function move_se(&$ubicacion){
	$ubicacion["posX"]++;
	$ubicacion["posY"]++;
}
// move North West
function move_nw(&$ubicacion){
	$ubicacion["posX"]--;
	$ubicacion["posY"]--;
}
// move North East
function move_ne(&$ubicacion){
	$ubicacion["posX"]++;
	$ubicacion["posY"]--;
}


var_dump($ubicacion);

move_e($ubicacion);

var_dump($ubicacion);


?>