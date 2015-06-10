<?php echo $this->Html->link('Home', '/');?>
<div class="manualdatalogs index">
	<h2><?php __('Manualdatalogs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_manualdatalogs');?></th>
            <th><?php echo $this->Paginator->sort('recolection_date');?></th>
            <th><?php echo $this->Paginator->sort("insertion-Date");?></th>
            <th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('temp');?></th>
			<th><?php echo $this->Paginator->sort('mintemp');?></th>
			<th><?php echo $this->Paginator->sort('maxtemp');?></th>
			<th><?php echo $this->Paginator->sort('relative_humidity');?></th>
			<th><?php echo $this->Paginator->sort('barometric_pressure');?></th>
			<th><?php echo $this->Paginator->sort('rainfall');?></th>
			<th><?php echo $this->Paginator->sort('recolector');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($manualdatalogs as $manualdatalog):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $manualdatalog['Manualdatalog']['id']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['recolection_date']; ?>&nbsp;</td>
        <td><?php echo $manualdatalog['Manualdatalog']['insertion_date']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($manualdatalog['Station']['station'], array('controller' => 'stations', 'action' => 'view', $manualdatalog['Station']['id'])); ?>
		</td>
        <td><?php echo $manualdatalog['Manualdatalog']['temp']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['mintemp']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['maxtemp']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['relative_humidity']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['barometric_pressure']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['rainfall']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['recolector']; ?>&nbsp;</td>
		<td><?php echo $manualdatalog['Manualdatalog']['comments']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $manualdatalog['Manualdatalog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manualdatalog['Manualdatalog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Manualdatalog', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>