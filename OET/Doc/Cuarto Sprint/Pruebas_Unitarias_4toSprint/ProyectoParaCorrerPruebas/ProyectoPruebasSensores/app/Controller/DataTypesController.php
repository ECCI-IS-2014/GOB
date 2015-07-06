<?php
App::uses('AppController', 'Controller');
/**
 * DataTypes Controller
 *
 * @property DataType $DataType
 * @property PaginatorComponent $Paginator
 */
class DataTypesController extends AppController {

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
		$this->DataType->recursive = 0;
		$this->set('dataTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DataType->exists($id)) {
			throw new NotFoundException(__('Invalid data type'));
		}
		$options = array('conditions' => array('DataType.' . $this->DataType->primaryKey => $id));
		$this->set('dataType', $this->DataType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DataType->create();
			if ($this->DataType->save($this->request->data)) {
				$this->Session->setFlash(__('The data type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data type could not be saved. Please, try again.'));
			}
		}
		$sensors = $this->DataType->Sensor->find('list');
		$this->set(compact('sensors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DataType->exists($id)) {
			throw new NotFoundException(__('Invalid data type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DataType->save($this->request->data)) {
				$this->Session->setFlash(__('The data type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DataType.' . $this->DataType->primaryKey => $id));
			$this->request->data = $this->DataType->find('first', $options);
		}
		$sensors = $this->DataType->Sensor->find('list');
		$this->set(compact('sensors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DataType->id = $id;
		if (!$this->DataType->exists()) {
			throw new NotFoundException(__('Invalid data type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DataType->delete()) {
			$this->Session->setFlash(__('The data type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The data type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
