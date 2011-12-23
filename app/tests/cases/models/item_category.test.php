<?php
/* ItemCategory Test cases generated on: 2011-12-21 08:36:24 : 1324452984*/
App::import('Model', 'ItemCategory');

class ItemCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.item_category', 'app.item');

	function startTest() {
		$this->ItemCategory =& ClassRegistry::init('ItemCategory');
	}

	function endTest() {
		unset($this->ItemCategory);
		ClassRegistry::flush();
	}

}
?>