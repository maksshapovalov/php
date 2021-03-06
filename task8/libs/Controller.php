<?php

class Controller
{
		private $model;
		private $view;

		public function __construct()
		{		
		    $this->model = new Model();
			$this->view = new View();
				
			if(isset($_POST['search']))
			{	
				if ($this->model->checkForm($_POST['search']))
				{
					$this->model->getSearchResult($_POST['search']);					
				}
				$this->view->render('result.php', 'index.php', $this->model->getData());
			}
			else
			{
				$this->pageDefault();	
			}
				
	    }	
		
		
		private function pageDefault()
		{   
			$this->view->render('result.php', 'index.php', $this->model->getData());
		}

		
		
		
}
