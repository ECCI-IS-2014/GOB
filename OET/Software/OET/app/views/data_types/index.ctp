<div class="dataTypes index">
	<h2><?php __('Data Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('sensor_id');?></th>
			<th><?php echo $this->Paginator->sort('temporality');?></th>
			<th><?php echo $this->Paginator->sort('id_data_type');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($dataTypes as $dataType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dataType['DataType']['id']; ?>&nbsp;</td>
		<td><?php echo $dataType['DataType']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dataType['Sensor']['id'], array('controller' => 'sensors', 'action' => 'view', $dataType['Sensor']['id'])); ?>
		</td>
		<td><?php echo $dataType['DataType']['temporality']; ?>&nbsp;</td>
		<td><?php echo $dataType['DataType']['id_data_type']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dataType['DataType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dataType['DataType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dataType['DataType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dataType['DataType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Data Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>

	</ul>
</div>