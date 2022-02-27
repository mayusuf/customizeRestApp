<?php 

namespace Api\Controller;


include('../entity/AccountEntity.php');


final class AccountCreateController
{
	
	private $data = [];

	public function create($request){

		$account = new AccountEntity();
		return $account->insert($request);
	}
	
}
 $request = $_POST;
 if(count($request) > 0){
 	$obj = new AccountCreateController();
 	echo $obj->create($request);
}
 
?>