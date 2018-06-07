<?php 
class Session implements iWorkData
{
	public function saveData($key, $val)
	{
		$_SESSION[$key] = $val;
	}
	public function getData($key)
	{
		if (isset($_SESSION[$key]))
		{
			return $_SESSION[$key];
		}
		else
		{
			if ('error_message' != $key)
			{
				$this->saveData('error_message', SESSION_KEY_ERROR_CONFIG);
			}
			return false;
		}
	}
	public function deleteData($key)
	{
		if (isset($_SESSION[$key]))
		{
			unset($_SESSION[$key]);
			return true;
		}
		else
		{
			$this->saveData('error_message', SESSION_KEY_ERROR_CONFIG);
			return false;
		}
	}
	
	public function start()
	{
		if (session_start())
		{
			return true;
		}
		else
		{
			$this->saveData('error_message', SESSION_ERROR_CONFIG);
			return false;
		}
		
	}
}
?>