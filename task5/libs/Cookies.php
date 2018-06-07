<?php 
class Cookies implements iWorkData
{
	public function saveData($key, $val)
	{
		setcookie($key, $val, time()+1000);
	}
	public function getData($key)
	{
		return $_COOKIE[$key];
	}
	public function deleteData($key)
	{
		setcookie($key);
	}
}
?>