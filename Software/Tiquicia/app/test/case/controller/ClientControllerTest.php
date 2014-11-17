<?php
/**
 * Created by PhpStorm.
 * User: Dayner Umaña
 * Date: 16/11/14
 * Time: 10:51 PM
 */


class ClientControllerTest extends ControllerTestCase {
    public function setUp() {
        parent::setUp();
        $this->Wish = ClassRegistry::init('Client');
    }

    public function testRequest_view(){
        $file = "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.'199912'.'.json';
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        $this->assertEquals($exists, true);
    }

   public function testRequest_edit(){

        $file = "http://" . $_SERVER['HTTP_HOST'] .'/EF/'.'rest_users/'.'199912'.'.json';
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        $this->assertEquals($exists, true);

    }


    public function testRequest_dolar(){

        $file ='http://indicadoreseconomicos.bccr.fi.cr/indicadoreseconomicos/WebServices/wsIndicadoresEconomicos.asmx/ObtenerIndicadoresEconomicos';
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $exists = false;
        }
        else {
            $exists = true;
        }
        $this->assertEquals($exists, true);

    }
}

