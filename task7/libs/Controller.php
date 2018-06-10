<?php

class Controller
{
		private $model;
		private $view;

		public function __construct()
		{		
		    $this->model = new Model();
			$this->view = new View(TEMPLATE);	
				
			if(isset($_POST['email']))
			{	
				$this->pageSendMail();
			}
			else
			{
				$this->pageDefault();	
			}
			
			$this->view->templateRender();			
	    }	
		
		private function pageSendMail()
		{
			$this->model->setField('%MAILERROR%', '');
			if($this->model->checkForm() === true)
			{
				if (!$this->model->sendEmail())
				{
					$this->model->setField('%MAILERROR%', 'Mail failed');
				}
				else
				{
					$this->model->setField('%MAILERROR%', 'Mail sent succesful');
				}
			}
			var_dump($_POST);
			$mArray = $this->model->getArray();		
	        $this->view->addToReplace($mArray);	
		}	
		
		private function pageDefault()
		{   
			$this->model->setField('%TITLE%', 'Contact Form');
			$this->model->setField('%NAME_ERROR%', '');	
			$this->model->setField('%EMAIL_ERROR%', '');	
			$this->model->setField('%SUBJECT_ERROR%', '');	
			$this->model->setField('%MESSAGE_ERROR%', '');	
			$this->model->setField('%MAILERROR%', '');
			$mArray = $this->model->getArray();		
			$this->view->addToReplace($mArray);	
		}

		
		
		
}
