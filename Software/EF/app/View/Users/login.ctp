
<fieldset>
<legend>Ingresar</legend>
<?php

echo $this->Form->create('User',array('type'=>'file','action'=>'login'));
echo $this->Form->input('nombre',array('label' =>'Cedula'));
echo $this->Form->input('nombre',array('label' =>'Contrasenia'));


echo $this->Form->end('Ingresar');

?>
</fieldset>