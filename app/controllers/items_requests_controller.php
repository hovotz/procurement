<?php
class ItemsRequestsController extends AppController {

	var $name = 'ItemsRequests';

	function index() {
		$this->ItemsRequest->recursive = 0;
		$this->set('itemsRequests', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid items request', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('itemsRequest', $this->ItemsRequest->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ItemsRequest->create();
			if ($this->ItemsRequest->save($this->data)) {
				$this->Session->setFlash(__('The items request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items request could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid items request', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ItemsRequest->save($this->data)) {
				$this->Session->setFlash(__('The items request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items request could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ItemsRequest->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for items request', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ItemsRequest->delete($id)) {
			$this->Session->setFlash(__('Items request deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Items request was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ItemsRequest->recursive = 0;
		$this->set('itemsRequests', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid items request', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('itemsRequest', $this->ItemsRequest->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ItemsRequest->create();
			if ($this->ItemsRequest->save($this->data)) {
				$this->Session->setFlash(__('The items request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items request could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid items request', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ItemsRequest->save($this->data)) {
				$this->Session->setFlash(__('The items request has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The items request could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ItemsRequest->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for items request', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ItemsRequest->delete($id)) {
			$this->Session->setFlash(__('Items request deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Items request was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>