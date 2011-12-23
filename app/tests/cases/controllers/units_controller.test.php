<?php
/* Units Test cases generated on: 2011-12-21 08:45:47 : 1324453547*/
App::import('Controller', 'Units');

class TestUnitsController extends UnitsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UnitsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.unit', 'app.item', 'app.item_category', 'app.request', 'app.user', 'app.group', 'app.department', 'app.items_request');

	function startTest() {
		$this->Units =& new TestUnitsController();
		$this->Units->constructClasses();
	}

	function endTest() {
		unset($this->Units);
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