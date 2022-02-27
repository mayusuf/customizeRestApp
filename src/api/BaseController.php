<?php  

namespace Api\Controller;

interface ViewInterface{

	
	public function view(array $data);
	
}


abstract class BaseController implements ViewInterface
{
	private  $viewFolderName = '../../views';
	protected  $viewSubFolder = '';
	protected  $viewFile = '';
	private  $viewPath;
	private $viewExtension = '.php';
	private $data;

	// public function __construct()
	// {

	// }

	private function setViewPath()
	{
		$this->viewPath = $this->viewFolderName.DIRECTORY_SEPARATOR.$this->viewSubFolder.DIRECTORY_SEPARATOR.$this->viewFile;
		
	}

	public function view(array $data):string
	{
		$this->data = $data;
		$this->setViewPath();
		return $this->output();
	}

	private function output():string
	{
		
		return $this->includeWithVariables();

		// return file_get_contents($this->viewPath.$this->viewExtension);
	}

	private function includeWithVariables()
	{
	    $output = NULL;

	    if(file_exists($this->viewPath.$this->viewExtension)){

	        extract($this->data);

	        // Start output buffering
	        ob_start();

	        // Include the template file
	        include $this->viewPath.$this->viewExtension;

	        // End buffering and return its contents
	        $output = ob_get_clean();
	    }

	    return $output;
	}
}

?>