
<fieldset>
<legend>Añadir subcategoria nueva</legend>
<?php

echo $this->Form->create('Subcategory',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('name',array('label' =>'Nombre de la subcategoria'));
echo $this->Form->submit('Agregar Subcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
