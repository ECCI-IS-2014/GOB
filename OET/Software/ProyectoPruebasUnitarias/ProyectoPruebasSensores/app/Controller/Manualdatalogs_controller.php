<?php
App::Import('Email', 'Network/Email');
class ManualdatalogsController extends AppController {
    public $gmail = array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => 465,
        'username' => 'your_user@gmail.com',
        'password' => 'your_password',
        'transport' => 'Smtp',
    );
	var $name = 'Manualdatalogs';
    var $components = array ('Email');
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

    function add() {
        if (!empty($this->data)){//revisar este if para el mensaje de q no pudo salvar y REVISAR FECHA
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
                            $this->Manualdatalog->savefield('temp', $this->data['Manualdatalog']['temp']);
                            $this->Manualdatalog->savefield('station_id', $this->data['Manualdatalog']['station_id']);
                            $this->Manualdatalog->savefield('mintemp', $this->data['Manualdatalog']['mintemp']);
                            $this->Manualdatalog->savefield('recolection_date', $dd);
                            $this->Manualdatalog->savefield('insertion_date', date('Y/m/d H:i:s'));
                            $this->Manualdatalog->savefield('maxtemp', $this->data['Manualdatalog']['maxtemp']);
                            $this->Manualdatalog->savefield('relative_humidity', $this->data['Manualdatalog']['relative_humidity']);
                            $this->Manualdatalog->savefield('barometric_pressure', $this->data['Manualdatalog']['barometric_pressure']);
                            $this->Manualdatalog->savefield('rainfall', $this->data['Manualdatalog']['rainfall']);
                            $this->Manualdatalog->savefield('recolector', $this->data['Manualdatalog']['recolector']);
                            $this->Manualdatalog->savefield('comments', $this->data['Manualdatalog']['comments']);
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
                    /*$this->send_email('alereyes1793@gmail.com');
                    $to = "dan182mora@gmail.com";
                    $subject = "My subject";
                    $txt = "Hello world!";
                    $headers = "From: webmaster@example.com" . "\r\n" .
                        "CC: somebodyelse@example.com";

                    mail($to,$subject,$txt,$headers);*/
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
            if(!empty($this->data['Manualdatalog']['recolection_date']['min'])&&!empty($this->data['Manualdatalog']['recolection_date']['day'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['year'])&&!empty($this->data['Manualdatalog']['recolection_date']['month'])
                &&!empty($this->data['Manualdatalog']['recolection_date']['hour'])&&!empty($this->data['Manualdatalog']['temp'])
                &&!empty($this->data['Manualdatalog']['station_id'])&&!empty($this->data['Manualdatalog']['mintemp'])
                &&!empty($this->data['Manualdatalog']['maxtemp'])&&!empty($this->data['Manualdatalog']['relative_humidity'])
                &&!empty($this->data['Manualdatalog']['barometric_pressure'])&&!empty($this->data['Manualdatalog']['rainfall'])
                &&!empty($this->data['Manualdatalog']['recolector'])&&!empty($this->data['Manualdatalog']['comments'])&&($this->data['Manualdatalog']['maxtemp']>=$this->data['Manualdatalog']['temp'])&&($this->data['Manualdatalog']['mintemp']<=$this->data['Manualdatalog']['temp'])) {
                $this->Manualdatalog->id = $id;
                $this->Manualdatalog->savefield('temp', $this->data['Manualdatalog']['temp']);
                $this->Manualdatalog->savefield('station_id', $this->data['Manualdatalog']['station_id']);
                $this->Manualdatalog->savefield('mintemp', $this->data['Manualdatalog']['mintemp']);
                debug($this->data['Manualdatalog']['recolection_date']);
                $dd = date('Y/m/d H:i:s', mktime($this->data['Manualdatalog']['recolection_date']['hour'],
                    $this->data['Manualdatalog']['recolection_date']['min'],0,
                    $this->data['Manualdatalog']['recolection_date']['month'],
                    $this->data['Manualdatalog']['recolection_date']['day'],
                    $this->data['Manualdatalog']['recolection_date']['year']));
                $this->Manualdatalog->savefield('recolection_date', $dd);
                $this->Manualdatalog->savefield('maxtemp', $this->data['Manualdatalog']['maxtemp']);
                $this->Manualdatalog->savefield('relative_humidity', $this->data['Manualdatalog']['relative_humidity']);
                $this->Manualdatalog->savefield('barometric_pressure', $this->data['Manualdatalog']['barometric_pressure']);
                $this->Manualdatalog->savefield('rainfall', $this->data['Manualdatalog']['rainfall']);
                $this->Manualdatalog->savefield('recolector', $this->data['Manualdatalog']['recolector']);
                $this->Manualdatalog->savefield('comments', $this->data['Manualdatalog']['comments']);
                $this->Session->setFlash(__('The Manual datalog has been saved', true));
                $this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash(__('The manualdatalog could not be saved. Please, try again.', true));
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

    public function send_email($dest=null)
    {
        $Email = new Email('gmail');
        $Email->to($dest);
        $Email->subject('Automagically generated email');
        $Email->replyTo('the_mail_you_want_to_receive_replies@yourdomain.com');
        $Email->from ('your_user@gmail.com');
        $Email->send();
        return $this->redirect(array('action' => 'index'));
    }
}
