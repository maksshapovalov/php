<?php 

class Model
{
	private $templateArray;
	
	public function __construct()
	{
		$this->templateArray = array(
		'%NAME_VALUE%' => '',
		'%EMAIL_VALUE%' => '',
		'%MESSAGE_VALUE%' => '',
		);
	}
	

	public function getArray()
	{	    
		return $this->templateArray;
	}
	
	public function setField ($key, $val)
	{
		$this->templateArray[$key] = $val;
	}
}
