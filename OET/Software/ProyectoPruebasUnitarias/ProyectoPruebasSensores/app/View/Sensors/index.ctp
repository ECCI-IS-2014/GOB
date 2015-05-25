<div class="sensors index">
	<h2><?php echo __('Sensors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('serial'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('type_'); ?></th>
			<th><?php echo $this->Paginator->sort('model_'); ?></th>
			<th><?php echo $this->Paginator->sort('installation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('removal_date'); ?></th>
			<th><?php echo $this->Paginator->sort('calibration_date'); ?></th>
			<th><?php echo $this->Paginator->sort('brand'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('provider'); ?></th>
			<th><?php echo $this->Paginator->sort('coordinate_x'); ?></th>
			<th><?php echo $this->Paginator->sort('coordinate_y'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_SENSOR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sensors as $sensor): ?>
	<tr>
		<td><?php echo h($sensor['Sensor']['id']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['serial']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['price']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['type_']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['model_']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['installation_date']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['removal_date']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['calibration_date']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['brand']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['description']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['provider']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['coordinate_x']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['coordinate_y']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sensor['Station']['id'], array('controller' => 'stations', 'action' => 'view', $sensor['Station']['id'])); ?>
		</td>
		<td><?php echo h($sensor['Sensor']['ID_SENSOR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sensor['Sensor']['id']), array(), __('Are you sure you want to delete # %s?', $sensor['Sensor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sensor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
