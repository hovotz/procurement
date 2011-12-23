<?php
/* ItemsRequest Test cases generated on: 2011-12-21 08:41:06 : 1324453266*/
App::import('Model', 'ItemsRequest');

class ItemsRequestTestCase extends CakeTestCase {
	var $fixtures = array('app.items_request', 'app.request', 'app.item', 'app.item_category', 'app.unit');

	function startTest() {
		$this->ItemsRequest =& ClassRegistry::init('ItemsRequest');
	}

	function endTest() {
		unset($this->ItemsRequest);
		ClassRegistry::flush();
	}

}
?>