<?php 

class View{

	//no attributes 

	static public function renderNav($aTypes){
		$sHTML = '<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-home"></i><br>Home <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="index_.php">Home</a></li>
								
							</ul>
						</li>'; 

		for($i=0; $i<count($aTypes); $i++){
			
			$oType = $aTypes[$i];
			

			$sHTML.= '<li>
						<a href="main.php?typeid='.$oType->iId.'"><i class="fa fa-paw"></i><br>'.$oType->sTypeName.'</a>
					  </li>';
		}

			
						
					
		$sHTML.= '<li>
					<a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
				</li>
                <li>
                    <a href="sign.php"><i class="fa fa-comments"></i><br>Sign in/Sign up</a>
                </li>
                  <li>
                    <a href="login.php"><i class="fa fa-comments"></i><br>User Login</a>
                </li>
				</ul>';
		return $sHTML;

	}

	static public function renderType($oType){
		$sHTML = '


			 <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-paw"></i>
                        <h1>'.$oType->sTypeName.' /</h1>
                        <p>'.$oType->sTypeDescription.'</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	        
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">';
	        $aPets = $oType->aPets;
	        for($i=0;$i<count($aPets);$i++){

	        	$oPet = $aPets[$i];

	        	$sHTML .= '<div class="portfolio-box web-design">
                	<div class="portfolio-box-container">
	                	<img src="assets/Victoryimages/'.$oPet->sPhoto.'" alt="" data-at2x="assets/Victoryimages/'.$oPet->sPhoto.'">
	                	<div class="portfolio-box-text">
	                		<h3>'.$oPet->sName.'</h3>
	                		<p>'.$oPet->sDescription.'</p>
	                		<p> Breed: '.$oPet->sBreed.'</p>
	                		<p> Gender: '.$oPet->sGender.'</p>
	                		<p> Age: '.$oPet->sAge.'</p>
	                		</br>
	                		<button type="submit" class = "btn">Adopt me </button>

	                	</div>
	                </div>
                </div>';

	        }
                


		                
	    $sHTML .= '</div>
	            </div>
	        </div>
        </div>';
		

		return $sHTML;


	}
}

 ?>