<?php 
ob_start(); // to patch up redirect;
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

require_once('includes/user.php');
require_once('includes/form.php');
require_once('includes/header.php');

$oForm = new Form();

if(isset($_POST['submit']) == true){

        //create new user object

        $oUser = new User(); 

        //set data

        $oUser->sUserName = $_POST['username'];
        $oUser->sPassword = $_POST['password'];
        $oUser->sFirstName = $_POST['first_name'];
        $oUser->sLastName = $_POST['last_name'];
        $oUser->sAddress = $_POST['address'];
        $oUser->sTelephone = $_POST['telephone'];
        $oUser->sEmail = $_POST['email'];
        $oUser->sAdmin = 'no';

         //$oUser->save();

        $oUser->save(); 

        //redirecting page once form updated 

        //redirect to success.php

        header('Location: success.php');
        }


       

       


$oForm->open();
$oForm->makeTextInput('First Name', 'first_name');
$oForm->makeTextInput('Last Name', 'last_name');
$oForm->makeTextInput('Address', 'address');
$oForm->makeTextInput('Telephone', 'telephone');
$oForm->makeTextInput('Email', 'email');
$oForm->makeTextInput('Username', 'username');
$oForm->makeTextInput('Password', 'password');
$oForm->makeSubmit('Register', 'submit');
$oForm->close();

?>

        <!-- Slider 2 -->
        <div class="signupform">
        <h1>Register</h1>

        <?php echo $oForm->sHTML; ?>
        	<!-- <form class="pure-form pure-form-stacked">
                   

                        <label for="first_name">First Name</label>
                        <input id="first_name"  name="first_name" type="text" placeholder="First Name">

                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" placeholder="Last name">

                        <label for="address">Address</label>
                        <input id="address" type="text" placeholder="Address">

                        <label for="telephone">Telephone</label>
                        <input id="telephone" type="text" placeholder="Telephone">

                        <label for="email">Email</label>
                        <input id="email" type="text" placeholder="Email">

                        <label for="username">Username</label>
                        <input id="username" type="text" placeholder="Username">

                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Password">

                        

                       

                        <button type="submit" class="btn">Sign in</button>
                  
        	</form> -->
            
        </div>

        

        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">

	        </div>
        </div>

<?php 

require_once('includes/footer.php');

 ?>