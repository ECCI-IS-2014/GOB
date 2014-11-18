
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
echo $this->Form->input('volumen',array('label' =>'Volumen'));
echo $this->Form->input('stock',array('label' =>'Stock'));
echo $this->Form->input('keywords',array('label' =>'Palabras claves'));
echo $this->Form->input('state',array('value'=>'1','type'=>'hidden'));
echo $this->Form->input('category_id',array('empty' => 'Seleccionar'));
echo $this->Form->input('subcategory_id',array('empty' => 'Seleccionar'));
echo $this->Form->input('subsubcategory_id',array('empty' => 'Seleccionar'));
echo $this->Form->input('filename',array('label'=>'Nombre de Archivo', 'type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->submit('Agregar Producto', array('name' => 'submit1'));
echo $this->Form->end();

?>
</fieldset>
