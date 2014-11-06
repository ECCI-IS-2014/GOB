<fieldset>
<legend>Eliminar categoria </legend>
<?php
echo $this->Form->create('Category',array('type'=>'file'));
$category = $selector['select_a']['Category']['category_id'];
echo $this->Form->input('category_id', array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una categoría. --',
		'label' => 'Categor&iacutea'
	));

	echo $this->Form->submit('Eliminar Categoria', array('name' => 'submit1'));
    echo $this->Form->end();
	?>
</fieldset>