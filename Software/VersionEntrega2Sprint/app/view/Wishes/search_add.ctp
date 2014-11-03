<h3>¿Seguro que desea  Añadir producto a la lista de deseos?</h3>
<table>
    <tr>
        <th>Nombre Producto</th>
        <th>Imagen Producto</th>
        <th>Añadir</th>
    </tr>
<tr>
<td><?php
echo $products['Product']['name']."<br/><br/>";?>
</td>

<td> <?php echo $this->Html->image('uploads/product/filename/'.$products['Product']['filename'],
     array('alt'=>$products['Product']['name'],'width'=>'200')); ?>
</td>

<td>
<?php
echo $this->Form->create('Wish',array('action' => 'add'));
echo $this->Form->hidden('product_id',array('value'=>$products['Product']['id']));
echo $this->Form->hidden('user_id', array('value' => $users['User']['id']));?>
<?php echo $this->form->submit('Añadir',array('escape'=>false));
echo $this->Form->end(); ?>
</td>
</tr>


</table>