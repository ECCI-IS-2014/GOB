<?php
class AutomaticdatalogsController extends AppController{

	var $name = 'Automaticdatalogs';
    public $uses = array('Automaticdatalog','DataType','Valuesdatatype');





	function index() {
		$this->Automaticdatalog->recursive = 0;
		$this->set('automaticdatalogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid automaticdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('automaticdatalog', $this->Automaticdatalog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
            debug($this->data);
			$this->Automaticdatalog->create();
			if ($this->Automaticdatalog->save($this->data)) {
				$this->Session->setFlash(__('The automaticdatalog has been saved', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automaticdatalog could not be saved. Please, try again.', true));
			}
		}
		$stations = $this->Automaticdatalog->Station->find('list');
		$this->set(compact('stations'));
	}


    function  automatic_load(){
        $this->autoRender = false;
        while(true){
            sleep(5);
            $this->csv();
        }
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
                    for ($i = 3; $i < $tamanio; $i = $i + 1) {
                        $this->Valuesdatatype->create();
                        $this->Valuesdatatype->savefield('data_type_id', $header[$i]);
                        $this->Valuesdatatype->savefield('automaticdatalog_id', $idAD);
                        $this->Valuesdatatype->savefield('data_value', $data[$i]);
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
                        $this->redirect(array('action' => 'index'));
                    }
            }
        }
        else {
            $this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
            $this->redirect(array('action' => 'index'));
        }
    }





	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid automaticdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Automaticdatalog->save($this->data)) {
				$this->Session->setFlash(__('The automaticdatalog has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The automaticdatalog could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Automaticdatalog->read(null, $id);
		}
		$stations = $this->Automaticdatalog->Station->find('list');
		$this->set(compact('stations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for automaticdatalog', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Automaticdatalog->delete($id)) {
			$this->Session->setFlash(__('Automaticdatalog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Automaticdatalog was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
