<?php
/* ItemCategories Test cases generated on: 2011-12-21 08:44:32 : 1324453472*/
App::import('Controller', 'ItemCategories');

class TestItemCategoriesController extends ItemCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ItemCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.item_category', 'app.item', 'app.unit', 'app.request', 'app.user', 'app.group', 'app.department', 'app.items_request');

	function startTest() {
		$this->ItemCategories =& new TestItemCategoriesController();
		$this->ItemCategories->constructClasses();
	}

	function endTest() {
		unset($this->ItemCategories);
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