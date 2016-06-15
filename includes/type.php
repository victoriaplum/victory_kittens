<?php 

require_once('connection.php');
require_once('pet.php');

class Type{

	public $iId;
	public $sTypeName;
	public $sTypeDescription;

	public function __construct(){
		$this->iId = 0;
		$this->sTypeName = '';
		$this->sTypeDescription = '';

	}

	public function load($iId){
		//make connection 

		$oConnection = new Connection();

		//create query 

		$sSQL = 'SELECT id, type_name, type_description 
		FROM types 
		WHERE id='.$iId;

		//execute query 

		$oResultSet = $oConnection->query($sSQL);

		//fetch data from result set

		$aRow = $oConnection->fetch($oResultSet);

		$this->iId = $aRow['id'];
		$this->sTypeName =  $aRow['type_name'];
		$this->sTypeDescription =  $aRow['type_description'];

		//close connection 

		//when type is loaded is will load related pets 

		$sSQL = 'SELECT id 
				FROM pets
				WHERE type_id ='.$iId;

		//echo $sSQL 

		$oResultSet = $oConnection->query($sSQL); 

		//fetch pet id's from result set 
		while($aRow=$oConnection->fetch($oResultSet)){
			$iPetId = $aRow['id'];

			$oPet = new Pet();
			$oPet->load($iPetId); 
			$this->aPets[] = $oPet;
		}


	}


}

// $oType = new Type();
// $oType->load(5);

// echo '<pre>';
// print_r($oType);
// echo '</pre>';


 ?>