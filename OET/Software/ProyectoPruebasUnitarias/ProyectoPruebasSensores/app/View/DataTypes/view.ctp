<div class="dataTypes view">
<h2><?php echo __('Data Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Type'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['data_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temporality'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['temporality']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Type'), array('action' => 'edit', $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data Type'), array('action' => 'delete', $dataType['DataType']['id']), array(), __('Are you sure you want to delete # %s?', $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Manualdatalogs'); ?></h3>
	<?php if (!empty($dataType['Manualdatalog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data Type Id'); ?></th>
		<th><?php echo __('Recolection Date'); ?></th>
		<th><?php echo __('Data '); ?></th>
		<th><?php echo __('Sensor Id'); ?></th>
		<th><?php echo __('Datalog'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('ID MANUALDATALOGS'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dataType['Manualdatalog'] as $manualdatalog): ?>
		<tr>
			<td><?php echo $manualdatalog['id']; ?></td>
			<td><?php echo $manualdatalog['data_type_id']; ?></td>
			<td><?php echo $manualdatalog['recolection_date']; ?></td>
			<td><?php echo $manualdatalog['data_']; ?></td>
			<td><?php echo $manualdatalog['sensor_id']; ?></td>
			<td><?php echo $manualdatalog['datalog']; ?></td>
			<td><?php echo $manualdatalog['station_id']; ?></td>
			<td><?php echo $manualdatalog['ID_MANUALDATALOGS']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'manualdatalogs', 'action' => 'view', $manualdatalog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'manualdatalogs', 'action' => 'edit', $manualdatalog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'manualdatalogs', 'action' => 'delete', $manualdatalog['id']), array(), __('Are you sure you want to delete # %s?', $manualdatalog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
