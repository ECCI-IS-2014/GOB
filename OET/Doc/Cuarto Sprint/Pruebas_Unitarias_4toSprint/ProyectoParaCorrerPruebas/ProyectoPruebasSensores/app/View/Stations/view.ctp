<div class="stations view">
<h2><?php echo __('Station'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo h($station['Station']['station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($station['Station']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station'), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station'), array('action' => 'delete', $station['Station']['id']), array(), __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Manualdatalogs'); ?></h3>
	<?php if (!empty($station['Manualdatalog'])): ?>
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
	<?php foreach ($station['Manualdatalog'] as $manualdatalog): ?>
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
<div class="related">
	<h3><?php echo __('Related Sensors'); ?></h3>
	<?php if (!empty($station['Sensor'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Serial'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Type '); ?></th>
		<th><?php echo __('Model '); ?></th>
		<th><?php echo __('Installation Date'); ?></th>
		<th><?php echo __('Removal Date'); ?></th>
		<th><?php echo __('Calibration Date'); ?></th>
		<th><?php echo __('Brand'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Provider'); ?></th>
		<th><?php echo __('Coordinate X'); ?></th>
		<th><?php echo __('Coordinate Y'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('ID SENSOR'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($station['Sensor'] as $sensor): ?>
		<tr>
			<td><?php echo $sensor['id']; ?></td>
			<td><?php echo $sensor['serial']; ?></td>
			<td><?php echo $sensor['price']; ?></td>
			<td><?php echo $sensor['type_']; ?></td>
			<td><?php echo $sensor['model_']; ?></td>
			<td><?php echo $sensor['installation_date']; ?></td>
			<td><?php echo $sensor['removal_date']; ?></td>
			<td><?php echo $sensor['calibration_date']; ?></td>
			<td><?php echo $sensor['brand']; ?></td>
			<td><?php echo $sensor['description']; ?></td>
			<td><?php echo $sensor['provider']; ?></td>
			<td><?php echo $sensor['coordinate_x']; ?></td>
			<td><?php echo $sensor['coordinate_y']; ?></td>
			<td><?php echo $sensor['station_id']; ?></td>
			<td><?php echo $sensor['ID_SENSOR']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sensors', 'action' => 'view', $sensor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sensors', 'action' => 'edit', $sensor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sensors', 'action' => 'delete', $sensor['id']), array(), __('Are you sure you want to delete # %s?', $sensor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
