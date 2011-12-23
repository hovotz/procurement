<?php
/* Unit Test cases generated on: 2011-12-21 08:41:55 : 1324453315*/
App::import('Model', 'Unit');

class UnitTestCase extends CakeTestCase {
	var $fixtures = array('app.unit', 'app.item', 'app.item_category', 'app.request', 'app.user', 'app.items_request');

	function startTest() {
		$this->Unit =& ClassRegistry::init('Unit');
	}

	function endTest() {
		unset($this->Unit);
		ClassRegistry::flush();
	}

}
?>