<?php echo $this->Html->link('Home', '/');?>

<div class="stations index">
	<h2><?php __('Stations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_station');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_x');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_y');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($stations as $station):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $station['Station']['id_station']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['description']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['coordinate_x']; ?>&nbsp;</td>
		<td><?php echo $station['Station']['coordinate_y']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $station['Station']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $station['Station']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Station', true), array('action' => 'add')); ?></li>
	</ul>
</div>