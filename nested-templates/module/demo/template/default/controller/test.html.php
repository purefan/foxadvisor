<?php
defined('PHPFOX') or die();
?>
Start
{foreach from=$aUserNames item=sName}
    {module name='blog.demouser' sName=$sName}
{/foreach}
End