<?php

class SensorsController extends AppController
{
	public $uses = array('Sensor','Feature','Station');
	var $name = 'Sensors';

	function index()
	{
		$this->Sensor->recursive = 0;
		$this->set('sensors', $this->paginate());
	}

	function view($id = null)
	{
		if (!$id) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sensor', $this->Sensor->read(null, $id));
	}

	function add($id = null)
	{
		$this->loadModel('Logbook');
		if (!empty($this->data)) {
			$this->Sensor->create();
			$this->Sensor->savefield('serial', $this->data['Sensor']['serial']);
			$this->Sensor->savefield('price', $this->data['Sensor']['price']);
			$this->Sensor->savefield('type_', $this->data['Sensor']['type_']);
			$this->Sensor->savefield('model_', $this->data['Sensor']['model_']);
			$dd = date('Y/m/d', mktime(0, 0, 0, $this->data['Sensor']['installation_date']['month'], ($this->data['Sensor']['installation_date']['day']), ($this->data['Sensor']['installation_date']['year'])));
			$this->Sensor->savefield('installation_date', $dd);
			$this->Sensor->savefield('brand', $this->data['Sensor']['brand']);
			$this->Sensor->savefield('description', $this->data['Sensor']['description']);
			$this->Sensor->savefield('provider', $this->data['Sensor']['provider']);
			$this->Sensor->savefield('coordinate_x', $this->data['Sensor']['coordinate_x']);
			$this->Sensor->savefield('coordinate_y', $this->data['Sensor']['coordinate_y']);
			$this->Sensor->savefield('station_id', $this->data['Sensor']['station_id']);

			$this->Logbook->savefield('data_', $this->data['Sensor']['serial']);
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['serial']);
			$this->Logbook->savefield('oldvalue', 'EMPTY');
			$this->Logbook->savefield('action', 'INSERT');
			//$this->Logbook->savefield('log_date', time());

			$this->Session->setFlash(__('The sensor has been saved', true));
			$this->redirect(array('action' => 'index'));
			if (!$this->Sensor->save($this->data)) {
				$this->Session->setFlash(__('The sensor could not be saved. Please, try again.', true));
			}
		}
		if(!empty($id)) {
			$stations = $this->Sensor->Station->find('list',array('conditions'=>array('Station.id'=>$id)));
		}else{
			$stations = $this->Sensor->Station->find('list');
		}
			$this->set(compact('stations'));
	}

	function edit($id = null)
	{

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->saveLogbook($id);
			$this->Sensor->savefield('serial', $this->data['Sensor']['serial']);
			$this->Sensor->savefield('price', $this->data['Sensor']['price']);
			$this->Sensor->savefield('type_', $this->data['Sensor']['type_']);
			$this->Sensor->savefield('model_', $this->data['Sensor']['model_']);
			$this->Sensor->savefield('station_id', $this->data['Sensor']['station_id']);
			$dd = date('Y/m/d', mktime(0, 0, 0, $this->data['Sensor']['installation_date']['month'], ($this->data['Sensor']['installation_date']['day']), ($this->data['Sensor']['installation_date']['year'])));
			$this->Sensor->savefield('installation_date', $dd);
			$this->Sensor->savefield('brand', $this->data['Sensor']['brand']);
			$this->Sensor->savefield('description', $this->data['Sensor']['description']);
			$this->Sensor->savefield('provider', $this->data['Sensor']['provider']);
			$this->Sensor->savefield('coordinate_x', $this->data['Sensor']['coordinate_x']);
			$this->Sensor->savefield('coordinate_y', $this->data['Sensor']['coordinate_y']);


			$this->Session->setFlash(__('The sensor has been saved', true));
			$this->redirect(array('action' => 'index'));
			if (!$this->Sensor->save($this->data)) {
				$this->Session->setFlash(__('The sensor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sensor->read(null, $id);
		}
		$stations = $this->Sensor->Station->find('list');
		$this->set(compact('stations'));
	}

	function removal($id = null)
	{
		$this->set('sensors',$this->Sensor->find('list',array('conditions' => array('Sensor.id !=' => $id))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$associatedFetures = $this->Feature->find('all',array('conditions' => array('Feature.sensor_id' => $id)));
			foreach ($associatedFetures as $feature){
				$this->Feature->id = $feature['Feature']['id'];
				$this->Feature->saveField('sensor_id', $this->data['Sensor']['Successor']);
			}
			$dd = date('Y/m/d', mktime(0, 0, 0, $this->data['Sensor']['removal_date']['month'], ($this->data['Sensor']['removal_date']['day']), ($this->data['Sensor']['removal_date']['year'])));
			$this->Sensor->id = $id;
			$this->Sensor->savefield('removal_date', $dd);
			$this->Session->setFlash(__('The sensor has been saved', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Sensor->read(null, $id);
		}
	}

	function calibrate($id = null)
	{
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$dd = date('Y/m/d', mktime(0, 0, 0, $this->data['Sensor']['calibration_date']['month'], ($this->data['Sensor']['calibration_date']['day']), ($this->data['Sensor']['calibration_date']['year'])));
			$this->Sensor->savefield('calibration_date', $dd);
			$this->Session->setFlash(__('The sensor has been saved', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Sensor->read(null, $id);
		}
	}


	function delete($id = null)
	{
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Sensor->delete($id)) {
			$this->Session->setFlash(__('Sensor deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sensor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function saveLogbook($id){
		$this->loadModel('Logbook');
		$logbook =
		$oldValue = $this->Sensor->find('first', array('conditions' => array('Sensor.id'=> $id)));
		if( $oldValue['Sensor']['serial'] != $this->data['Sensor']['serial']){
			//$this->Logbook->savefield('data_', 'SERIAL');
			//$this->Logbook->savefield('table_name', 'Sensors');
			//$this->Logbook->savefield('newvalue', $this->data['Sensor']['serial']);
			//$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['serial']);
			//$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
			$this->Logbook->create();

			$this->Logbook->save(array('data_'=>'SERIAL','table_name'=>'Sensors',
				'newvalue'=>$this->data['Sensor']['serial'],'oldvalue'=>$oldValue['Sensor']['serial'],'action'=>'EDIT','log_date'=>time()));
		}
		if( $oldValue['Sensor']['price'] != $this->data['Sensor']['price']){
			$this->Logbook->savefield('data_', 'PRICE');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['price']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['price']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['type_'] != $this->data['Sensor']['type_']){
			$this->Logbook->savefield('data_', 'TYPE');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['type_']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['type_']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['model_'] != $this->data['Sensor']['model_']){
			$this->Logbook->savefield('data_', 'MODEL');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['model_']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['model_']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['station_id'] != $this->data['Sensor']['station_id']){
			$this->Logbook->savefield('data_', 'STATION');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['station_id']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['station_id']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['installation_date'] != $this->data['Sensor']['installation_date']){
			$this->Logbook->savefield('data_', 'INSTALLATION DATE');
			$this->Logbook->savefield('table_name', 'Sensors');
			//echo $this->data['Sensor']['installation_date'];
			$dd = date('Y-m-d', mktime(0, 0, 0, $this->data['Sensor']['installation_date']['month'], ($this->data['Sensor']['installation_date']['day']), ($this->data['Sensor']['installation_date']['year'])));
			$this->Logbook->savefield('newvalue', $dd);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['installation_date']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['brand'] != $this->data['Sensor']['brand']){
			$this->Logbook->savefield('data_', 'BRAND');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['brand']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['brand']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['description'] != $this->data['Sensor']['description']){
			$this->Logbook->savefield('data_', 'DESCRIPTION');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['description']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['description']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['provider'] != $this->data['Sensor']['provider']){
			$this->Logbook->savefield('data_', 'PROVIDER');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['provider']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['provider']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['coordinate_x'] != $this->data['Sensor']['coordinate_x']){
			$this->Logbook->savefield('data_', 'COORDINATE X');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['coordinate_x']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['coordinate_x']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}
		if( $oldValue['Sensor']['coordinate_y'] != $this->data['Sensor']['coordinate_y']){
			$this->Logbook->savefield('data_', 'COORDINATE Y');
			$this->Logbook->savefield('table_name', 'Sensors');
			$this->Logbook->savefield('newvalue', $this->data['Sensor']['coordinate_y']);
			$this->Logbook->savefield('oldvalue', $oldValue['Sensor']['coordinate_y']);
			$this->Logbook->savefield('action', 'EDIT');
			//$this->Logbook->savefield('log_date', time());
		}

	}
}
