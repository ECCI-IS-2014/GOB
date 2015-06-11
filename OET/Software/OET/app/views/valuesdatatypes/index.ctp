<div class="valuesdatatypes index">
	<h2><?php __('Valuesdatatypes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('data_type_id');?></th>
			<th><?php echo $this->Paginator->sort('automaticdatalog_id');?></th>
			<th><?php echo $this->Paginator->sort('data_value');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($valuesdatatypes as $valuesdatatype):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $valuesdatatype['Valuesdatatype']['id']; ?>&nbsp;</td>
		<td>
			<?php debug($valuesdatatype['DataType']); ?>
			<?php echo $this->Html->link($valuesdatatype['DataType']['name'], array('controller' => 'data_types', 'action' => 'view', $valuesdatatype['DataType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($valuesdatatype['Automaticdatalog']['id'], array('controller' => 'automaticdatalogs', 'action' => 'view', $valuesdatatype['Automaticdatalog']['id'])); ?>
		</td>
		<td><?php echo $valuesdatatype['Valuesdatatype']['data_value']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $valuesdatatype['Valuesdatatype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $valuesdatatype['Valuesdatatype']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $valuesdatatype['Valuesdatatype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $valuesdatatype['Valuesdatatype']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type', true), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs', true), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog', true), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>