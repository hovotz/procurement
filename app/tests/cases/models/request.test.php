<?php
/* Request Test cases generated on: 2011-12-21 08:41:36 : 1324453296*/
App::import('Model', 'Request');

class RequestTestCase extends CakeTestCase {
	var $fixtures = array('app.request', 'app.user', 'app.item', 'app.item_category', 'app.unit', 'app.items_request');

	function startTest() {
		$this->Request =& ClassRegistry::init('Request');
	}

	function endTest() {
		unset($this->Request);
		ClassRegistry::flush();
	}

}
?>