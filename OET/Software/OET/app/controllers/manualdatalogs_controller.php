<?php
class ManualdatalogsController extends AppController {
  	var $name = 'Manualdatalogs';
	var $components = array('Email');
    public $uses = array('Manualdatalog','Station');
	private $dataErrors = '';
	function index() {
		$this->Manualdatalog->recursive = 0;
		$this->set('manualdatalogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid manualdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('manualdatalog', $this->Manualdatalog->read(null, $id));
	}
    function csv(){
        if (!empty($this->data)) {
            $file = $this->data['Manualdatalog']['file'];
            $correct = 1;
            $trozos = explode(".", $file['name']);
            $extension = end($trozos);
            if($extension == 'csv'){
                $this->Manualdatalog->create();
                if ($this->uploadFile()) {
                    $handle = fopen(APP . 'webroot' . DS . 'uploads' . DS . $file['name'], "r+");

                    // read the 1st row as headings
                    $header = fgetcsv($handle);
                    //debug($header);


                    while (!feof($handle)) {

                        $datos = fgetcsv($handle);
                        $correct = $this->add_csv($datos, $correct);
                    }


                    //debug($header);
                    fclose($handle);
                    if (chmod(APP . 'webroot' . DS . 'uploads' . DS . $file['name'], 0777)) {

                        if (!unlink(APP . 'webroot' . DS . 'uploads' . DS . $file['name'])) {
                            echo("Error deleting" . $file['name']);
                        } else {
                            echo("Deleted" . $file['name']);
                        }
                    }
                    if ($correct === 1) {
                        $this->Session->setFlash(__('The upload has been saved', true));
                    } else {
						if($correct === 0){
							$this->Session->setFlash(__('The upload has been saved with the following errors. Email sent',true));
							$this->sendEmail('The upload has been saved. BUT, with the following errors: '."\r\n".$this->dataErrors,'casduch@gmail.com');
						}
                    }
                    //falta lo de manejar el archivo: https://mrphp.com.au/blog/importing-data-from-csv-into-cakephp/
                    $this->redirect(array('action' => 'index'));
                }
            } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
            }
        }
    }

    function uploadFile() {
        $file = $this->data['Manualdatalog']['file'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $id = String::uuid();
            if (move_uploaded_file($file['tmp_name'], APP.'webroot\uploads'.DS.$file['name'])) {
                $this->data['Manualdatalog']['id'] = $id;
                $this->data['Manualdatalog']['filename'] = $file['name'];
                $this->data['Manualdatalog']['filesize'] = $file['size'];
                $this->data['Manualdatalog']['filemime'] = $file['type'];
                return true;
            }
        }
        return false;
    }
    function add_csv($data,$correct) {
		$this->autoRender = false;
        $booleana = $correct;
        if (!empty($data)){//revisar este if para el mensaje de q no pudo salvar y REVISAR FECHA
            $id_station = $this->Manualdatalog->Station->find('first',array('conditions'=>array('Station.id_station'=> $data[2])));
            if(empty($id_station)){
                $booleana = 0;
				$this->dataErrors = $this->dataErrors.'Station identifiers not found: '.$data[2]."\r\n";
            }
            date_default_timezone_set('America/Costa_Rica');
            if(!empty($data[0])&&!empty($data[1])
                &&!empty($data[2])&&!empty($data[3])
                &&!empty($data[4])&&!empty($data[5])
                &&!empty($data[6])&&!empty($data[7])
                &&!empty($data[8])&&!empty($data[9])&&!empty($data[10]) && !empty($id_station)
            ) {
				$this->Manualdatalog->create();
				$fecha = explode("/",$data[0]);
				$hora =  explode(":",$data[1]);
				$dd = date('Y/m/d H:i:s', mktime($hora[0],
					$hora[1],$hora[2],
					$fecha[1],
					$fecha[2],
					$fecha[0]));
				$newData = array(
								'temp' => $data[3],
								'station_id' => $id_station['Station']['id'],
								'mintemp' => $data[4],
								'recolection_date' => $dd,
								'insertion_date' => date('Y/m/d H:i:s'),
								'maxtemp' => $data[5],
								'relative_humidity' => $data[6],
								'barometric_pressure' => $data[7],
								'rainfall' => $data[8],
								'recolector' => $data[9],
								'comments' => $data[10]);
				$datosEncontrados = $this->Manualdatalog->find('first', array('conditions' => array('recolection_date' => $dd,'station_id'=>$id_station['Station']['id'])));
				if($datosEncontrados != ''){
					$this->dataErrors = $this->dataErrors.'Registers with the following date and station id already exists:'."\r\n".'Date: '.$dd.' Station id: '.$id_station['Station']['id']."\r\n";
				}else{
					$result = $this->Manualdatalog->save($newData);
					if($data[4]>$data[3]){
					// temperatura minima es mayor a temperatura promedio 
						$this->dataErrors = $this->dataErrors.'id->'.$this->Manualdatalog->getLastInsertId().' Error: Minimum Temperature is higher than Average Temperature'."\r\n";
						$booleana = 0;
					}
					if($data[5]<$data[3]){
						// temperatura ax es menor a temperatura promedio 
						$this->dataErrors = $this->dataErrors.'id->'.$this->Manualdatalog->getLastInsertId().' Error: Maximum Temperature is lower than Average Temperature'."\r\n";
						$booleana = 0;
					}
					if($data[6]<0 || $data[6]>100){
						// humedad relativa no esta entre 0 y 100
						$this->dataErrors = $this->dataErrors.'id->'.$this->Manualdatalog->getLastInsertId().' Error: Relative Humidity is lower than 0, or higher than 100'."\r\n";
						$booleana = 0;
					}
				}
			}else {
                $this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.', true));
            }
		}
	/* 	debug($this->Manualdatalog->getLastInsertId());
		debug($this->relativeHumidity); */
		/* debug($this->maximumLowerThanTemp); */
/* 		debug($this->minimumHigherThanTemp); */
        return $booleana;
    }

