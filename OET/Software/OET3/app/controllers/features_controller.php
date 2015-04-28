<?php
class FeaturesController extends AppController {

	var $name = 'Features';

	function index() {
		$this->Feature->recursive = 0;
		$this->set('features', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid feature', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('feature', $this->Feature->read(null, $id));
	}

	function add($id = null) {
		if (!empty($this->data)) {
			$this->Feature->create();
			if ($this->Feature->save($this->data)) {
				$this->Session->setFlash(__('The feature has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.', true));
			}
		}
                if(!empty($id)){
		$sensors = $this->Feature->Sensor->find('list',array('conditions'=>array('Sensor.id'=>$id)));
                }
                else{
                   $sensors = $this->Feature->Sensor->find('list');
                }
		$this->set(compact('sensors'));
                
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid feature', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feature->save($this->data)) {
				$this->Session->setFlash(__('The feature has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feature could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feature->read(null, $id);
		}
		$sensors = $this->Feature->Sensor->find('list');
		$this->set(compact('sensors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for feature', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Feature->delete($id)) {
			$this->Session->setFlash(__('Feature deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Feature was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
