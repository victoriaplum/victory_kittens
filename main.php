<!-- this replaced puppies.php and kittens.php -->

<?php 
require_once('includes/type.php');
require_once('includes/header.php');

$iCurrentTypeId = 5;


if(isset($_GET['typeid'])==true){
	$iCurrentTypeId = $_GET['typeid'];
}
$oType = new Type();
$oType->load($iCurrentTypeId);

echo View::renderType($oType);



require_once('includes/footer.php');

 ?>