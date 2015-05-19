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
        
        function successor($id = null){
            $this->set('sensors',$this->Sensor->find('list'));
            
        }
}
