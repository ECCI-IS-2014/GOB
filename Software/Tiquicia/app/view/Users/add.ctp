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
         echo $this->Form->input('birth_date', array('$users[User][birth_date]' => array('month' => 'Month','day'   => 'Day','year'  => 'Year'),'minYear' => date('Y')-130,'maxYear' => date('Y')));
         echo $this->Form->input('email',array('label' =>'Correo'));
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

