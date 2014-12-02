<?php echo "<h1>Datos Usuario</h1>"; ?>


<table>
    <tr>
        <th>Nombre</th>
        <th>Numero Tarjeta</th>
        <th>Fecha de Vencimiento</th>
        <th></th>
    </tr>
    <tr>
    <?php echo $this->Form->create('User', array('action' => 'edit')); ?>
    <?php foreach ($users as $user): ?>



    <td><?php echo $user['nombre']; ?></td>
    <td><?php echo $user['numTarjeta']; ?></td>
    <td><?php echo $user['fechaVencimiento']; ?></td>
    <?php echo $this->Form->input('id',array('value'=>$user['id'],'type'=>'hidden'));?>
    <td><?php echo $this->Form->input('saldo',array('value'=>$user['saldo']));?></td>


    <?php endforeach; ?>
    </tr>
    </table>
<?php
echo $this->Form->submit('Actualizar Saldo');
		echo $this->Form->end();?>

<br>
 <?php echo $this->Html->link('INICIO', '/');?>