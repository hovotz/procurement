<?php
class Item extends AppModel {
	var $name = 'Item';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ItemCategory' => array(
			'className' => 'ItemCategory',
			'foreignKey' => 'item_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Request' => array(
			'className' => 'Request',
			'joinTable' => 'items_requests',
			'foreignKey' => 'item_id',
			'associationForeignKey' => 'request_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>