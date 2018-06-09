<?php 

class Model
{
	private $templateArray;
	
	public function __construct()
	{
		$this->templateArray = array();
	}
	

	public function getArray()
	{	    
		return $this->templateArray;
		//return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field');	
	}
	
	public function setField ($key, $val)
	{
		$this->templateArray[$key] = $val;
	}
	
	public function checkForm()
	{
		return true;			
	}
   
	public function sendEmail()
	{
		// return mail()
	}		
}
