<?php 

require_once('connection.php');

class Pet{

	public $iId;
	public $sName;
	public $sDescription;
	public $sPrice;
	public $sBreed;
	public $sGender;
	public $sAge;
	public $sPhoto;
	public $iTypeId;

	//constructor to initialise data 

	public function __construct(){
		$this->iId = 0;
		$this->sName = ''; 
		$this->sDescription = '';
		$this->sPrice = '';
		$this->sBreed = '';
		$this->sGender = '';
		$this->sAge = '';
		$this->sPhoto = '';
		$this->iTypeId = 0;


	}

	public function load($iId){
		//make connection

		$oConnection = new Connection();

		//create query 

		$sSQL = 'SELECT id, name, description, price, breed, gender, age, photo, type_id 
		FROM pets 
		WHERE id ='.$iId;

		//execute query 
		$oResultSet = $oConnection->query($sSQL);

		//fetch data from result set
		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sName = $aRow['name'];
		$this->sDescription = $aRow['description'];
		$this->sPrice = $aRow['price'];
		$this->sBreed = $aRow['breed'];
		$this->sGender = $aRow['gender'];
		$this->sAge = $aRow['age'];
		$this->sPhoto = $aRow['photo'];
		$this->iTypeId = $aRow['type_id'];

		//close connection 


	}


}

//test

// $oPet = new Pet();
// $oPet->load(13);

// echo '<pre>';
// print_r($oPet);
// echo '</pre>';

 ?>