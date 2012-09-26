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
$form->add_dropdown( 'gender_check' , $radio_details);
$dis = $form->make_form();
echo $dis;
?>

The output is this , a full html form with proper markup. It is almost same as done in the django framework.

		
<f orm name = 'form_class_form' method = 'POST' action='testing.php'>
	Name : <i nput type="password" name="name" value="password" placeholder="kingmaker" class="play" > *compulsary </br>
	
	<i nput type='checkbox' name= 'gender' value='1'>Male</i nput></br> 
	<i nput type='checkbox' name= 'gender' value='2'>Female</i nput></br> </br>
	
	<s elect name='gender_check'>
	<o ption value='1'>Male</o ption>
	<o ption value='2'>Female</ option></s elect></br>
</f orm>
Comments and improvements are invited. Keep on looking for better features ahead. :)
