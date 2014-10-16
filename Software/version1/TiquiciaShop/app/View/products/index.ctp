<fieldset>
<legend>Productos Disponibles</legend>
<?php echo $this->Form->input('Buscar');
echo $this->Form->end('Buscar');?>
<table>
    <tr>
        <th>Id</th>
        <th>Producto</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Palabras Claves</th>
        <th>Añadir Palabra Clave</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
<?php foreach ($products as $product): ?>

<tr>
<td><?php echo $product['Product']['id']; ?></td>
<td><?php echo $product['Product']['name']; ?></td>
<td><?php echo $this->Html->image('uploads/product/filename/'.$product['Product']['filename'],array('alt'=>$product['Product']['name'],'width'=>'200')); ?></td>
<td><?php echo $product['Product']['price']; ?></td>
<ul>
    <td>
    <?php foreach ($product['Keyword'] as $keyword): ?>
        <?php echo $keyword['palabraclave']; ?>
    <?php endforeach; ?>
    </td>
    <td><li><?php echo $this->Html->link('Añadir palabra clave', '/keywords/add/' . $product['Product']['id']);?></li></td>
</ul>
</tr>

<?php endforeach; ?>
</table>

</br>

<?php echo $this->Html->link('Add product', '/products/add');?>
<br>
<?php echo $this->Html->link('Home', '/');?>
</fieldset>