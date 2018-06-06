<?php

include_once('config.php');
include('libs/ReadFile.php');
$filePath = dirname(__file__) .'/'. FILE_CONFIG;

$file = new ReadFile();
$message = $file->setFile($filePath);
echo $file->getByString('12');
include_once('templates/index.php');


?>
