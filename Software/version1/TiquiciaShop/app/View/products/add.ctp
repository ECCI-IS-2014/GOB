
<fieldset>
<legend>Añadir Producto nuevo</legend>
<?php

echo $this->Form->create('Product',array('type'=>'file'));
echo $this->Form->input('name');
echo $this->Form->input('category', array(
            'options' => array('Tennis_de_mesa'=> 'Tennis de mesa',
            'Volleyball' => 'VolleyBall',
            'Baseball' => 'Baseball',
            'Ciclismo' => 'Ciclismo',
            'Futbol' => 'Futbol',
            'Baloncesto' => 'Baloncesto',
            'Otros' => 'Otros')));
echo $this->Form->input('filename',array('type'=>'file'));
echo $this->Form->input('dir',array('type'=>'hidden'));
echo $this->Form->input('type', array('type' => 'textarea','label' =>  'Descripción del producto'));
echo $this->Form->input('price');
echo $this->Form->input('weight');
echo $this->Form->input('keywords');
echo $this->Form->end('Agregar Producto');

?>
</fieldset>