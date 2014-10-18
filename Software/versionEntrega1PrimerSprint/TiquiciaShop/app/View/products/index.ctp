<fieldset>
<legend>Productos disponibles</legend>
 <hr />
<p>=>Buscar productos por palabra clave o descripción</p>
<?php
    echo $this->Form->create();
    echo $this->Form->input('keywords',array('label'=>'Palabras claves'));
    echo $this->Form->input('type',array('label'=>'Descripción del producto'));
    echo $this->Form->submit(__('Buscar'));
    echo $this->Form->end();
?>
<br/>
 <hr />
<p>
	<?php
	echo $this->Paginator->counter( 'Mostrando <b><u>{:current}</u></b> registros  de
         <b><u>{:count}</b></u> en total');
	?>	</p>
	 <hr />
<table>
    <tr>
        <th>Categoria</th>
        <th>Producto</th>
        <th>Imagen</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Volumen</th>
        <th>Peso</th>
        <th>Palabras Claves</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </tr>
<?php foreach ($products as $product): ?>
<tr>
<td><?php echo $product['Product']['category']; ?></td>
<td><?php echo $product['Product']['name']; ?></td>
<td><?php echo $this->Html->image('uploads/product/filename/'.$product['Product']['filename'],array('alt'=>$product['Product']['name'],'width'=>'200')); ?></td>
<td><?php /*echo $product['Product']['type'];*/ ?></td>
<td><?php echo $product['Product']['price']; ?></td>
<td><?php echo $product['Product']['volumen']; ?></td>
<td><?php echo $product['Product']['weight']; ?></td>
<ul>
    <td>
        <li><?php echo $product['Product']['keywords']; ?></li>
    </td>
    <td><?php echo $this->Html->link('Actualizar Producto',array("controller" => "Products",
                                    "action" => "searchUpdate",
                                    $product['Product']['id']));?></td>

    <td><?php echo $this->Html->link('Borrar Producto',array("controller" => "Products",
                                        "action" => "searchDelete",
                                        $product['Product']['id']));?></td>


</ul>


<?php endforeach; ?>
</tr>
</table>

</br>

<?php echo $this->Html->link('Añadir Producto', '/products/add');?>
<br>
<?php echo $this->Html->link('Home', '/');?>
</fieldset>