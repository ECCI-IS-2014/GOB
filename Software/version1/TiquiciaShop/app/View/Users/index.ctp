<!-- File: /app/View/Users/index.ctp -->

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Correo</th>
        <th>Identificacion</th>
        <th>Fecha de Nacimiento</th>
        <th>username</th>
        <th>role</th>
        <th>Eliminar</th>
        <th>Editar</th>
    </tr>
    <?php foreach ($users as $user): ?>

    <tr>

    <td><?php echo $user['User']['id']; ?></td>
    <td><?php echo $user['User']['first_name']; ?></td>
    <td><?php echo $user['User']['middle_name']; ?></td>
    <td><?php echo $user['User']['last_name']; ?></td>
    <td><?php echo $user['User']['email']; ?></td>
    <td><?php echo $user['User']['identification']; ?></td>
    <td><?php echo $user['User']['birth_date']; ?></td>
    <td><?php echo $user['User']['username']; ?></td>
    <td><?php echo $user['User']['role']; ?></td>
    <td><?php echo $this->Html->link('Eliminar Usuario', '/Users/search_delete/' . $user['User']['id']);?></td>
    <td><?php echo $this->Html->link('Editar Info Usuario', '/Users/search_update/' . $user['User']['id']);?></td>


    </tr>

    <?php endforeach; ?>
    </table>
    <?php echo $this->Html->link('Home', '/');?>