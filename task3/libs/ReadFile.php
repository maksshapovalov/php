<?php
class ReadFile
{
	private $file;
	private $fileSize;
	private $stringNum;
	private $charNum;
	
	function __construct ()
	{
		$this->file = array();
	}
	
	public function setFile ($fileDir)
	{
		if (is_readable ($fileDir))
		{
			if (!$this->file = file($fileDir)) return FAIL_ERROR_CONFIG;
			$this->fileSize = count ($this->file);
			return true;
		}
		else return FAIL_ERROR_CONFIG;
	}
	
	public function getFile()
	{
		return $this->file;
	}
	
	public function getByString($stringNum)
	{
		if ($this->stringNumValid($stringNum))	return $this->file[$this->stringNum - 1];
		else return STRING_ERROR_CONFIG;
	}

	private function stringNumValid($stringNum)
	{
		$this->stringName = (int)$stringNume;
		
		if ($this->stringNum != 0 && $this->stringNum <= $this->fileSize) return true;
		else return false;
	}
	
	public function getByChar($stringNum, $charNum)
	{
 		$charNum = (int)$charNum;
		if (($charNum != 0) && ($cahrNum <= count($this->getByString($stringNum))))
			return $this->getByString($this->stringNum)[$charNum];
		else return STRING_ERROR_CONFIG;
	}

	public function fileByString()
	{
		//array_map(
	}

	private function returnData($data)
	{
		return $data;
	}
	
	
}
?>
