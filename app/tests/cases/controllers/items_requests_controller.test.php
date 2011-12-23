<?php
/* ItemsRequests Test cases generated on: 2011-12-21 08:45:09 : 1324453509*/
App::import('Controller', 'ItemsRequests');

class TestItemsRequestsController extends ItemsRequestsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ItemsRequestsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.items_request', 'app.request', 'app.user', 'app.group', 'app.department', 'app.item', 'app.item_category', 'app.unit');

	function startTest() {
		$this->ItemsRequests =& new TestItemsRequestsController();
		$this->ItemsRequests->constructClasses();
	}

	function endTest() {
		unset($this->ItemsRequests);
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