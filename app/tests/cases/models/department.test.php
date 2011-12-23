<?php
/* Department Test cases generated on: 2011-12-21 08:33:20 : 1324452800*/
App::import('Model', 'Department');

class DepartmentTestCase extends CakeTestCase {
	var $fixtures = array('app.department', 'app.user');

	function startTest() {
		$this->Department =& ClassRegistry::init('Department');
	}

	function endTest() {
		unset($this->Department);
		ClassRegistry::flush();
	}

}
?>