<h3>Datos del Usuario</h3>

<?php
echo $this->Form->create('User',array('action' => 'update'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$users['User']['id']));
echo $this->Form->input('first_name',array('label'=>'Nombre ','value'=>$users['User']['first_name']));
echo $this->Form->input('middle_name',array('label'=>'Apellido 1 ','value'=>$users['User']['middle_name']));
echo $this->Form->input('last_name',array('label'=>'Apellido 2 ','value'=>$users['User']['last_name']));
echo $this->Form->input('email',array('label'=>'correo ','value'=>$users['User']['email']));
echo $this->Form->input('password',array('label'=>'clave','value'=>$users['User']['password']));
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