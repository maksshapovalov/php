<?php
include_once('config.php');
include('libs/iWorkData.php');
include ('libs/Cookies.php');
include ('libs/Session.php');
include ('libs/VarMySQL.php');

$cookie = new Cookies();
$session = new Session();
$varMySQL = new VarMySQL();

$session->start();
$session->saveData('name','Maksim');
$getSessionName = $session->getData('name');
$session->deleteData('name');

$cookie->saveData('name','Maksim');
$getCookieName = $cookie->getData('name');

$cookie->deleteData('name');

if ($message = $session->getData('error_message'))
{
	$session->deleteData('error_message');
}
include_once('templates/index.php');

?>