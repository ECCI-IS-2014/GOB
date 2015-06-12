<?php
App::uses('AppController', 'Controller');
/**
 * Valuesdatatypes Controller
 *
 * @property Valuesdatatype $Valuesdatatype
 * @property PaginatorComponent $Paginator
 */
class ValuesdatatypesController extends AppController {

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
		$this->Valuesdatatype->recursive = 0;
		$this->set('valuesdatatypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Valuesdatatype->exists($id)) {
			throw new NotFoundException(__('Invalid valuesdatatype'));
		}
		$options = array('conditions' => array('Valuesdatatype.' . $this->Valuesdatatype->primaryKey => $id));
		$this->set('valuesdatatype', $this->Valuesdatatype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Valuesdatatype->create();
			if ($this->Valuesdatatype->save($this->request->data)) {
				$this->Session->setFlash(__('The valuesdatatype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valuesdatatype could not be saved. Please, try again.'));
			}
		}
		$automaticdatalogs = $this->Valuesdatatype->Automaticdatalog->find('list');
		$dataTypes = $this->Valuesdatatype->DataType->find('list');
		$this->set(compact('automaticdatalogs', 'dataTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Valuesdatatype->exists($id)) {
			throw new NotFoundException(__('Invalid valuesdatatype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Valuesdatatype->save($this->request->data)) {
				$this->Session->setFlash(__('The valuesdatatype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valuesdatatype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Valuesdatatype.' . $this->Valuesdatatype->primaryKey => $id));
			$this->request->data = $this->Valuesdatatype->find('first', $options);
		}
		$automaticdatalogs = $this->Valuesdatatype->Automaticdatalog->find('list');
		$dataTypes = $this->Valuesdatatype->DataType->find('list');
		$this->set(compact('automaticdatalogs', 'dataTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Valuesdatatype->id = $id;
		if (!$this->Valuesdatatype->exists()) {
			throw new NotFoundException(__('Invalid valuesdatatype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Valuesdatatype->delete()) {
			$this->Session->setFlash(__('The valuesdatatype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The valuesdatatype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
