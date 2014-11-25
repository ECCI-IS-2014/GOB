
<table>
    <tr>
        <th>Numero de factura</th>
        <th>Nombre del producto</th>
        <th>Fecha de compra</th>
        <th>Estado de envio</th>
    </tr>
    <?php foreach ($bills as $bill): ?>
    <tr>
    <?php foreach ($bill['Sell'] as $sell): ?>
        <td><?php echo $sell['bill_id']; ?></td>
        <td><?php echo $sell['product_name']; ?></td>
        <td><?php echo $bill['Bill']['date']; ?></td>
        <td><?php echo $bill['Bill']['status']; ?></td>
    <tr>
    </tr>
    <?php endforeach; ?>
	</tr>

    <?php endforeach; ?>
    </table>
    <?php echo $this->Html->link('Inicio', '/');?>