<?php
class CreatePDO
{
	private $dsn;
	private $user;
	private $pass;

	private $tableName;
	private $dbh;
	
	private $fields;
	private $params;
	
	protected function connect()
	{
		$this->dbh = new PDO($this->getDsn(), $this->getUser(), $this->getPassword());	
	}
	
	public function insertDB()
	{
		
	}
	
	public function getDsn()
	{
		return $this->dsn;
	}
	public function setDsn($dsn)
	{
		$this->dsn = $dsn;
	}
	public function getUser()
	{
		return $this->user;
	}
	public function setUser($user)
	{
		$this->user = $user;
	}
	public function getPassword()
	{
		return $this->pass;
	}
	public function setPassword($password)
	{
		$this->pass = $password;
	}
	public function setTableName($tableName)	
	{
		$this->setTable($tableName);
	}
	public function getTableName()
	{
		return $this->tableName;
	}

}

?>