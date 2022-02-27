<?php 

namespace Api\Controller;

// use Api\Controller\BaseController;
include('BaseController.php');

final class AccountController extends BaseController
{
	
	private $data = [];

	function __construct()
	{
		$this->data['title'] = "Create Account";
		$this->viewSubFolder = 'account';
	}

	public function index(){
		$this->viewFile = 'index';
		echo $this->view($this->data);
	}
	
}


 $obj = new AccountController();
 $obj->index();

?>