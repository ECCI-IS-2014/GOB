
<fieldset>
<legend>Eliminar subsubcategoria</legend>
<?php

echo $this->Form->create('Subsubcategory',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('subsubcategory_id',array('empty' => 'Seleccionar','label' => 'Subsubategoria'));
echo $this->Form->submit('Eliminar Subsubcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
