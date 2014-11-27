<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
    <?php echo $this->Html->link('Inicio', '/');?>
        <legend><?php echo __('Agregar Usuario'); ?></legend>
        <?php echo $this->Form->input('username' ,array('label' =>'Nombre de Usuario'));
         echo $this->Form->input('password',array('label' =>'Contraseña'));
         echo $this->Form->input('first_name',array('label' =>'Nombre'));
         echo $this->Form->input('middle_name',array('label' =>'Primer Apellido'));
         echo $this->Form->input('last_name',array('label' =>'Segundo Apellido'));
         echo $this->Form->input('identification',array('label' =>'Cedula'));
         echo $this->Form->input('birth_date',array('label' =>'Fecha nacimiento'), array('empty' => array('month' => 'Month','day'   => 'Day','year'  => 'Year'),'minYear' => date('Y')-130,'maxYear' => date('Y')));
		 echo $this->Form->input('email',array('label' =>'Correo'));
		 echo $this->Form->input('country', array('empty'=>'Seleccionar','label'=>'Pa&iacutes',
                     'options' => array(
         			'Costa Rica'=> 'Costa Rica',
                     'EE.UU' => 'EE.UU')));
		 echo $this->Form->input('city', array('empty'=>'Seleccionar','label'=>'Ciudad',
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
		 echo $this->Form->input('fact_address',array('label' =>'Direccion de Facturaci&oacuten'));
		 if ($this->Session->read('Auth.User.role')==='admin'){
            echo $this->Form->input('role', array('label'=>'Rol',
                'options' => array('admin' => 'Admin', 'customer' => 'Usuario')
            ));
         }else{
            echo $this->Form->input('role', array('label'=>'Rol',
                            'options' => array('customer' => 'Usuario')
                        ));
         }
		
		
    ?>
    </fieldset>
<?php	echo $this->Form->submit('Registrar tarjeta', array('name' => 'submit2'));
		echo $this->Form->submit('Registrarse', array('name' => 'submit1'));
		echo $this->Form->end(); ?>
</div>

