<?php 

namespace Api\Controller;


include('../entity/AccountEntity.php');


final class AccountUpdateController
{
	
	private $data = [];

	public function create($request){

		$account = new AccountEntity();
		return $account->update($request);
	}
	
}
 $request = $_POST;
 if(count($request) > 0){
 	$obj = new AccountUpdateController();
 	$obj->update($request);
}
 
?>