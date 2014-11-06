
<fieldset>
<legend>Eliminar subcategoria</legend>
<?php

echo $this->Form->create('Subcategory',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('subcategory_id',array('empty' => 'Seleccionar','label' => 'Subcategoria'));
echo $this->Form->submit('Eliminar Subcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
