
<fieldset>
<legend>Añadir Producto nuevo</legend>
<?php

echo $this->Form->create('Product');
echo $this->Form->input('name');
echo $this->Form->input('type');
echo $this->Form->input('price');
echo $this->Form->input('weight');
echo $this->Form->input('keywords');
echo $this->Form->end('Agregar Producto');

?>
</fieldset>