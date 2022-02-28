<?php 

namespace Api\Controller;

// use Api\Controller\BaseController;
include('BaseController.php');
include('../entity/AccountEntity.php');

final class AccountController extends BaseController
{
	
	private $data = [];

	function __construct()
	{
		$this->data['title'] = "List of Account";
		$this->viewSubFolder = 'account';
	}

	public function index(){

		$this->viewFile = 'index';
		echo $this->view($this->data);
	}
	
	public function getList(){

		$account = new AccountEntity();
		echo json_encode($account->findAll());
		exit();
	}
}

$obj = new AccountController();

if(!empty(@$_GET['action'])){
	$action = $_GET['action'];
	$obj->$action();
}
else{
	$obj->index();
}



?>