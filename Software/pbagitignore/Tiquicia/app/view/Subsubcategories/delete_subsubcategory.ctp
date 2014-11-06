<fieldset>
<legend>Borrar subsubcategoria </legend>
<?php

echo $this->Form->create('Category',array('type'=>'file'));
$category = $selector['select_a']['Subsubcategory']['subsubcategory_id'];
echo $this->Form->input('subsubcategory_id', array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una Subsubcategoria. --',
		'label' => 'Subsubategor&iacutea'
	));
echo $this->Form->submit('Borrar Subsubcategoria', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>