<?php
class RequestsController extends AppController {

	var $name = 'Requests';

	function index() {
		$this->Request->recursive = 0;
		$this->set('requests', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid request', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('request', $this->Request->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Request->create();
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('The request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The request could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Request->User->find('list');
		$items = $this->Request->Item->find('list');
		$this->set(compact('users', 'items'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid request', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('The request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The request could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Request->read(null, $id);
		}
		$users = $this->Request->User->find('list');
		$items = $this->Request->Item->find('list');
		$this->set(compact('users', 'items'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for request', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Request->delete($id)) {
			$this->Session->setFlash(__('Request deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Request was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Request->recursive = 0;
		$this->set('requests', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid request', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('request', $this->Request->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Request->create();
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('The request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The request could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Request->User->find('list');
		$items = $this->Request->Item->find('list');
		$this->set(compact('users', 'items'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid request', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Request->save($this->data)) {
				$this->Session->setFlash(__('The request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The request could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Request->read(null, $id);
		}
		$users = $this->Request->User->find('list');
		$items = $this->Request->Item->find('list');
		$this->set(compact('users', 'items'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for request', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Request->delete($id)) {
			$this->Session->setFlash(__('Request deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Request was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>