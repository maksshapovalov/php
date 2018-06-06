<?php

include_once('config.php');
include('function.php');
$direction = dirname(__file__) . DIR_CONFIG;

if ($_SERVER['REQUEST_METHOD'] == "POST" ) 
{
	$message = upload_file('download_file',$direction);
}
if ($_GET['delete']!='')
{
	$message = delete_file($direction, $_GET['delete']);
}

$files = get_files($direction);
include_once('templates/index.php');

?>
