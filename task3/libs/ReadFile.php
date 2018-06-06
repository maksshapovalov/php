<?php
class ReadFile
{
	private $file;
	private $fileSize;
	
	function __construct ()
	{
		$this->file = array();
	}
	
	public function setFile ($fileDir)
	{
		if (is_readable ($fileDir))
		{
			$this->file = file($fileDir);
			$this->fileSize = count ($this->file);
			return true;
		}
		else return FAIL_ERROR_CONFIG;
	}
	
	public function getFile()
	{
		return $this->file;
	}
	
	public function getByString($num)
	{
		$this->getInt($num);
		if ($num != 0 && $num <= $this->fileSize){
			return $this->file[$num-1];
		}
		else return STRING_ERROR_CONFIG;
	}
	
	private function getInt($str)
	{
		return (int)$str;
	}

	
	
}
?>
