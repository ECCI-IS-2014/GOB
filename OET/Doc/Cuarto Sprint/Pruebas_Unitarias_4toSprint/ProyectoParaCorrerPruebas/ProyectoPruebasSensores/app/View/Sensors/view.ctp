<div class="sensors view">
<h2><?php echo __('Sensor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['serial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type '); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['type_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model '); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['model_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Installation Date'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['installation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Removal Date'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['removal_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calibration Date'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['calibration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['provider']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate X'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['coordinate_x']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate Y'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['coordinate_y']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sensor['Station']['id'], array('controller' => 'stations', 'action' => 'view', $sensor['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID SENSOR'); ?></dt>
		<dd>
			<?php echo h($sensor['Sensor']['ID_SENSOR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sensor'), array('action' => 'edit', $sensor['Sensor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sensor'), array('action' => 'delete', $sensor['Sensor']['id']), array(), __('Are you sure you want to delete # %s?', $sensor['Sensor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Features'); ?></h3>
	<?php if (!empty($sensor['Feature'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Sensor Id'); ?></th>
		<th><?php echo __('ID FEATURE'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sensor['Feature'] as $feature): ?>
		<tr>
			<td><?php echo $feature['id']; ?></td>
			<td><?php echo $feature['name']; ?></td>
			<td><?php echo $feature['sensor_id']; ?></td>
			<td><?php echo $feature['ID_FEATURE']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'features', 'action' => 'view', $feature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'features', 'action' => 'edit', $feature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'features', 'action' => 'delete', $feature['id']), array(), __('Are you sure you want to delete # %s?', $feature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Manualdatalogs'); ?></h3>
	<?php if (!empty($sensor['Manualdatalog'])): ?>
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
	<?php foreach ($sensor['Manualdatalog'] as $manualdatalog): ?>
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
