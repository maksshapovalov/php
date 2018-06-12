<?php
class Controller
{
		private $model;
		private $view;
		private $field;

		public function __construct()
		{		
		    $this->model = new Model();
			$this->view = new View(TEMPLATE);	
			$this->field = array('Чебурашка', 'Крокодил Гена', 'Шапокляк', 'Крыса Лариса');
			
			$this->pageDefault();	
			$this->view->templateRender();	
			
	    }	
		
		private function pageDefault()
		{   
			$movies = array(
						array("Title", "Director", "Year"),
						array("Rear Window", "Alfred Hitchcock", 1954),
						array("Full Metal Jacket", "Stanley Kubrick", 1987),
						array("Mean Streets", "Martin Scorsese", 1973)
						);
			$this->model->setField('%MULTIPLE%', HtmlHelper::getMultiple('hero', $this->field));
			$this->model->setField('%RADIOBUTTONS%', HtmlHelper::getRadio('hero', $this->field));
			$this->model->setField('%CHECKBOXES%', HtmlHelper::getCheckBox('hero', $this->field));
			$this->model->setField('%TABLE%', HtmlHelper::getTable($movies));
			
			$mArray = $this->model->getArray();		
			$this->view->addToReplace($mArray);	
		}

		
		
		
}
