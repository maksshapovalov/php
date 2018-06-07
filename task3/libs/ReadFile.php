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
		$this->stringNum = 1;
		$this->charNum = 1;
	}
	
	public function setFile ($fileDir)
	{
		if (is_readable ($fileDir))
		{
			if (!$this->file = file($fileDir, FILE_SKIP_EMPTY_LINES)) return FAIL_ERROR_CONFIG;
			$this->fileSize = count ($this->file);
			array_walk($this->file, create_function('&$str', '$str = trim($str);'));
			return true;
		}
		else return FAIL_ERROR_CONFIG;
	}
	
	public function setStringNum ($num)
	{
		if (!$this->stringNum = $this->returnNum($num))
		{
			$this->stringNum = 1;
			return NUM_ERROR_CONFIG;
		}
		else 
			return true;
	}
	
	public function setCharNum ($num)
	{
		if (!$this->charNum = $this->returnNum($num))
		{
			$this->charNum = 1;
			return NUM_ERROR_CONFIG;
		}
		else 
			return true;
	}
	
	public function returnNum ($int)
	{
		$intval = intval($int);
		if (strval($intval) != $int || $intval < 1)
			return false;
		return $intval;
	}
	
	public function getFile()
	{
		return $this->file;
	}
	
	public function &getByString()
	{
		if ($this->stringNum <= $this->fileSize) return $this->file[$this->stringNum - 1];
		else return STRING_ERROR_CONFIG;
	}

	public function getByChar()
	{
		$str = $this->getByString();
		if (STRING_ERROR_CONFIG != $str)
		{
			if ($this->charNum <= strlen($str))
				return $str[$this->charNum-1];
			else return CHAR_ERROR_CONFIG;
		}
		else return STRING_ERROR_CONFIG;
	}

	public function setByString($strReplace)
	{
		$str = &$this->getByString();
		$str = strval($strReplace);
		return true;
	}
	
	public function setByChar($chrReplace)
	{
		if ($this->charNum <= strlen($this->getByString()))
		{	
			$str = &$this->getByString();
			$str[$this->charNum-1] = strval($chrReplace);
			return true;
		}
		else return CHAR_ERROR_CONFIG;
	}
	public function saveChenges()
	{
		file_put_contents('new_file.txt', implode("\r", $this->file));
	}
	
	function __destruct()
	{
		file_put_contents('new_file.txt', $this->file);
	}
}
?>
