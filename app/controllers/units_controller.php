<?php
class UnitsController extends AppController {

	var $name = 'Units';

	function index() {
		$this->Unit->recursive = 0;
		$this->set('units', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid unit', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('unit', $this->Unit->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Unit->create();
			if ($this->Unit->save($this->data)) {
				$this->Session->setFlash(__('The unit has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid unit', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Unit->save($this->data)) {
				$this->Session->setFlash(__('The unit has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Unit->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for unit', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Unit->delete($id)) {
			$this->Session->setFlash(__('Unit deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Unit was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Unit->recursive = 0;
		$this->set('units', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid unit', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('unit', $this->Unit->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Unit->create();
			if ($this->Unit->save($this->data)) {
				$this->Session->setFlash(__('The unit has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid unit', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Unit->save($this->data)) {
				$this->Session->setFlash(__('The unit has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Unit->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for unit', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Unit->delete($id)) {
			$this->Session->setFlash(__('Unit deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Unit was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>