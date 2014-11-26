
<fieldset>
<legend>Añadir categoria nueva</legend>
<?php

echo $this->Form->create('Category',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('name',array('label' =>'Nombre de la categoria'));
echo $this->Form->input('filename',array('label'=>'Nombre de Archivo', 'type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->submit('Agregar Categoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
