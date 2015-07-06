<div class="valuesdatatypes index">
	<h2><?php echo __('Valuesdatatypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_type_Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Automaticdatalog_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Data_value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($valuesdatatypes as $valuesdatatype): ?>
	<tr>
		<td><?php echo h($valuesdatatype['Valuesdatatype']['Id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($valuesdatatype['data_type'][''], array('controller' => 'data_types', 'action' => 'view', $valuesdatatype['data_type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($valuesdatatype['Automaticdatalog']['id'], array('controller' => 'automaticdatalogs', 'action' => 'view', $valuesdatatype['Automaticdatalog']['id'])); ?>
		</td>
		<td><?php echo h($valuesdatatype['Valuesdatatype']['Data_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $valuesdatatype['Valuesdatatype']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $valuesdatatype['Valuesdatatype']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $valuesdatatype['Valuesdatatype']['Id']), array(), __('Are you sure you want to delete # %s?', $valuesdatatype['Valuesdatatype']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Valuesdatatype'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs'), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog'), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
