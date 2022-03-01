<?php 

namespace Api\Controller;

include('BaseController.php');
include('FileUploadController.php');
include('../Entity/AccountEntity.php');


final class AccountCreateController extends BaseController
{
	
	private $data = [];

	function __construct()
	{
		$this->data['title'] = "Create of Account";
		$this->viewSubFolder = 'account';
	}

	public function index(){
		$this->viewFile = 'create_form';
		echo $this->view($this->data);
	}

	public function create($request){

		$file = new FileUploadController('image',$request[1]);
		$fileName = $file->upload();

		$account = new AccountEntity();
		$this->data['name'] = $request[0]['name'];
		$this->data['image'] = $fileName;

		return $account->insert($this->data);
	}
	
}

$request = array();

if($_POST && $_FILES)
	array_push($request,$_POST,$_FILES);

 
  // print_r($request);
  //  exit();

$obj = new AccountCreateController();

if(count($request) > 0){
 	
 	echo $obj->create($request);
}else{
	$obj->index();
}
 
?>