<?php
/* Item Fixture generated on: 2011-12-21 08:37:47 : 1324453067 */
class ItemFixture extends CakeTestFixture {
	var $name = 'Item';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'item_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'unit_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'item_category_id' => 1,
			'unit_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'price' => 1
		),
	);
}
?>