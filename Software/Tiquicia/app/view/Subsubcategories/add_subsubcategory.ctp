
<fieldset>
<legend>Añadir subsubcategoria nueva</legend>
<?php

echo $this->Form->create('Subsubcategory',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('name',array('label' =>'Nombre de la subsubcategoria'));
echo $this->Form->submit('Agregar Subsubcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
