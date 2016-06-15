<?php 

require_once('connection.php'); 

class User{

	public $iId;
	public $sUserName; 
	public $sPassword; 
	public $sFirstName; 
	public $sLastName;
	public $sAddress;
	public $sTelephone; 
	public $sEmail; 
	public $sAdmin; 

	public function __construct(){
		$this->iId = 0;
		$this->sUserName = ''; 
		$this->sPassword = ''; 
		$this->sFirstName = ''; 
		$this->sLastName = '';
		$this->sAddress = '';
		$this->sTelephone = ''; 
		$this->sEmail = ''; 
		$this->sAdmin = '';
	}

	public function save(){

		//make connection

		$oConnection = new Connection(); 

		//generate insert query 

		$sSQL = "INSERT INTO users (username, password, first_name, last_name, address, telephone, email, admin) VALUES ('".$this->sUserName."', '".$this->sPassword."', '".$this->sFirstName."', '".$this->sLastName."', '".$this->sAddress."', '".$this->sTelephone."', '".$this->sEmail."', '".$this->sAdmin."')";

		//echo $sSQL;

		// execute query 

		$oConnection->query($sSQL); 

		//check for successful connection 

		//get id from db 

		$this->iId = $oConnection->getInsertId(); 


	}
}

// $oUser = new User();
// $oUser->sUserName = 'Hi';
// $oUser->sPassword = 'Hi';
// $oUser->sFirstName = 'Hi';
// $oUser->sLastName = 'Hi';
// $oUser->sAddress = 'Hi';
// $oUser->sTelephone = 'Hi';
// $oUser->sEmail = 'Hi';
// $oUser->sAdmin = 'no';
// $oUser->save();

// echo '<pre>';
// print_r($oUser);
// echo '</pre>';

 ?>