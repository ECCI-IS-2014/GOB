<div class="stations view">
<h2><?php  __('Station');
	$idd = ' ';
?></h2>

	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['id'];
				$idd = $station['Station']['id']?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['description']; ?>
			&nbsp;
		</dd>
		        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Coordinate x'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['coordinate_x']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Coordinate y'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $station['Station']['coordinate_y']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station', true), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Station', true), array('action' => 'delete', $station['Station']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sensors');?></h3>
	<?php if (!empty($station['Sensor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Serial'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Type '); ?></th>
		<th><?php __('Model '); ?></th>
		<th><?php __('Installation Date'); ?></th>
		<th><?php __('Removal Date'); ?></th>
		<th><?php __('Calibration Date'); ?></th>
		<th><?php __('Brand'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Provider'); ?></th>
		<th><?php __('Coordinate X'); ?></th>
		<th><?php __('Coordinate Y'); ?></th>
		<th><?php __('Station Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($station['Sensor'] as $sensor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sensor['id'];?></td>
			<td><?php echo $sensor['serial'];?></td>
			<td><?php echo $sensor['price'];?></td>
			<td><?php echo $sensor['type_'];?></td>
			<td><?php echo $sensor['model_'];?></td>
			<td><?php echo $sensor['installation_date'];?></td>
			<td><?php echo $sensor['removal_date'];?></td>
			<td><?php echo $sensor['calibration_date'];?></td>
			<td><?php echo $sensor['brand'];?></td>
			<td><?php echo $sensor['description'];?></td>
			<td><?php echo $sensor['provider'];?></td>
			<td><?php echo $sensor['coordinate_x'];?></td>
			<td><?php echo $sensor['coordinate_y'];?></td>
			<td><?php echo $sensor['station_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sensors', 'action' => 'view', $sensor['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sensors', 'action' => 'edit', $sensor['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sensors', 'action' => 'delete', $sensor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sensor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add',$station['Station']['id'] )); ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php __('Related Documentation');?></h3>
	<?php if (!empty($station['Documentation'])):?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php __('Id Documentations'); ?></th>
				<th><?php __('Name'); ?></th>
				<th class="actions"><?php __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($station['Documentation'] as $documentation):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
				?>
				<tr<?php echo $class;?>>
					<td><?php echo $documentation['id_documentations'];?></td>
					<td><?php echo $documentation['doc_name'];?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View', true), array('controller' => 'documentations', 'action' => 'view', $documentation['id'])); ?>
						<?php echo $this->Html->link(__('Delete', true), array('controller' => 'documentations', 'action' => 'delete', $documentation['id'],1), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentation['id'])); ?>
						<?php echo $this->Html->link(__('Download', true), array('controller' => 'documentations', 'action' => 'download', $documentation['id'],1));?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documentation', true), array('controller' => 'documentations', 'action' => 'add',$idd,1));?> </li>
		</ul>
	</div>
</div>
