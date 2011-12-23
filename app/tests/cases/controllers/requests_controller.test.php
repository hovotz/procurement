<?php
/* Requests Test cases generated on: 2011-12-21 08:45:33 : 1324453533*/
App::import('Controller', 'Requests');

class TestRequestsController extends RequestsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RequestsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.request', 'app.user', 'app.group', 'app.department', 'app.item', 'app.item_category', 'app.unit', 'app.items_request');

	function startTest() {
		$this->Requests =& new TestRequestsController();
		$this->Requests->constructClasses();
	}

	function endTest() {
		unset($this->Requests);
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