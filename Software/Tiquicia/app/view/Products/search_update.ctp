
<h3>Datos del producto</h3>

<?php

echo $this->Form->create('Product',array('action' => 'update','type'=>'file'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$products['Product']['id']));
echo $this->Form->input('name',array('label'=>'Nombre','value'=>$products['Product']['name']));
echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200'));
echo $this->Form->input('filename',array('type'=>'file','value'=>$products['Product']['filename']));
echo $this->Form->input('dir',array('type'=>'hidden','value'=>$products['Product']['dir']));

echo $this->Form->input('type',array('label'=>'Descripción del producto ','value'=>$products['Product']['type']));
echo $this->Form->input('volumen',array('label'=>'Volumen ','value'=>$products['Product']['volumen']));
echo $this->Form->input('price',array('label'=>'Precio ','value'=>$products['Product']['price']));
echo $this->Form->input('stock',array('label'=>'Stock ','value'=>$products['Product']['stock']));
echo $this->Form->input('weight',array('label'=>'Peso ','value'=>$products['Product']['weight']));
echo $this->Form->input('keywords',array('label'=>'Palabra Clave','value'=>$products['Product']['keywords']));

if($products['Product']['state'] == 1){
echo $this->Form->input('state',array('label'=>'Disponible','type' => 'checkbox','checked' => 'true' ));
}
else {
echo $this->Form->input('state',array('label'=>'Disponible','type' => 'checkbox' ));
}
echo $this->Form->input('category_id',array('value'=>$products['Product']['category_id']['name']));
echo $this->Form->input('subcategory_id',array('value'=>$products['Product']['subcategory_id']['name']));
echo $this->Form->input('subsubcategory_id',array('value'=>$products['Product']['subsubcategory_id']['name']));
echo $this->Form->submit('Actualizar Producto', array('name' => 'submit1'));
echo $this->Form->end();
echo $this->Form->button('Volver',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>