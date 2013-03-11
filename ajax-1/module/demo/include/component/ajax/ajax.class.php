<?php

defined('PHPFOX') or exit('NO DICE!');

class Demo_Component_Ajax_Ajax extends Phpfox_Ajax
{		
	/* This is the function called from ajax1.js
	 * In ajax functions we get params using $this->get('variable')
	 * We can output JS code using $this->call(...)
	 * Some JQuery functions are ready, like $this->hide()*/
	public function ajax1()
	{
		// Get the variable sent by the JS function
		$sVar1 = $this->get('var1');
		
		// Call a JS function passing a JSON string
		$aOut = array('json-1' => 'value1', 'json-2' => 'value2');
		$this->call('handleJson(\'' . json_encode($aOut) . '\');');
	}
}

?>