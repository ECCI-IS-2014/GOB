
<fieldset>
<legend>Agregar direcci&oacuten de env&iacuteo</legend>
<?php

echo $this->Form->create('Address');
echo $this->Form->input('country', array('empty'=>'Seleccionar','label'=>'Pa&iacutes',
            'options' => array(
			'Costa Rica'=> 'Costa Rica',
            'USA' => 'USA')));
echo $this->Form->input('address', array('type' => 'textarea','label' =>  'Direcci&oacuten'));
echo $this->Form->submit('Agregar', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
