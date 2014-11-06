
<fieldset>
<legend>Eliminar categoria</legend>
<?php

echo $this->Form->create('Category',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('category_id',array('empty' => 'Seleccionar','label' => 'Categoria'));
echo $this->Form->submit('Eliminar Categoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
