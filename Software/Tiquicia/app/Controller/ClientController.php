<?php
App::uses('HttpSocket', 'Network/Http');
class ClientController extends AppController {
	public $components = array('Security', 'RequestHandler');
	
	public function index(){
		
	}

	public function request_index(){
	
		// remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.'.json';
		
		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_view($id){
	
		// remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';
        pr($link);
		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);

		$this -> render('/Client/request_response');
	}
	
	public function request_edit($id,$saldo){
	
		// remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';
		$data = null;
		$httpSocket = new HttpSocket();
		$data['User']['saldo'] = $saldo;
		$response = $httpSocket->put($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	

	
	public function request_delete($id){
	
		// remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->delete($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}

    public function request_dolar(){
        // remotely post the information to the server
        $link = 'http://indicadoreseconomicos.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicos';
        $data = array('tcIndicador' => '317','tcFechaInicio'=> date("d/m/Y"), 'tcFechaFinal'=> date("d/m/Y"),'tcNombre'=>'Rafa','tnSubNiveles'=>'N');
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);



        $this -> render('/Client/request_response');

    }
}