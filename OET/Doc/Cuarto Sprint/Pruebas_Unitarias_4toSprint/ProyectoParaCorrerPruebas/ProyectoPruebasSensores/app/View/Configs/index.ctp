<div class="configs index">
	<h2><?php echo __('Configs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('csv_columns'); ?></th>
			<th><?php echo $this->Paginator->sort('habilitado'); ?></th>
			<th><?php echo $this->Paginator->sort('configuration_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($configs as $config): ?>
	<tr>
		<td><?php echo h($config['Config']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($config['DataType']['Name'], array('controller' => 'data_types', 'action' => 'view', $config['DataType']['Id'])); ?>
		</td>
		<td><?php echo h($config['Config']['csv_columns']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['habilitado']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($config['Configuration']['station_id'], array('controller' => 'configurations', 'action' => 'view', $config['Configuration']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $config['Config']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $config['Config']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $config['Config']['id']), array(), __('Are you sure you want to delete # %s?', $config['Config']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('controller' => 'configurations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuration'), array('controller' => 'configurations', 'action' => 'add')); ?> </li>
	</ul>
</div>
