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
				if ($this->model->checkForm())
				{
					$html = $this->model->getSearchResult($_POST['search']);					
				}
				$this->view->render('result.php', 'index.php', $html);
			}
			else
			{
				if(isset($_POST['html']))
				{
					file_put_contents('google_v2.txt', $_POST['html']);
				}
				else
				{
					$this->pageDefault();	
				}
			}
				
	    }	
		
		
		private function pageDefault()
		{   
			$this->view->render('result.php', 'index.php', $this->model->getData());
		}

		
		
		
}
