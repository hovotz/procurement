<?php

class AppController extends Controller
{
	var $helpers = array('Form', 'Html', 'Session');
	var $components = array(
			'Acl',
			'Auth' => array(
				'authorize' => 'controller',
				'loginRedirect' => array('controller'=>'requests', 'action'=>'add'),
				'logoutRedirect' => array('controller'=>'users', 'action'=>'login')
			),
			'Session',
			'RequestHandler'
	);
}