<?php
/* ItemsRequest Fixture generated on: 2011-12-21 08:41:06 : 1324453266 */
class ItemsRequestFixture extends CakeTestFixture {
	var $name = 'ItemsRequest';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'request_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'request_id' => 1,
			'item_id' => 1,
			'quantity' => 1
		),
	);
}
?>