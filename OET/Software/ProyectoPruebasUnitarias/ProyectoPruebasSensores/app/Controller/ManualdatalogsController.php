<?php
App::uses('AppController', 'Controller');
/**
 * Manualdatalogs Controller
 *
 * @property Manualdatalog $Manualdatalog
 * @property PaginatorComponent $Paginator
 */
class ManualdatalogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Manualdatalog->recursive = 0;
		$this->set('manualdatalogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Manualdatalog->exists($id)) {
			throw new NotFoundException(__('Invalid manualdatalog'));
		}
		$options = array('conditions' => array('Manualdatalog.' . $this->Manualdatalog->primaryKey => $id));
		$this->set('manualdatalog', $this->Manualdatalog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manualdatalog->create();
			if ($this->Manualdatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The manualdatalog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.'));
			}
		}
		$dataTypes = $this->Manualdatalog->DataType->find('list');
		$sensors = $this->Manualdatalog->Sensor->find('list');
		$stations = $this->Manualdatalog->Station->find('list');
		$this->set(compact('dataTypes', 'sensors', 'stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Manualdatalog->exists($id)) {
			throw new NotFoundException(__('Invalid manualdatalog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manualdatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The manualdatalog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manualdatalog.' . $this->Manualdatalog->primaryKey => $id));
			$this->request->data = $this->Manualdatalog->find('first', $options);
		}
		$dataTypes = $this->Manualdatalog->DataType->find('list');
		$sensors = $this->Manualdatalog->Sensor->find('list');
		$stations = $this->Manualdatalog->Station->find('list');
		$this->set(compact('dataTypes', 'sensors', 'stations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Manualdatalog->id = $id;
		if (!$this->Manualdatalog->exists()) {
			throw new NotFoundException(__('Invalid manualdatalog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Manualdatalog->delete()) {
			$this->Session->setFlash(__('The manualdatalog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manualdatalog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
