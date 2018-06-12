<?php
class Controller
{
		private $model;
		private $view;

		public function __construct()
		{		
		    $this->model = new Model();
			$this->view = new View(TEMPLATE);	
			
			$this->pageDefault();	
			$this->view->templateRender();	
			
	    }	
		
		private function pageDefault()
		{   
			$heroes = array('Чебурашка', 'Крокодил Гена', 'Шапокляк', 'Крыса Лариса');
			$movies = array(
						array("Title", "Director", "Year"),
						array("Rear Window", "Alfred Hitchcock", 1954),
						array("Full Metal Jacket", "Stanley Kubrick", 1987),
						array("Mean Streets", "Martin Scorsese", 1973)
						);
			$moviesList = array(
						"Title",
						array("Rear Window", "Full Metal Jacket", "Mean Streets"),
						"Director",
						array("Alfred Hitchcock", "Stanley Kubrick", "Martin Scorsese"),
						"Year",
						array(1954, 1987, 1973)
						);
			$descriptionList = [
							'Coffee' => 'Black hot drink',
							'Milk' => 'White cold drink'
							];
			$this->model->setField('%MULTIPLE%', HtmlHelper::getMultiple('hero', $heroes));
			$this->model->setField('%RADIOBUTTONS%', HtmlHelper::getRadio('hero', $heroes));
			$this->model->setField('%CHECKBOXES%', HtmlHelper::getCheckBox('hero', $heroes));
			$this->model->setField('%TABLE%', HtmlHelper::getTable($movies));
			$this->model->setField('%UL%', HtmlHelper::getList('ul', $moviesList));
			$this->model->setField('%OL%', HtmlHelper::getList('ol', $heroes));
			$this->model->setField('%DLDTDD%', HtmlHelper::getDescriptionList($descriptionList));
			
			$mArray = $this->model->getArray();		
			$this->view->addToReplace($mArray);	
		}

		
		
		
}
