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
