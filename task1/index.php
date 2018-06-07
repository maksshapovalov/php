<?php

include_once('config.php');
include('function.php');
$direction = dirname(__file__) . DIR_CONFIG;

if ($_SERVER['REQUEST_METHOD'] == "POST" ) 
{
	$message = uploadFile('download_file',$direction);
}
if ($_GET['delete']!='')
{
	$message = deleteFile($direction, $_GET['delete']);
}

$files = getFiles($direction);
include_once('templates/index.php');

?>
