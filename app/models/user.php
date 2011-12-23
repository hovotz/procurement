<?php
class User extends AppModel {
	var $name = 'User';
	var $actsAs = array('Acl' => array('type'=>'requester'));
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Department' => array(
			'className' => 'Department',
			'foreignKey' => 'department_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Request' => array(
			'className' => 'Request',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	function parentNode() {
		if(!$this->id && empty($this->data)) {
			return null;
		}
		if(isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		}
		else {
			$groupId = $this->field('group_id');
		}
		
		if(!$groupId) {
			return null;
		}
		else {
			return array('Group' => array('id'=>$groupId));
		}
	}

}
