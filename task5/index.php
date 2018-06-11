<?php
include_once('config.php');
include ('libs/iWorkData.php');
include ('libs/Cookies.php');
include ('libs/Session.php');
include ('libs/VarMySQL.php');


$cookie = new Cookies();
$session = new Session();
$varMySQL = new VarMySQL();


$session->start();
$getSessionNameStart = $session->getData('name');
$session->saveData('name','Maksim');
$getSessionName = $session->getData('name');
$session->deleteData('name');
$getSessionNameEnd = $session->getData('name');
unset($session);

$getCookieNameStart = $cookie->getData('name');
$cookie->saveData('name','Maksim');
$getCookieName = $cookie->getData('name');
$cookie->deleteData('name');
$getCookieNameEnd = $cookie->getData('name');

include_once('templates/index.php');
?>