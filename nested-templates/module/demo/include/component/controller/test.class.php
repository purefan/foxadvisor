<?php

defined('PHPFOX') or exit('NO DICE!');

class Blog_Component_Controller_Test extends Phpfox_Component 
{
	public function process()
	{
        $aUserNames = array('John', 'Paul', 'George', 'Ringo'); 
        $this->template()->assign(array(
            'aUserNames' => $aUserNames
        ));
    }
}
?>
