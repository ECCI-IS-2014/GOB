<?php
class DataTypesController extends AppController {

	var $name = 'DataTypes';

	function index() {
		$this->DataType->recursive = 0;
		$this->set('dataTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid data type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dataType', $this->DataType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DataType->create();
			if ($this->DataType->save($this->data)) {
				$this->Session->setFlash(__('The data type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid data type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DataType->save($this->data)) {
				$this->Session->setFlash(__('The data type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DataType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for data type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DataType->delete($id)) {
			$this->Session->setFlash(__('Data type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Data type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
