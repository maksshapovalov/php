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
		$this->setField('%SUBJECT%',$this->getSubject());
		return $this->templateArray;
	}
	
	public function setField ($key, $val)
	{
		$this->templateArray[$key] = $val;
	}
	
	private function getSubject()
	{
		$subjects = explode('|', SUBJECTS);
		array_walk($subjects, array($this, 'addSelect'));
		return implode("\n",$subjects);
 	}
	
	private function addSelect(&$sub)
	{
		$sub = "<option value=\"$sub\">$sub</option>";
	}
		
	public function checkForm()
	{
		array_map(array($this, 'checkField'), array_keys($_POST));
		if ('Select subject' == $_POST['subject'])
		{
			$this->setField('%SUBJECT_ERROR%', "<div class=\"error\">Select Subject!</div>");
		}
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$this->setField('%EMAIL_ERROR%', "<div class=\"error\">Email isn't correct</div>");
		}
		if ($this->templateArray['%NAME_ERROR%'] != '' 
		|| $this->templateArray['%EMAIL_ERROR%'] != ''
		|| $this->templateArray['%SUBJECT_ERROR%'] != ''
		|| $this->templateArray['%MESSAGE_ERROR%'] != '')
		{
			return false;
		}
		else
		{
			$this->setField('%NAME_VALUE%', '');
			$this->setField('%EMAIL_VALUE%', '');
			$this->setField('%MESSAGE_VALUE%', '');
			return true;
		}
		
	}
	
	public function checkField ($field)
	{
		if ($_POST[$field] != "")
		{
			$this->setField('%'.strtoupper($field).'_ERROR%', "");
			$this->setField('%'.strtoupper($field).'_VALUE%', $_POST[$field]);
		}
		else
		{
			$this->setField('%'.strtoupper($field).'_ERROR%', "<div class=\"error\">$field is empty</div>");
			$this->setField('%'.strtoupper($field).'_VALUE%', '');
		}
	}
	
	public function sendEmail()
	{
		$headers = 'From: '. $_POST['email'] . "\r\n" .
				'Reply-To: '. $_POST['email'] . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

		return mail(ADMIN_MAIL_CONFIG, $_POST['subject'], $_POST['message'], $headers);
	}		
}
