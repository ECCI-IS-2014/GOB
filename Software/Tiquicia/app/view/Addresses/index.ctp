<table>
    <tr>
        <th>Pa&iacutes</th>
        <th>Cuidad</th>
        <th>Direcci&oacuten</th>
		<th>Eliminar</th>
        <th>Editar</th>
    </tr>
    <?php foreach ($addresses as $address): ?>
		<tr>
			<td><?php echo $address['Address']['country']; ?></td>
			<td><?php echo $address['Address']['city']; ?></td>
			<td><?php echo $address['Address']['address']; ?></td>

			<td><?php echo $this->Html->link('Eliminar', '/Addresses/delete_address/' . $address['Address']['id']);?></td>
			<td><?php echo $this->Html->link('Editar', '/Addresses/update_address/' . $address['Address']['id']);?></td>
		</tr>

    <?php endforeach; ?>
</table>
<a href="/Tiquicia/Addresses/add_address/" class="btn btn-success btn-default active" role="button">Añadir Direcci&oacuten</a>