<?php

include_once('config.php');
include('libs/Calc.php');

$a = 16;
$b = 4;

$calc = new Calc();
$message = $calc->setVariables($a, $b);

$add = $calc->add();
$sub = $calc->substract();
$mult = $calc->multiply();
$div = $calc->divide();
$percent = $calc->percent();
$square = $calc->square($b);
$sqrt = $calc->getSqrt($a);
$calc->memAdd();
$memAdd = $calc->memRead();
$calc->memSub();
$memSub = $calc->memRead();
$mem = $calc->memClear();

include_once('templates/index.php');

?>
