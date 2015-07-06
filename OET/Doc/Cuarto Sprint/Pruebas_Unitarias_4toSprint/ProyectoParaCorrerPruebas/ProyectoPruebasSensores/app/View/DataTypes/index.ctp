<div class="dataTypes index">
	<h2><?php echo __('Data Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Sensor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Temporality'); ?></th>
			<th><?php echo $this->Paginator->sort('Id_Data_Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dataTypes as $dataType): ?>
	<tr>
		<td><?php echo h($dataType['DataType']['Id']); ?>&nbsp;</td>
		<td><?php echo h($dataType['DataType']['Name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataType['Sensor']['serial'], array('controller' => 'sensors', 'action' => 'view', $dataType['Sensor']['id'])); ?>
		</td>
		<td><?php echo h($dataType['DataType']['Temporality']); ?>&nbsp;</td>
		<td><?php echo h($dataType['DataType']['Id_Data_Type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dataType['DataType']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dataType['DataType']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dataType['DataType']['Id']), array(), __('Are you sure you want to delete # %s?', $dataType['DataType']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Data Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
