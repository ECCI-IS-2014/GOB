<fieldset>
<legend>Añadir palabra clave</legend>
<?php
echo $this->Form->create('Keyword');
echo $this->Form->hidden('product_id', array('value' => $product_id));
echo $this->Form->textarea('palabraclave', array('label' => 'Palabra Clave'));
echo $this->Form->submit('Añadir Palabra clave',array('escape'=>false));
echo $this->Form->end();
?>
</fieldset>