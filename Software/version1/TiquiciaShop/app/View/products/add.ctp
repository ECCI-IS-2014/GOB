
<fieldset>
<legend>Añadir nuevo producto</legend>
<?php

echo $this->Form->create('Producto',array('type'=>'file'));
echo $this->Form->input('nombre');
echo $this->Form->input('nombreArchivo',array('type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->input('tipo');
echo $this->Form->input('precio');
echo $this->Form->input('peso');
echo $this->Form->end('Añadir producto');

?>
</fieldset>