    function add() {
        if (!empty($this->data)){
            date_default_timezone_set('America/Costa_Rica');
            //siguiente if controla que los datos no se inserten vacíos
            if(!empty($this->data['Manualdatalog']['recolection_date']['min'])&&!empty($this->data['Manualdatalog']['recolection_date']['day'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['year'])&&!empty($this->data['Manualdatalog']['recolection_date']['month'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['hour'])&&!empty($this->data['Manualdatalog']['temp'])
                &&!empty($this->data['Manualdatalog']['station_id'])&&!empty($this->data['Manualdatalog']['mintemp'])
                &&!empty($this->data['Manualdatalog']['maxtemp'])&&!empty($this->data['Manualdatalog']['relative_humidity'])
                &&!empty($this->data['Manualdatalog']['barometric_pressure'])&&!empty($this->data['Manualdatalog']['rainfall'])
                &&!empty($this->data['Manualdatalog']['recolector'])&&!empty($this->data['Manualdatalog']['comments'])) {
                //Siguiente if controla si la humedad relativa esta entre 0 y 100
                if($this->data['Manualdatalog']['relative_humidity']>=0&&$this->data['Manualdatalog']['relative_humidity']<=100){
                    //Siguiente if controla que la temperatura promedio esté entre la mínima y la máxima
                    if(($this->data['Manualdatalog']['maxtemp']>=$this->data['Manualdatalog']['temp'])
                        &&($this->data['Manualdatalog']['mintemp']<=$this->data['Manualdatalog']['temp'])){
                        //lo siguiente regula que no se inserten datos a una estacion y con una fecha ya existente
                        $dd = date('Y/m/d H:i:s', mktime($this->data['Manualdatalog']['recolection_date']['hour'],
                            $this->data['Manualdatalog']['recolection_date']['min'],0,
                            $this->data['Manualdatalog']['recolection_date']['month'],
                            $this->data['Manualdatalog']['recolection_date']['day'],
                            $this->data['Manualdatalog']['recolection_date']['year']));
                        //verifica que no haya un registro en la base de datos con la misma fecha y estacion
                        $datosEncontrados =  $this->Manualdatalog->find('first', array('conditions' => array('recolection_date' => $dd,'station_id'=>$this->data['Manualdatalog']['station_id'])));
                        if($datosEncontrados !=''){
                            $this->Session->setFlash(__('A register with this date and station is already loaded in the database.', true));
                        }else{
                            $this->Manualdatalog->create();
							$newData = array(
												'temp' => $this->data['Manualdatalog']['temp'],
												'station_id' => $this->data['Manualdatalog']['station_id'],
												'mintemp' => $this->data['Manualdatalog']['mintemp'],
												'recolection_date' => $dd,
												'insertion_date' => date('Y/m/d H:i:s'),
												'maxtemp' => $this->data['Manualdatalog']['maxtemp'],
												'relative_humidity' => $this->data['Manualdatalog']['relative_humidity'],
												'barometric_pressure' => $this->data['Manualdatalog']['barometric_pressure'],
												'rainfall' => $this->data['Manualdatalog']['rainfall'],
												'recolector' => $this->data['Manualdatalog']['recolector'],
												'comments' => $this->data['Manualdatalog']['comments']);
							$this->Manualdatalog->save($newData);
                            $this->Session->setFlash(__('The Manual datalog has been saved', true));
                            $this->redirect(array('action' => 'index'));
                        }
                    }else{
                        if($this->data['Manualdatalog']['mintemp']<=$this->data['Manualdatalog']['temp']){
                            $this->Session->setFlash(__('The maximum temperature is lower than the temperature.', true));
                        }else{
                            $this->Session->setFlash(__('The minumim temperature is higher than the temperature.', true));
                        }
                    }
                }else{
                    $this->Session->setFlash(__('Relative humidity has to be between 0 and 100', true));

                }
            }else {
                    $this->Session->setFlash(__('There are empty values. The manualdatalog could not be saved. Please, try again.', true));
            }
        }

        $stations = $this->Manualdatalog->Station->find('list');
        $this->set(compact('stations'));

    }
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid manualdatalog', true));
			$this->redirect(array('action' => 'index'));
		}
        if (!empty($this->data)){
            date_default_timezone_set('America/Costa_Rica');
            //siguiente if controla que los datos no se inserten vacíos
            if(!empty($this->data['Manualdatalog']['recolection_date']['min'])&&!empty($this->data['Manualdatalog']['recolection_date']['day'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['year'])&&!empty($this->data['Manualdatalog']['recolection_date']['month'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['hour'])&&!empty($this->data['Manualdatalog']['temp'])
                &&!empty($this->data['Manualdatalog']['station_id'])&&!empty($this->data['Manualdatalog']['mintemp'])
                &&!empty($this->data['Manualdatalog']['maxtemp'])&&!empty($this->data['Manualdatalog']['relative_humidity'])
                &&!empty($this->data['Manualdatalog']['barometric_pressure'])&&!empty($this->data['Manualdatalog']['rainfall'])
                &&!empty($this->data['Manualdatalog']['recolector'])&&!empty($this->data['Manualdatalog']['comments'])) {
                //Siguiente if controla si la humedad relativa esta entre 0 y 100
                if($this->data['Manualdatalog']['relative_humidity']>=0&&$this->data['Manualdatalog']['relative_humidity']<=100){
                    //Siguiente if controla que la temperatura promedio esté entre la mínima y la máxima
                    if(($this->data['Manualdatalog']['maxtemp']>=$this->data['Manualdatalog']['temp'])
                        &&($this->data['Manualdatalog']['mintemp']<=$this->data['Manualdatalog']['temp'])){
                        $dd = date('Y/m/d H:i:s', mktime($this->data['Manualdatalog']['recolection_date']['hour'],
                            $this->data['Manualdatalog']['recolection_date']['min'],0,
                            $this->data['Manualdatalog']['recolection_date']['month'],
                            $this->data['Manualdatalog']['recolection_date']['day'],
                            $this->data['Manualdatalog']['recolection_date']['year']));
                            $this->Manualdatalog->id = $id;
                            $this->Manualdatalog->savefield('recolection_date', $dd);
                            $this->Manualdatalog->savefield('temp', $this->data['Manualdatalog']['temp']);
                            $this->Manualdatalog->savefield('station_id', $this->data['Manualdatalog']['station_id']);
                            $this->Manualdatalog->savefield('mintemp', $this->data['Manualdatalog']['mintemp']);
                            $this->Manualdatalog->savefield('maxtemp', $this->data['Manualdatalog']['maxtemp']);
                            $this->Manualdatalog->savefield('relative_humidity', $this->data['Manualdatalog']['relative_humidity']);
                            $this->Manualdatalog->savefield('barometric_pressure', $this->data['Manualdatalog']['barometric_pressure']);
                            $this->Manualdatalog->savefield('rainfall', $this->data['Manualdatalog']['rainfall']);
                            $this->Manualdatalog->savefield('recolector', $this->data['Manualdatalog']['recolector']);
                            $this->Manualdatalog->savefield('comments', $this->data['Manualdatalog']['comments']);
                            $this->Session->setFlash(__('The Manual datalog has been saved', true));
                            $this->redirect(array('action' => 'index'));

                    }else{
                        if($this->data['Manualdatalog']['mintemp']<=$this->data['Manualdatalog']['temp']){
                            $this->Session->setFlash(__('The maximum temperature is lower than the temperature.', true));
                        }else{
                            $this->Session->setFlash(__('The minumim temperature is higher than the temperature.', true));
                        }
                    }
                }else{
                    $this->Session->setFlash(__('Relative humidity has to be between 0 and 100', true));

                }
            }else {
                $this->Session->setFlash(__('There are empty values. The manualdatalog could not be saved. Please, try again.', true));
            }
        }
		if (empty($this->data)) {
			$this->data = $this->Manualdatalog->read(null, $id);
		}
		$stations = $this->Manualdatalog->Station->find('list');
		$this->set(compact('stations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for manualdatalog', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Manualdatalog->delete($id)) {
			$this->Session->setFlash(__('Manualdatalog deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Manualdatalog was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	private function sendEmail($message,$to){
		$this->Email->smtpOptions = array(
						 'port'=>'25',
						 'timeout'=>'30',
						 'host' => 'smtp.ucr.ac.cr',
						 'username'=>'daniel.moramadrigal@ucr.ac.cr',
						 'password'=>'DAMOMA406',
					);
		// configuracion de correos para enviar y recibir alertas
		$this->Email->delivery = 'smtp';
		$this->Email->from = 'daniel.moramadrigal@ucr.ac.cr';
		$this->Email->to = $to;
		$this->set('name', 'Recipient Name');
		$this->Email->subject = 'Alert';
		$this->Email->sendAs = 'text';
		$this->Email->send($message);
	}
}
