<?php

class Application_Model_DbTable_Rss extends Zend_Db_Table_Abstract
{

    protected $_name = 'links';

	function addUrl ($input) {
		$row = $this->createRow();
		$row->url = $input;
		return $row->save();
	}	
}

