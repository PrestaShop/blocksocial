<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_1_5($object)
{
	Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'configuration` SET name = \'BLOCKSOCIAL_INSTAGRAM\' WHERE name = \'blocksocial_instagram\'');
	return true;
}