
<h3>¿Seguro que desea  eliminar producto?</h3>

<?php
echo $this->Form->create('Product',array('action' => 'delete'));
echo $this->Form->input('id',array('label'=>'id ','value'=>$products['Product']['id']));
echo $products['Product']['name']."<br/><br/>";?>
<h4>
<?php echo "=>Descripción producto: " ; ?>
</h4>

<?php
echo $products['Product']['type'];?>
<br/>
<br/>
<?php
echo '<h4>=>Imagen del producto:</h4> ';
echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],array('alt'=>$products['Product']['name'],'width'=>'200'));
echo $this->Form->end('Eliminar Producto');
echo $this->Form->button('Volver',
      array('onclick' => "location.href='".$this->Html->url('/products/')."'"));
?>