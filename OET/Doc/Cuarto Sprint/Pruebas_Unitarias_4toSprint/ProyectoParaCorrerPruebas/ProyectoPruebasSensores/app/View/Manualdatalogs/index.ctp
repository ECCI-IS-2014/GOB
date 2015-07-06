<div class="manualdatalogs index">
	<h2><?php echo __('Manualdatalogs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('RECOLECTION_DATE'); ?></th>
			<th><?php echo $this->Paginator->sort('STATION_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TEMP'); ?></th>
			<th><?php echo $this->Paginator->sort('MINTEMP'); ?></th>
			<th><?php echo $this->Paginator->sort('MAXTEMP'); ?></th>
			<th><?php echo $this->Paginator->sort('RELATIVE_HUMIDITY'); ?></th>
			<th><?php echo $this->Paginator->sort('BAROMETRIC_PRESSURE'); ?></th>
			<th><?php echo $this->Paginator->sort('RAINFALL'); ?></th>
			<th><?php echo $this->Paginator->sort('RECOLECTOR'); ?></th>
			<th><?php echo $this->Paginator->sort('COMMENTS'); ?></th>
			<th><?php echo $this->Paginator->sort('ID_MANUALDATALOGS'); ?></th>
			<th><?php echo $this->Paginator->sort('INSERTION_DATE'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($manualdatalogs as $manualdatalog): ?>
	<tr>
		<td><?php echo h($manualdatalog['Manualdatalog']['ID']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['RECOLECTION_DATE']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['STATION_ID']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['TEMP']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['MINTEMP']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['MAXTEMP']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['RELATIVE_HUMIDITY']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['BAROMETRIC_PRESSURE']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['RAINFALL']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['RECOLECTOR']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['COMMENTS']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['ID_MANUALDATALOGS']); ?>&nbsp;</td>
		<td><?php echo h($manualdatalog['Manualdatalog']['INSERTION_DATE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $manualdatalog['Manualdatalog']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $manualdatalog['Manualdatalog']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $manualdatalog['Manualdatalog']['ID']), array(), __('Are you sure you want to delete # %s?', $manualdatalog['Manualdatalog']['ID'])); ?>
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
        <li><?php echo $this->Html->link(__('Import CSV', true), array('controller' => 'manualdatalogs', 'action' => 'csv')); ?> </li>
    </ul>
</div>
