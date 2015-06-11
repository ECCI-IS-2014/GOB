<?php
class ValuesdatatypesController extends AppController {

	var $name = 'Valuesdatatypes';

	function index() {
		$this->Valuesdatatype->recursive = 0;
		$this->set('valuesdatatypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid valuesdatatype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('valuesdatatype', $this->Valuesdatatype->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Valuesdatatype->create();
			if ($this->Valuesdatatype->save($this->data)) {
				$this->Session->setFlash(__('The valuesdatatype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valuesdatatype could not be saved. Please, try again.', true));
			}
		}
		$dataTypes = $this->Valuesdatatype->DataType->find('list');
		$automaticdatalogs = $this->Valuesdatatype->Automaticdatalog->find('list');
		$this->set(compact('dataTypes', 'automaticdatalogs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid valuesdatatype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Valuesdatatype->save($this->data)) {
				$this->Session->setFlash(__('The valuesdatatype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valuesdatatype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Valuesdatatype->read(null, $id);
		}
		$dataTypes = $this->Valuesdatatype->DataType->find('list');
		$automaticdatalogs = $this->Valuesdatatype->Automaticdatalog->find('list');
		$this->set(compact('dataTypes', 'automaticdatalogs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for valuesdatatype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Valuesdatatype->delete($id)) {
			$this->Session->setFlash(__('Valuesdatatype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Valuesdatatype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
