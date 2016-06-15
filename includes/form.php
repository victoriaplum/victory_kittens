<?php 

class Form{

	public $sHTML;
	public $aData; 

	public function __construct(){
		$this->sHTML = ''; 
		$this->aData = []; 

	}

	//form building methods 

	public function open(){
		$this->sHTML .= '<form action="" method="post" class="pure-form pure-form-stacked">'; 
	}

	public function close(){
		$this->sHTML .='</form>'; 
	}

	public function makeTextInput($sLabel, $sInputName){
		$sData = ''; 

		$this->sHTML .= ' <label for="'.$sInputName.'">'.$sLabel.'</label>
                        <input id="'.$sInputName.'"  name="'.$sInputName.'" type="text" placeholder="'.$sLabel.'">';


	}

	public function makeSubmit($sLabel, $sInputName){

		$this->sHTML .= ' <button type="submit" name="'.$sInputName.'" class="btn">'.$sLabel.'</button>';
	}


}

 ?>