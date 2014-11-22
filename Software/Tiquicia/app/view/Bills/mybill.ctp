
<table>
    <tr>
        <th>Numero de factura</th>
        <th>Fecha de compra</th>
        <th>Estado de envio</th>


    </tr>
    <?php foreach ($bills as $bill): ?>
    <tr>

    <td><?php echo $bill['Bill']['id']; ?></td>
    <td><?php echo $bill['Bill']['date']; ?></td>
    <td><?php echo $bill['Bill']['status']; ?></td>


	</tr>

    <?php endforeach; ?>
    </table>
    <?php echo $this->Html->link('Inicio', '/');?>