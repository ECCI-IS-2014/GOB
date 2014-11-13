<!-- File: /app/View/Users/index.ctp -->

<table>
    <tr>
        <th>Fecha de Compra</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Precio Total</th>

    </tr>
    <?php foreach ($bills as $bill): ?>

    <tr>

    <td><?php echo $bill['Bill']['date']; ?></td>
    <td><?php echo $bill['Bill']['product_name']; ?></td>
    <td><?php echo $bill['Bill']['quantity']; ?></td>
    <td><?php echo "$"; echo $bill['Bill']['price']; ?></td>
    <td><?php
            $total = $bill['Bill']['price']*$bill['Bill']['quantity'];
            echo "$"; echo $total;
         ?>
	</tr>

    <?php endforeach; ?>
    </table>
    <?php echo $this->Html->link('Imprimir Factura', array('controller' => 'Bills', 'action' => 'index'), array('class' => 'btn btn-success'));?>