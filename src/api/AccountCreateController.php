<?php 

namespace Api\Controller;

include('FileUploadController.php');
include('../entity/AccountEntity.php');


final class AccountCreateController 
{
	
	private $data = [];

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

 array_push($request,$_POST,$_FILES);

 
  // print_r($request);
  //  exit();

 if(count($request) > 0){
 	$obj = new AccountCreateController();
 	echo $obj->create($request);
}
 
?>