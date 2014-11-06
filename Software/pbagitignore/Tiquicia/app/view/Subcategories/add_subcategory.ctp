
<fieldset>
<legend>Añadir subcategoria nueva</legend>
<?php

echo $this->Form->create('Subcategory',array('type'=>'file'),array('/url' => "/add_subcategory"));
$category = $selector['select_a']['subcategory']['category_id'];
echo $this->Form->input(
	'Subcategory.category_id',
	array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una categoría. --',
		'label' => 'Categoría'
	)
);
echo $this->Form->input('name',array('label' =>'Nombre de la subcategoria'));
echo $this->Form->submit('Agregar Subcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
