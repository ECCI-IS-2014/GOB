
<fieldset>
<legend>Añadir Producto nuevo</legend>
<?php

echo $this->Form->create('Product',array('type'=>'file'),array('/url' => "/add"));
echo $this->Form->input('name',array('label' =>'Nombre'));
echo $this->Form->input('type', array('type' => 'textarea','label' =>  'Descripción del producto'));
echo $this->Form->input('price',array('label' =>'Precio'));
echo $this->Form->input('weight',array('label' =>'Peso'));
echo $this->Form->input('unit', array('label'=>'Unidad',
            'options' => array('gramos'=> 'gramos',
            'Kilogramos' => 'Kilogramos',
            'Otros' => 'Otros')));
echo $this->Form->input('volumen');
echo $this->Form->input('keywords',array('label' =>'Palabras claves'));
echo $this->Form->input('state',array('value'=>'1','type'=>'hidden'));

############################################# Selector a ####################################################
// select 1
echo $this->Html->link('Nueva Categoria', '/Categories/add_category');?> <br><?php
echo $this->Html->link('Eliminar Categoria', '/Categories/delete_category');
$category = $selector['select_a']['Product']['category_id'];
echo $this->Form->input(
	'Product.category_id',
	array(
		'options' => $category,
		'type' => 'select',
		'empty' => '-- Seleciona una categoría. --',
		'label' => 'Categoría'
	)
);

// select 2
echo $this->Html->link('Nueva Subcategoria', '/Subcategories/add_subcategory');?> <br><?php
echo $this->Html->link('Eliminar Subcategoria', '/Subcategories/delete_subcategory');
$subcategory = $selector['select_a']['Product']['subcategory_id'];
if(!$subcategory){
	$subcategoryConfig = array('options' => $subcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-categoría. --', 'label' => 'Sub-Categoría','disabled'=>'disabled');
}else{
	$subcategoryConfig = array('options' => $subcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-categoría. --', 'label' => 'Sub-Categoría');
}
echo $this->Form->input('Product.subcategory_id',$subcategoryConfig);

// select 3
echo $this->Html->link('Nueva Subsubcategoria', '/Subsubcategories/add_subsubcategory');?> <br><?php
echo $this->Html->link('Eliminar Subsubcategoria', '/Subsubcategories/delete_subsubcategory');
$subsubcategory = $selector['select_a']['Product']['subsubcategory_id'];
if(!$subsubcategory){
	$subsubcategoryConfig = array('options' => $subsubcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-sub-categoría. --', 'label' => 'Sub-Sub-Categoría','disabled'=>'disabled');
}else{
	$subsubcategoryConfig = array('options' => $subsubcategory, 'type' => 'select', 'empty' => '-- Seleciona una sub-sub-categoría. --', 'label' => 'Sub-Sub-Categoría');
}
echo $this->Form->input('Product.subsubcategory_id',$subsubcategoryConfig);
echo $this->Form->submit('Seleccionar', array('name' => 'submit2'));

echo $this->Form->input('filename',array('label'=>'Nombre de Archivo', 'type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->submit('Agregar Producto', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
