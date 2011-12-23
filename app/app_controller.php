<?php

class AppController extends Controller
{
	var $helpers = array('Form', 'Html', 'Session');
	var $components = array(
			'Acl',
			'Auth' => array(
				'authorize' => 'controller',
				'actionPath' => 'controllers/',
				'loginRedirect' => array('controller'=>'requests', 'action'=>'add'),
				'logoutRedirect' => array('controller'=>'users', 'action'=>'login')
			),
			'Session',
			'RequestHandler'
	);
	
	function beforeFilter() {
		$this->Auth->allowedActions = array('display');
	}
}