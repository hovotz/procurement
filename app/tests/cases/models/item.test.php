<?php
/* Item Test cases generated on: 2011-12-21 08:37:47 : 1324453067*/
App::import('Model', 'Item');

class ItemTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.item_category', 'app.unit', 'app.request', 'app.items_request');

	function startTest() {
		$this->Item =& ClassRegistry::init('Item');
	}

	function endTest() {
		unset($this->Item);
		ClassRegistry::flush();
	}

}
?>