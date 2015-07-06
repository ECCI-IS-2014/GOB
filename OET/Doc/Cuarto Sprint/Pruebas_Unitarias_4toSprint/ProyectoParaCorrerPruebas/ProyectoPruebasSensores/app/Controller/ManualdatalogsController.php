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
	}



    function csv(){
        if (!empty($this->data)) {
            $file = $this->data['Manualdatalog']['file'];
            $correct = 1;
            debug($file);
            $trozos = explode(".", $file['name']);
            $extension = end($trozos);
            if($extension == 'csv'){
                $this->Manualdatalog->create();
                if ($this->uploadFile()) {
                    $handle = fopen(APP . 'webroot' . DS . 'files' . DS . $file['name'], "r+");

                    // read the 1st row as headings
                    $header = fgetcsv($handle);
                    //debug($header);


                    while (!feof($handle)) {

                        $datos = fgetcsv($handle);
                        debug($datos);
                        $correct = $this->add_csv($datos, $correct);
                    }


                    //debug($header);
                    fclose($handle);

                    if ($correct === 1) {
                        $this->Session->setFlash(__('The upload has been saved', true));
                    } else {
                        $this->Session->setFlash(__('The upload has been saved with errors', true));
                    }
                    //falta lo de manejar el archivo: https://mrphp.com.au/blog/importing-data-from-csv-into-cakephp/
                    //$this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
            }
        }
    }

    function uploadFile() {
        $file = $this->data['Manualdatalog']['file'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            if (move_uploaded_file($file['tmp_name'], APP.'webroot\files'.DS.$file['name'])) {
                return true;
            }
        }
        return false;
    }


    function add_csv($data,$correct) {

        $this->autoRender = false;
        $booleana = $correct;
        if (!empty($data)){//revisar este if para el mensaje de q no pudo salvar y REVISAR FECHA


            debug($data[0]);
            date_default_timezone_set('America/Costa_Rica');
            //debug($data);
            if(!empty($data[0])&&!empty($data[1])
                &&!empty($data[2])&&!empty($data[3])
                &&!empty($data[4])&&!empty($data[5])
                &&!empty($data[6])&&!empty($data[7])
                &&!empty($data[8])&&!empty($data[9])&&!empty($data[10])
            ) {
                //$this->Manualdatalog->create();
                debug($correct);
                $this->Manualdatalog->saveField('tempp', $data[3]);
                debug($correct);
                $this->Session->setFlash(__('The Manual datalog has been saved', true));
                //$this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.', true));
            }
        }

        return $booleana;

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
