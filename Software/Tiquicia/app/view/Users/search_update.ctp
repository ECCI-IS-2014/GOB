<h3>Datos del Usuario</h3>

<?php
echo $this->Form->create('User',array('action' => 'update'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$users['User']['id']));
echo $this->Form->input('first_name',array('label'=>'Nombre ','value'=>$users['User']['first_name']));
echo $this->Form->input('middle_name',array('label'=>'Apellido 1 ','value'=>$users['User']['middle_name']));
echo $this->Form->input('last_name',array('label'=>'Apellido 2 ','value'=>$users['User']['last_name']));
echo $this->Form->input('email',array('label'=>'correo ','value'=>$users['User']['email']));
echo $this->Form->input('country', array('empty'=>'Seleccionar','label'=>'Pa&iacutes','value'=>$users['User']['country'],
            'options' => array('Costa Rica'=> 'Costa Rica',
            'EE.UU' => 'EE.UU')));
echo $this->Form->input('city', array('empty'=>'Seleccionar','label'=>'Ciudad','value'=>$users['User']['city'],
            'options' => array(
                                               'CR' => "---Costa Rica---",
                                               'SJ' => "San Jose",
                                               'AJ' => "Alajuela",
                                               'HR' => "Heredia",
                                               'CG' => "Cartago",
                                               'GC' => "Guanacaste",
                                               'PU' => "Puntarenas",
                                               'LI' => "Limon",
                                               'EE' => "---EE.UU---",
                                               'AL'=>"Alabama",
                                               'AK'=>"Alaska",
                                               'AZ'=>"Arizona",
                                               'AR'=>"Arkansas",
                                               'CA'=>"California",
                                               'CO'=>"Colorado",
                                               'CT'=>"Connecticut",
                                               'DE'=>"Delaware",
                                               'DC'=>"District Of Columbia",
                                               'FL'=>"Florida",
                                               'GA'=>"Georgia",
                                               'HI'=>"Hawaii",
                                               'ID'=>"Idaho",
                                               'IL'=>"Illinois",
                                               'IN'=>"Indiana",
                                               'IA'=>"Iowa",
                                               'KS'=>"Kansas",
                                               'KY'=>"Kentucky",
                                               'LA'=>"Louisiana",
                                               'ME'=>"Maine",
                                               'MD'=>"Maryland",
                                               'MA'=>"Massachusetts",
                                               'MI'=>"Michigan",
                                               'MN'=>"Minnesota",
                                               'MS'=>"Mississippi",
                                               'MO'=>"Missouri",
                                               'MT'=>"Montana",
                                               'NE'=>"Nebraska",
                                               'NV'=>"Nevada",
                                               'NH'=>"New Hampshire",
                                               'NJ'=>"New Jersey",
                                               'NM'=>"New Mexico",
                                               'NY'=>"New York",
                                               'NC'=>"North Carolina",
                                               'ND'=>"North Dakota",
                                               'OH'=>"Ohio",
                                               'OK'=>"Oklahoma",
                                               'OR'=>"Oregon",
                                               'PA'=>"Pennsylvania",
                                               'RI'=>"Rhode Island",
                                               'SC'=>"South Carolina",
                                               'SD'=>"South Dakota",
                                               'TN'=>"Tennessee",
                                               'TX'=>"Texas",
                                               'UT'=>"Utah",
                                               'VT'=>"Vermont",
                                               'VA'=>"Virginia",
                                               'WA'=>"Washington",
                                               'WV'=>"West Virginia",
                                               'WI'=>"Wisconsin",
                                               'WY'=>"Wyoming"), 'disabled' => array('CR','EE')));
echo $this->Form->input('fact_address',array('label'=>'Direccion de Facturacion ','value'=>$users['User']['fact_address']));
echo $this->Form->input('password',array('label'=>'clave'));
echo $this->Form->input('identification',array('cedula'=>'last_name ','value'=>$users['User']['identification']));
echo $this->Form->input('birth_date', array('$users[User][birth_date]' => array('month' => 'Month','day'   => 'Day','year'  => 'Year'),'minYear' => date('Y')-130,'maxYear' => date('Y')));
//echo $this->Form->input('birth_date',array('label'=>'fecha nacimiento ','value'=>$users['User']['birth_date']));
echo $this->Form->input('username',array('label'=>'username ','value'=>$users['User']['username']));
if ($this->Session->read('Auth.User.role')==='admin'){
    echo $this->Form->input('role', array('label'=>'Rol','value'=>$users['User']['rol'],
		'options' => array('admin' => 'Admin', 'customer' => 'Usuario')
    ));
    }else{
        echo $this->Form->input('role', array('label'=>'Rol','value'=>$users['User']['rol'],
			'options' => array('customer' => 'Usuario')
    ));
}
echo $this->Form->end('Modificar usuario');

?>