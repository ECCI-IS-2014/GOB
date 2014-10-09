<h1>Productos Disponibles</h1>
<?php foreach ($products as $product): ?>
<table>

<?php echo $product['Product']['name']; ?>
<?php echo " "; ?>
<?php echo $product['Product']['price']; ?>

</table>

</br>

<?php endforeach; ?>

</br>

<?php echo $this->Html->link('Añadir Producto', '/products/add');?>