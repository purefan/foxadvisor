<?php

defined('PHPFOX') or exit('NO DICE!');

class Blog_Component_Block_Demouser extends Phpfox_Component 
{
	public function process()
	{
        $this->template()->assign(array('sUser' => $this->getParam('sName')));
        return 'block';
    }
}
?>
