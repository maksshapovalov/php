<?php

include_once('config.php');
include('libs/ReadFile.php');
$filePath = dirname(__file__) .'/'. FILE_CONFIG;

$file = new ReadFile();
$message = $file->setFile($filePath);
$str = $file->getByString(1);
$char = $file->getByChar(10,1);
include_once('templates/index.php');


?>
