
<fieldset>
<legend>Registrar tarjeta</legend>
<?php

echo $this->Form->create('Card',array('type'=>'file'));
echo $this->Form->input('type', array('empty'=>'Seleccionar','label'=>'Tipo',
            'options' => array('Visa'=> 'Visa',
            'MasterCard' => 'MasterCard',
            'AmericanExpress' => 'AmericanExpress')));
echo $this->Form->input('number',array('label' =>'Numero de tarjeta'));
echo $this->Form->input('expire_date', array(
	'empty'=>'-',
    'label' => 'Fecha vencimiento',
    'dateFormat' => 'DMY',
    'minYear' => date('Y'),
    'maxYear' => date('Y') + 30,
));
echo $this->Form->input('sec_code',array('label' =>'Numero de seguridad'));
echo $this->Form->submit('Agregar tarjeta', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
