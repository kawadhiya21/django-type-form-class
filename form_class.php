<?php

class formclass {

	var $final_form = array();
	var $action;
	var $method;
	var $form_name;
	var $final_form_keys = array();
	
	function formclass( $action , $method = 'POST' , $form_name = 'form_class_form' ) {
		$this->action = $action;
		$this->method = $method;
		$this->form_name = $form_name;
		$this->final_form['start'] = "<form name = '".$form_name."' method = '".$method."' action='".$action."'>";
		$this->final_form_keys[] = 'start';
		}
      
	function add_input($input_name , $input_type , $value = '' , $add_option = '') {
		$this->final_form_keys[] = $input_name;
		$temp= "<input type=\"".$input_type."\" name=\"".$input_name."\" value=\"".$value."\" ";				
		if(isset($add_option['placeholder']))
			{
			$temp = $temp."placeholder=\"".$add_option['placeholder']."\" ";
			}
		if(isset($add_option['style']))
                        {
                        $temp = $temp."style=\"".$add_option['style']."\" ";
                        }
		if(isset($add_option['class']))
                        {
                        $temp = $temp."class=\"".$add_option['class']."\" ";
                        }
		$temp = $temp.">";
		if(!isset($add_option['text_before']))
			{
			$add_option['text_before'] = '';
			}
		if(!isset($add_option['text_after']))
                        {
                        $add_option['text_after'] = '';
                        }

		$temp = "\n\t".$add_option['text_before'].$temp.$add_option['text_after']."</br>";
		$this->final_form[$input_name] = $temp;
		}
	
        function add_radio($radio_name , $value , $add_option = '') {
			$this->final_form_keys[] = $radio_name;
			$temp = '';
			foreach($value as $val => $element)
				{
				$temp=$temp."\n\t<input type='radio' name= '".$radio_name."' value='".$val."'>".$element."</input></br> ";
				}
			if(!isset($add_option['text_before']))
                	        {
                        	$add_option['text_before'] = '';
                        	}
	                if(!isset($add_option['text_after']))
                        	{
	                        $add_option['text_after'] = '';
        	                }
        
                	$temp = "\n\t".$add_option['text_before'].$temp.$add_option['text_after'];
			$this->final_form[$radio_name] = $temp;
		}
	
	 function add_checkbox($checkbox_name , $value , $add_option = '') {
                        $this->final_form_keys[] = $checkbox_name;
                        $temp = '';
                        foreach($value as $val => $element)
                                {
                                $temp=$temp."\n\t<input type='checkbox' name= '".$checkbox_name."' value='".$val."'>".$element."</input></br> ";
                                }
                        if(!isset($add_option['text_before']))
                                {
                                $add_option['text_before'] = '';
                                }
                        if(!isset($add_option['text_after']))
                                {
                                $add_option['text_after'] = '';
                                }

                        $temp = "\n\t".$add_option['text_before'].$temp.$add_option['text_after']."</br>";
                        $this->final_form[$checkbox_name] = $temp;
                }

	 function add_dropdown($dropdown_name , $value , $add_option = '') {
                        $this->final_form_keys[] = $dropdown_name;
                        $temp = '';
			$temp = "\n\t<select name='".$dropdown_name."'>";
                        foreach($value as $val => $element)
                                {
                                $temp = $temp."\n\t<option value='".$val."'>".$element."</option>";
                                }
			if(!isset($add_option['text_before']))
                                {
                                $add_option['text_before'] = '';
                                }
                        if(!isset($add_option['text_after']))
                                {
                                $add_option['text_after'] = '';
                                }
			$temp = $temp."</select>";
                        $temp = "\n\t".$add_option['text_before'].$temp.$add_option['text_after']."</br>";

		
			$this->final_form[$dropdown_name] = $temp;
		}
						
	function make_form() {
		$final_form_made = "";
		foreach($this->final_form as $form_line)	
			{
			$final_form_made = $final_form_made.$form_line;	
			}
		$final_form_made = $final_form_made."\n</form>";
		return $final_form_made;
		//var_dump($this->final_form);
		}
	
}
?>		
