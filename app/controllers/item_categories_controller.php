<?php
class ItemCategoriesController extends AppController {

	var $name = 'ItemCategories';

	function index() {
		$this->ItemCategory->recursive = 0;
		$this->set('itemCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid item category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('itemCategory', $this->ItemCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ItemCategory->create();
			if ($this->ItemCategory->save($this->data)) {
				$this->Session->setFlash(__('The item category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid item category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ItemCategory->save($this->data)) {
				$this->Session->setFlash(__('The item category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ItemCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for item category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ItemCategory->delete($id)) {
			$this->Session->setFlash(__('Item category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Item category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ItemCategory->recursive = 0;
		$this->set('itemCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid item category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('itemCategory', $this->ItemCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ItemCategory->create();
			if ($this->ItemCategory->save($this->data)) {
				$this->Session->setFlash(__('The item category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid item category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ItemCategory->save($this->data)) {
				$this->Session->setFlash(__('The item category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ItemCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for item category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ItemCategory->delete($id)) {
			$this->Session->setFlash(__('Item category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Item category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>