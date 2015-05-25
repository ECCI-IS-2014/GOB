<div class="manualdatalogs index">
	<h2><?php echo __('Manualdatalogs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('recolection_date'); ?></th>
			<th><?php echo $this->Paginator->sort('data_'); ?></th>
			<th><?php echo $this->Paginator->sort('sensor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('datalog'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_MANUALDATALOGS'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($manualdatalogs as $manualdatalog): ?>
	<tr>
		<td><?php echo h($manualdatalog['Manualdatalog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manualdatalog['DataType']['id'], array('controller' => 'data_types', 'action' => 'view', $manualdatalog['DataType']['id'])); ?>
		</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['recolection_date']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['data_']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manualdatalog['Sensor']['serial'], array('controller' => 'sensors', 'action' => 'view', $manualdatalog['Sensor']['id'])); ?>
		</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['datalog']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manualdatalog['Station']['station'], array('controller' => 'stations', 'action' => 'view', $manualdatalog['Station']['id'])); ?>
		</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['ID_MANUALDATALOGS']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $manualdatalog['Manualdatalog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), array(), __('Are you sure you want to delete # %s?', $manualdatalog['Manualdatalog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
