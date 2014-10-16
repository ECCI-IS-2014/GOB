
<h3>Datos del producto</h3>

<?php
echo $this->Form->create('Product',array('action' => 'delete'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$products['Product']['id']));
echo $this->Form->input('name',array('label'=>'name ','value'=>$products['Product']['name']));
echo $this->Form->input('type',array('label'=>'type ','value'=>$products['Product']['type']));
echo $this->Form->input('price',array('label'=>'price ','value'=>$products['Product']['price']));
echo $this->Form->input('weight',array('label'=>'weight ','value'=>$products['Product']['weight']));
echo '<h3>nombre de imagen:</h3> '.$products['Product']['filename'];
echo $this->Form->end('Eliminar Producto');
?>