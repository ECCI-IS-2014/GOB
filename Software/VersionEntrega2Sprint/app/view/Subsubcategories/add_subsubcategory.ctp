
<fieldset>
<legend>Añadir subsubcategoria nueva</legend>
<?php

echo $this->Form->create('Subsubcategory',array('type'=>'file'),array('/url' => "/add_subsubcategory"));
// select 1
$category = $selector['select_a']['Subsubcategory']['category_id'];
echo $this->Form->input(
	'Subsubcategory.category_id',
	array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una categoría. --',
		'label' => 'Categoría'
	)
);

// select 2
$subcategory = $selector['select_a']['Subsubcategory']['subcategory_id'];
if(!$subcategory){
	$subcategoryConfig = array('options' => $subcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-categoría. --', 'label' => 'Sub-Categoría','disabled'=>'disabled');
}else{
	$subcategoryConfig = array('options' => $subcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-categoría. --', 'label' => 'Sub-Categoría');
}
echo $this->Form->input('Subsubcategory.subcategory_id',$subcategoryConfig);
echo $this->Form->submit('Seleccionar', array('name' => 'submit2'));
echo $this->Form->input('name',array('label' =>'Nombre de la subsubcategoria'));
echo $this->Form->submit('Agregar Subsubcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
