<table>
    <tr>
        <th>Pa&iacutes</th>
        <th>Direcci&oacuten</th>
    </tr>
    <?php foreach ($addresses as $address): ?>

		<tr>
			<td><?php echo $address['Address']['country']; ?></td>
			<td><?php echo $address['Address']['address']; ?></td>
		</tr>

    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('Inicio', '/');?>