<?php
include ('config.php');
include ('libs/Controller.php');
include ('libs/View.php');
include ('libs/Model.php');
include ('libs/HtmlHelper.php');
try
{
  $obj = new Controller();
}
catch(Exception $e)
{
  echo $e->getMessage();
}






