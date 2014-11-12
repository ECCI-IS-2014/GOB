<!-- File: /app/View/Users/index.ctp -->

<table>
    <tr>
        <th>Tipo</th>
        <th>N&uacutemero tarjeta</th>
        <th>Mes Vencimiento</th>
		<th>A&ntildeo Vencimiento</th>
        <th>C&oacutedigo de seguridad</th>
		<th>Eliminar</th>
        <th>Editar</th>

    </tr>
    <?php foreach ($cards as $card): ?>

    <tr>

    <td><?php echo $card['Card']['type']; ?></td>
    <td><?php echo $card['Card']['number']; ?></td>
    <td><?php echo $card['Card']['expire_month']; ?></td>
	<td><?php echo $card['Card']['expire_year']; ?></td>
    <td><?php echo $card['Card']['sec_code']; ?></td>
	<td><?php echo $this->Html->link('Eliminar tarjeta', '/Cards/delete_card/' . $card['Card']['id']);?></td>
    <td><?php echo $this->Html->link('Editar tarjeta', '/Cards/update_card/' . $card['Card']['id']);?></td>

	</tr>

    <?php endforeach; ?>
    </table>
    <?php echo $this->Html->link('Inicio', '/');?>