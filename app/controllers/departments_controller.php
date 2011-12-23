<?php
class DepartmentsController extends AppController {

	var $name = 'Departments';

	function index() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('department', $this->Department->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Department->create();
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Department->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for department', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Department->delete($id)) {
			$this->Session->setFlash(__('Department deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Department was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('department', $this->Department->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Department->create();
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid department', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(__('The department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The department could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Department->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for department', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Department->delete($id)) {
			$this->Session->setFlash(__('Department deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Department was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>