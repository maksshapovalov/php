<?php

include_once('config.php');
include('libs/ReadFile.php');
$filePath = dirname(__file__) .'/'. FILE_CONFIG;

$file = new ReadFile();
$stringNum = '10'; //номер строки
$charNum = '5'; //номер символа
$strReplace = 'This is a new string'; //новая строка
$chrReplace = '!'; //новый символ
if (($message = $file->setFile($filePath)) === true)
{
	$message = $file->setStringNum($stringNum);
	$message = $file->setCharNum($charNum);
	$text = $file->getFile();
	$str = $file->getByString();
	$char = $file->getByChar();
	$file->setByString($strReplace);
	$new_str = $file->getByString();
	$file->setByChar($chrReplace);
	$new_char = $file->getByChar();
	$new_text = $file->getFile();
	
	$file->saveChenges();
}
include_once('templates/index.php');


?>
