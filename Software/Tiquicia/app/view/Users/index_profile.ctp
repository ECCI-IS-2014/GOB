<?php echo $this->Form->create('User',array('action' => 'index_profile'));?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Correo</th>
        <th>Direccion de Facturacion</th>
        <th>Identificacion</th>
        <th>Fecha de Nacimiento</th>
        <th>Nombre de usuario</th>
        <th>Rol</th>
        <th>Eliminar</th>
        <th>Editar</th>
    </tr>
    <?php foreach ($users as $user): ?>

    <tr>
    <td><?php echo $user['User']['first_name']; ?></td>
    <td><?php echo $user['User']['middle_name']; ?></td>
    <td><?php echo $user['User']['last_name']; ?></td>
    <td><?php echo $user['User']['email']; ?></td>
    <td><?php echo $user['User']['fact_address']; ?></td>
    <td><?php echo $user['User']['identification']; ?></td>
    <td><?php echo $user['User']['birth_date']; ?></td>
    <td><?php echo $user['User']['username']; ?></td>
    <td><?php echo $user['User']['role']; ?></td>
    <td><?php echo $this->Html->link('Eliminar Usuario', '/Users/search_delete/' . $user['User']['id']);?></td>
    <td><?php echo $this->Html->link('Editar Info Usuario', '/Users/search_update/' . $user['User']['id']);?></td>
	</tr>

    <?php endforeach; ?>
    </table>
	<?php echo $this->Form->submit('Mis tarjetas', array('name' => 'submit1'));?>
	<?php echo $this->Form->end();?>
    <?php echo $this->Html->link('Inicio', '/');?>