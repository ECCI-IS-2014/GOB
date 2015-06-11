<?php
class DocumentationsController extends AppController {
	private $identificador;
	var $name = 'Documentations';

	function index() {
		$this->Documentation->recursive = 0;
		$this->set('documentations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documentation', $this->Documentation->read(null, $id));
	}

	function add($id = null, $type = null) {
		if (!empty($this->data)) {
			$extension = substr(strrchr($this->data['Documentation']['file']['name'], '.'), 1);
			$t = $this->Documentation->DocType->find('first',array('conditions'=>array('DocType.id'=>$this->data['Documentation']['doc_types_id'])));
			if(strcmp(strtoupper($extension), strtoupper($t['DocType']['description'])) == 0){
				if(empty($this->data['Documentation']['sensor_id'])){
					$this->identificador = 'Station';
				}else if(empty($this->data['Documentation']['station_id'])){
					$this->identificador = 'Sensor';
				}
				$this->Documentation->create();
				if($this->uploadFile()) {
					$this->Documentation->savefield('doc_types_id', $this->data['Documentation']['doc_types_id']);
					try {
						$this->Documentation->savefield('sensor_id', $this->data['Documentation']['sensor_id']);
					} catch (Exception $e) {
						debug($e);
					}
					try {
						$this->Documentation->savefield('station_id', $this->data['Documentation']['station_id']);
					} catch (Exception $e) {
						debug($e);
					}
					$this->Documentation->savefield('description', $this->data['Documentation']['description']);
					date_default_timezone_set('America/Costa_Rica');
					$this->Documentation->savefield('upload_date', date('Y/m/d H:i:s'));
					$this->Documentation->savefield('doc_name', $this->data['Documentation']['file']['name']);
					$path = APP . 'webroot' . DS . 'Documentation' . DS . $this->identificador . DS .$this->data['Documentation']['file']['name'];
					$this->Documentation->savefield('path', $path);
					$this->Documentation->savefield('type', $this->data['Documentation']['type']);
					$this->Session->setFlash(__('The documentation has been saved', true));
					$this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
				}
			}else{
				$this->Session->setFlash(__('The documentation could not be saved. Your file is not a '.$extension.'. Please, try again.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		$docTypes = $this->Documentation->DocType->find('list');
		if(!empty($id)) {
			$sensors = $this->Documentation->Sensor->find('list',array('conditions'=>array('Sensor.id'=>$id)));
		}else{
			$sensors = $this->Documentation->Sensor->find('list');
		}
		if(!empty($id)) {
			$stations = $this->Documentation->Station->find('list',array('conditions'=>array('Station.id'=>$id)));
		}else{
			$stations = $this->Documentation->Station->find('list');
		}
		$docType = $type;
		$this->set(compact('docTypes', 'sensors', 'stations','docType'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid documentation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documentation->save($this->data)) {
				$this->Session->setFlash(__('The documentation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documentation->read(null, $id);
		}
		$docTypes = $this->Documentation->DocType->find('list');
		$sensors = $this->Documentation->Sensor->find('list');
		$stations = $this->Documentation->Station->find('list');
		$this->set(compact('docTypes', 'sensors', 'stations'));
	}

	function delete($id = null, $type, $sensorId) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for documentation', true));
			$this->redirect(array('action'=>'index'));
		}
		$name = $this->Documentation->find('first',array('conditions'=>array('Documentation.id'=>$id)))['Documentation']['doc_name'];
		if(!$type){
			$this->identificador = 'Sensor';
		}else if($type){
			$this->identificador = 'Station';
		}
		$dir = new Folder(APP . 'webroot' .DS. 'Documentation' .DS. $this->identificador);
		$file = $dir->find($name);
		$archivo = new File($dir->pwd() . DS . $file[0]);
		if ($this->Documentation->delete($id) && $archivo->delete()) {
			$this->Session->setFlash(__('Documentation deleted', true));
			$this->redirect(array('controller'=> $this->identificador.'s', 'action'=>'view'.'/'.$sensorId));
		}
		$this->Session->setFlash(__('Documentation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function uploadFile() {
		$file = $this->data['Documentation']['file'];
  		if ($file['error'] === UPLOAD_ERR_OK) {
			$id = String::uuid();
			if (move_uploaded_file($file['tmp_name'], APP . 'webroot' . DS . 'Documentation' . DS . $this->identificador . DS .$file['name'])) {
					//$this->data['Documentation']['id'] = $id;
					$this->data['Documentation']['doc_name'] = $file['name'];
					return true;
			}
		}
  		return false;
	}

	function download($id = null, $idd) {
		if(!$idd){
			$this->identificador = 'Sensor';
		}else if($idd){
			$this->identificador = 'Station';
		}
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$documentation = $this->Documentation->find('first', array(
			'conditions' => array(
				'Documentation.id' => $id,
			)
		));
		if (!$documentation) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->view = 'Media';
		$filename = $documentation['Documentation']['doc_name'];
		$this->set(array(
				'id' => $documentation['Documentation']['doc_name'],
				'name' => substr($filename, 0, strrpos($filename, '.')),
				'extension' => substr(strrchr($filename, '.'), 1),
				'path' => APP . 'webroot'.DS.'Documentation' . DS . $this->identificador . DS,
				'download' => true,
			));
	}
}
