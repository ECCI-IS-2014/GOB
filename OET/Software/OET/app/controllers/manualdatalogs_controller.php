<?php
class ManualdatalogsController extends AppController {

	var $name = 'Manualdatalogs';

	function index() {
		$this->Manualdatalog->recursive = 0;
		$this->set('manualdatalogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid manualdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('manualdatalog', $this->Manualdatalog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Manualdatalog->create();
			if ($this->Manualdatalog->save($this->data)) {
				$this->Session->setFlash(__('The manualdatalog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.', true));
			}
		}

		/*if (!empty($this->data)) {
			$this->Manualdatalog->create();
			$this->Manualdatalog->savefield('data_type_id', $this->data['Manualdatalog']['data_type_id']);
			$this->Manualdatalog->savefield('station_id', $this->data['Manualdatalog']['station_id']);
			$this->Manualdatalog->savefield('sensor_id', $this->data['Manualdatalog']['sensor_id']);
			//$dd = date('Y-m-d H:i:s', mktime($this->data['Manualdatalog']['recolection_date']['hour'], $this->data['Manualdatalog']['recolection_date']['min'], 0, $this->data['Manualdatalog']['recolection_date']['month'], ($this->data['Manualdatalog']['recolection_date']['day']), ($this->data['Manualdatalog']['recolection_date']['year'])));
			//$this->Manualdatalog->savefield('recolection_date', $dd);
			$this->Manualdatalog->savefield('data_', $this->data['Manualdatalog']['data_']);

			$this->Manualdatalog->savefield('datalog', $this->data['Manualdatalog']['datalog']);

			$this->Session->setFlash(__('The Manual datalog has been saved', true));
			$this->redirect(array('action' => 'index'));
			if (!$this->Manualdatalog->save($this->data)) {
				$this->Session->setFlash(__('The Manual datalog could not be saved. Please, try again.', true));
			}
		}*/

		$dataTypes = $this->Manualdatalog->DataType->find('list');
		$sensors = $this->Manualdatalog->Sensor->find('list');
		$stations = $this->Manualdatalog->Station->find('list');
		$this->set(compact('dataTypes', 'sensors', 'stations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid manualdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Manualdatalog->save($this->data)) {
				$this->Session->setFlash(__('The manualdatalog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Manualdatalog->read(null, $id);
		}
		$dataTypes = $this->Manualdatalog->DataType->find('list');
		$sensors = $this->Manualdatalog->Sensor->find('list');
		$stations = $this->Manualdatalog->Station->find('list');
		$this->set(compact('dataTypes', 'sensors', 'stations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for manualdatalog', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Manualdatalog->delete($id)) {
			$this->Session->setFlash(__('Manualdatalog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Manualdatalog was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
