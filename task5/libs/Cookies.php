<?php 
class Cookies implements iWorkData
{
	public function saveData($key, $val)
	{
		setcookie($key, $val, time()+1000);
		$_COOKIE[$key] = $val;
	}
	public function getData($key)
	{
		if (isset($_COOKIE[$key]))
		{
			return $_COOKIE[$key];
		}
		else
		{
			return COOKIE_KEY_ERROR_CONFIG;
		}
	}
	public function deleteData($key)
	{
		setcookie($key, '', time()+1000);
		unset($_COOKIE[$key]);
	}
}
?>