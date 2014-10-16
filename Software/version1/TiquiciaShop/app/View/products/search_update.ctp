
<h3>Datos del producto</h3>

<?php

echo $this->Form->create('Product',array('action' => 'update','type'=>'file'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$products['Product']['id']));
echo $this->Form->input('name',array('label'=>'name','value'=>$products['Product']['name']));

echo $this->Form->input('category', array(
            'options' => array('Tennis_de_mesa'=> 'Tennis de mesa',
            'Volleyball' => 'VolleyBall',
            'Baseball' => 'Baseball',
            'Ciclismo' => 'Ciclismo',
            'Futbol' => 'Futbol',
            'Baloncesto' => 'Baloncesto',
            'Otros' => 'Otros')));

echo $this->Form->input('filename',array('type'=>'file','value'=>$products['Product']['filename']));
echo $this->Form->input('dir',array('type'=>'hidden','value'=>$products['Product']['dir']));

echo $this->Form->input('type',array('label'=>'type ','value'=>$products['Product']['type']));
echo $this->Form->input('price',array('label'=>'price ','value'=>$products['Product']['price']));
echo $this->Form->input('weight',array('label'=>'weight ','value'=>$products['Product']['weight']));
echo $this->Form->input('keywords',array('label'=>'keyword','value'=>$products['Product']['keywords']));

echo $this->Form->end('Actualizar Producto');
?>