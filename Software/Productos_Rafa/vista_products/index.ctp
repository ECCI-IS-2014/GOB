<fieldset>
<legend>Productos disponibles</legend>
<table>
    <tr>
        <th>Id</th>
        <th>Producto</th>
        <th>Precio</th>
    </tr>
<?php foreach ($products as $product): ?>

<tr>
<td><?php echo $product['Product']['id']; ?></td>
<td><?php echo $product['Product']['name']; ?></td>
<td><?php echo $product['Product']['price']; ?></td>
</tr>

<?php endforeach; ?>
</table>

</br>

<?php echo $this->Html->link('Añadir Producto', '/products/add');?>
</fieldset>