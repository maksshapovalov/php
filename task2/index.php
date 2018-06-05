<?php

include_once('config.php');
include('libs/Calc.php');

$a = '16';
$b = 'str';

$calc = new Calc();
$message = $calc->setVariables($a, $b);
#if ($message===true){
	$add = $calc->add();
	$sub = $calc->substract();
	$mult = $calc->multiply();
	$div = $calc->divide();
	$percent = $calc->percent();
	$square = $calc->square($b);
	$sqrt = $calc->getSqrt($a);
	$calc->memAdd($a);
	$memAdd = $calc->memRead();
	$calc->memSub($b);
	$memSub = $calc->memRead();
	$mem = $calc->memClear();
#}
include_once('templates/index.php');

?>
