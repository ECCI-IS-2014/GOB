<div class="usuarios index">
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'id';?></th>
			<th><?php echo 'name';?></th>
			<th><?php echo 'role';?></th>
			<th><?php echo 'email';?></th>
			<th><?php echo 'password';?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['Usuario']['id']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['name']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['role']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['email']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['password']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	</p>

	
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?></li>
	</ul>
</div>