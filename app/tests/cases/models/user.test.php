<?php
/* User Test cases generated on: 2011-12-21 08:42:19 : 1324453339*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.department', 'app.request', 'app.item', 'app.item_category', 'app.unit', 'app.items_request');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>