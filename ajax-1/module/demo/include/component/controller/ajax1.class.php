<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

class Demo_Component_Controller_Ajax1 extends Phpfox_Component
{
	public function process()
	{		
		$this->template()->setHeader(array(
			'ajax1.js' => 'module_demo'
		));
	}
	
}

?>