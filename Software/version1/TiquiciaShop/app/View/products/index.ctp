<fieldset>
<legend>Productos disponibles</legend>
<?php echo $this->Form->input('Buscar por palabra clave');?>
<br/>
<?php echo $this->Form->submit('Buscar');?>
<br/>
<table>
    <tr>
        <th>Id</th>
        <th>Categoria</th>
        <th>Producto</th>
        <th>Imagen</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Palabras Claves</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </tr>
<?php foreach ($products as $product): ?>
<tr>
<td><?php echo $product['Product']['id']; ?></td>
<td><?php echo $product['Product']['category']; ?></td>
<td><?php echo $product['Product']['name']; ?></td>
<td><?php echo $this->Html->image('uploads/product/filename/'.$product['Product']['filename'],array('alt'=>$product['Product']['name'],'width'=>'200')); ?></td>
<td><?php echo $product['Product']['type']; ?></td>
<td><?php echo $product['Product']['price']; ?></td>
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