<?php
/* Items Test cases generated on: 2011-12-21 08:44:48 : 1324453488*/
App::import('Controller', 'Items');

class TestItemsController extends ItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.item_category', 'app.unit', 'app.request', 'app.user', 'app.group', 'app.department', 'app.items_request');

	function startTest() {
		$this->Items =& new TestItemsController();
		$this->Items->constructClasses();
	}

	function endTest() {
		unset($this->Items);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>