
<fieldset>
<legend>Añadir Producto nuevo</legend>
<?php

echo $this->Form->create('Product',array('type'=>'file'));
echo $this->Form->input('name');
echo $this->Form->input('filename',array('type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->input('type');
echo $this->Form->input('price');
echo $this->Form->input('weight');
echo $this->Form->end('Agregar Producto');

?>
</fieldset>