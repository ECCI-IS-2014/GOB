<fieldset>
<legend>Borrar subcategoria </legend>
<?php

echo $this->Form->create('Subcategory',array('type'=>'file'));
$category = $selector['select_a']['Subcategory']['subcategory_id'];
echo $this->Form->input('category_id', array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una Subcategoría. --',
		'label' => 'Subategor&iacutea'
	));
echo $this->Form->submit('Borrar Subcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>