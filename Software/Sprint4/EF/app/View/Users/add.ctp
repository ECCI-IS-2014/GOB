
<fieldset>
<legend>Crear nueva cuenta</legend>
<?php

echo $this->Form->create('User',array('action'=>'add'));

echo $this->Form->input('nombre',array('label' =>'Nombre'));
echo $this->Form->input('apellido1',array('label' =>'Primer apellido'));
echo $this->Form->input('apellido2',array('label' =>'Segundo apellido'));
echo $this->Form->input('cedula',array('label' =>'Cedula'));
echo $this->Form->input('fecNacimiento',
    array(
        'type' => 'date',
        'label' => 'Fecha de nacimiento:<span></span>',
        'dateFormat' => 'MDY',
        'empty' => array(
            'month' => 'Month',
            'day'   => 'Day',
            'year'  => 'Year'
        ),
        'minYear' => date('Y')-130,
        'maxYear' => date('Y'),
        'options' => array('1','2')
    )
);

echo $this->Form->input('telefono',array('label' =>'Telefono'));
echo $this->Form->input('direccion',array('label' =>'Direccion'));

echo $this->Form->input('contrasenia',array('type'=>'password','label' =>'contrasenia al menos de 10 digitos'));

echo $this->Form->input('numTarjeta',array('label' =>'los 16 digitos de la tarjeta'));
echo $this->Form->input('pin',array('type'=>'password','label' =>'pin de 4 digitos de la tarjeta'));
echo $this->Form->input('tipoMoneda',array('label' =>'tipo de moneda'));
echo $this->Form->input('fechaVencimiento',
    array(
        'type' => 'date',
        'label' => 'Fecha de vencimiento:<span></span>',
        'dateFormat' => 'MDY',
        'empty' => array(
            'month' => 'Month',
            'day'   => 'Day',
            'year'  => 'Year'
        ),
        'minYear' => date('Y'),
        'maxYear' => date('Y')+40,
        'options' => array('1','2')
    )
);
echo $this->Form->input('saldo',array('type' => 'hidden', 'value'=>rand(5000,300000)));

echo $this->Form->end('Crear Cuenta');

?>
</fieldset>