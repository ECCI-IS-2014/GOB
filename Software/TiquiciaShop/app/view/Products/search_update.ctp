
<h3>Datos del producto</h3>

<?php

echo $this->Form->create('Product',array('action' => 'update','type'=>'file'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$products['Product']['id']));
echo $this->Form->input('name',array('label'=>'Nombre','value'=>$products['Product']['name']));

echo $this->Form->input('category', array(
            'options' => array('Tenis_de_mesa'=> 'Tenis de mesa',
            'Volleyball' => 'VolleyBall',
            'Baseball' => 'Baseball',
            'Ciclismo' => 'Ciclismo',
            'Futbol' => 'Futbol',
            'Baloncesto' => 'Baloncesto',
            'Otros' => 'Otros'
             ),'value' =>$products['Product']['category'],'label'=>'Categoría'));
echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200'));
echo $this->Form->input('filename',array('type'=>'file','value'=>$products['Product']['filename']));
echo $this->Form->input('dir',array('type'=>'hidden','value'=>$products['Product']['dir']));

echo $this->Form->input('type',array('label'=>'Descripción del producto ','value'=>$products['Product']['type']));
echo $this->Form->input('price',array('label'=>'Precio ','value'=>$products['Product']['price']));
echo $this->Form->input('stock',array('label'=>'Stock ','value'=>$products['Product']['stock']));
echo $this->Form->input('weight',array('label'=>'Peso ','value'=>$products['Product']['weight']));
echo $this->Form->input('keywords',array('label'=>'Palabra Clave','value'=>$products['Product']['keywords']));

echo $this->Form->end('Actualizar Producto');
echo $this->Form->button('Volver',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>