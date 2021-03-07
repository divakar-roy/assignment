<?php


namespace Drupal\service_demo;

use Drupal\Core\Session\AccountProxy;

class StringMatchService {

 	public $str = "hema";
 	public $currentUser;

 	public function __construct(AccountProxy $currentUser){

 		$this->currentUser = $currentUser;
 	}


 	public function getCurrentUser(){

 		drupal_set_message($this->currentUser->getDisplayName());
 	}

 	public function matchIt(){

 		if ($this->str==="Divakar"){

 			echo "String $str is Matching!!";

 		} else{

 			echo "String $str isn't matching";
 		}
 	}
}

