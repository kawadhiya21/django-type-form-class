test.php contains following code
<?php

include_once('form_class.php');

$form = new formclass('testing.php');
$input_details['class'] = "play";
$input_details['placeholder'] = "kingmaker";
$input_details['text_before'] = "Name : ";
$input_details['text_after'] = " *compulsary ";
$form->add_input('name' , 'password' , '' /*for default values*/);

$radio_details['1'] = 'Male';
$radio_details['2'] = 'Female';
$form->add_checkbox( 'gender' , $radio_details);

$dis = $form->make_form();
echo $dis;
?>

The output is this , a full html form with proper markup. It is almost same as done in the django framework.

<form name = 'form_class_form' method = 'POST' action='testing.php'>
	<input type="password" name="name" value="" ></br>
	
	<input type='checkbox' name= 'gender' value='1'>Male</input></br> 
	<input type='checkbox' name= 'gender' value='2'>Female</input></br> </br>
</form>


Comments and improvements are invited. Keep on looking for better features ahead. :)