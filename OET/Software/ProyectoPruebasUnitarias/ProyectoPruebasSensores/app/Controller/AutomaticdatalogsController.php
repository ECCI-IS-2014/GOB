<?php
App::uses('AppController', 'Controller');
/**
 * Automaticdatalogs Controller
 *
 * @property Automaticdatalog $Automaticdatalog
 * @property PaginatorComponent $Paginator
 */
class AutomaticdatalogsController extends AppController {


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    public $uses = array('Automaticdatalog','DataType','Valuesdatatype');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Automaticdatalog->recursive = 0;
		$this->set('automaticdatalogs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Automaticdatalog->exists($id)) {
			throw new NotFoundException(__('Invalid automaticdatalog'));
		}
		$options = array('conditions' => array('Automaticdatalog.' . $this->Automaticdatalog->primaryKey => $id));
		$this->set('automaticdatalog', $this->Automaticdatalog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Automaticdatalog->create();
			if ($this->Automaticdatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The automaticdatalog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automaticdatalog could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Automaticdatalog->Station->find('list');
		$this->set(compact('stations'));
	}


    function add_csv_automatic($data,$correct,$header) {

        $this->autoRender = false;
        $booleana = $correct;

        date_default_timezone_set('America/Costa_Rica');
        if(true
        ) {
            $fechaHora = explode(" ", $data[0]);
            $fecha = explode("/", $fechaHora[0]);
            $hora = explode(":", $fechaHora[1]);
            debug($fecha);
            debug($hora);
            $dd = date('Y/m/d H:i:s', mktime($hora[0],
                $hora[1], 0,
                $fecha[1],
                $fecha[0],
                $fecha[2]));
            $resultado = $this->Automaticdatalog->find('first',array('conditions' => array('recolection_date'=> $dd,'station_id'=>$data[2])));
            if(empty($resultado)) {
                $this->Automaticdatalog->create();

                $this->Automaticdatalog->savefield('station_id', $data[2]);
                debug($data);
                debug($data[0]);


                $this->Automaticdatalog->savefield('recolection_date', $dd);
                $idAD = $this->Automaticdatalog->id;

                $tamanio = count($header);
                debug('tamanio');
                debug($tamanio);
                for ($i = 3; $i < $tamanio; $i = $i + 1) {
                    $this->Valuesdatatype->create();
                    $this->Valuesdatatype->savefield('data_type_id', $header[$i]);
                    $this->Valuesdatatype->savefield('automaticdatalog_id', $idAD);
                    $this->Valuesdatatype->savefield('data_value', $data[$i]);
                    debug($this->Valuesdatatype);
                }
            }


            $this->Session->setFlash(__('The Automatic datalog has been saved', true));
            //$this->redirect(array('action' => 'index'));
        }else {
            $this->Session->setFlash(__('The automaticdatalog could not be saved. Please, try again.', true));
        }

        return $booleana;

    }



    function csv(){
        $this->autoRender = false;
        if ($gestor = opendir(APP . 'webroot' . DS . 'automatic')) {
            debug($gestor);
            while(false !== ($entrada = readdir($gestor))){
                debug($entrada);
                $correct = 1;
                $trozos = explode(".", $entrada);
                $extension = end($trozos);
                if ($extension == 'csv') {
                    debug($entrada);
                    $this->Automaticdatalog->create();
                    $handle = fopen(APP . 'webroot' . DS . 'automatic' . DS . $entrada, "r+");

                    // read the 1st row as headings
                    $header = fgetcsv($handle);
                    debug($header);


                    while (!feof($handle)) {

                        $datos = fgetcsv($handle);
                        $correct = $this->add_csv_automatic($datos, $correct,$header);

                    }


                    //debug($header);
                    fclose($handle);

                    if ($correct === 1) {
                        $this->Session->setFlash(__('The upload has been saved', true));
                    } else {
                        $this->Session->setFlash(__('The upload has been saved with errors', true));
                    }
                    //$this->redirect(array('action' => 'index'));
                }
            }
        }
        else {
            $this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
            $this->redirect(array('action' => 'index'));
        }
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Automaticdatalog->exists($id)) {
			throw new NotFoundException(__('Invalid automaticdatalog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Automaticdatalog->save($this->request->data)) {
				$this->Session->setFlash(__('The automaticdatalog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automaticdatalog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Automaticdatalog.' . $this->Automaticdatalog->primaryKey => $id));
			$this->request->data = $this->Automaticdatalog->find('first', $options);
		}
		$stations = $this->Automaticdatalog->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Automaticdatalog->id = $id;
		if (!$this->Automaticdatalog->exists()) {
			throw new NotFoundException(__('Invalid automaticdatalog'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Automaticdatalog->delete()) {
			$this->Session->setFlash(__('The automaticdatalog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The automaticdatalog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
