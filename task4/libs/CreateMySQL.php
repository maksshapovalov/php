<?php
include ('libs/CreatePDO.php');
class CreateMySQL extends CreatePDO
{
	function __construct() 
	{
		$this->setDsn(MYSQL_DSN_CONFIG);
		$this->setUser(USER_CONFIG);
		$this->setPassword(PASSWORD_CONFIG);
		$this->connect();
    }
}
?>