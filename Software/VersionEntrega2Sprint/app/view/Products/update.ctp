
<h3>Introduzca el id del producto</h3>
<br>
<?php
echo $this->Form->create('Product',array('action' => 'searchUpdate'));
echo $this->Form->input('Product.id',array('type'=>'numeric','style'=>'width:250px; height:20px;'));

echo '<br>';
echo $this->Form->end('Buscar Producto');


?>


