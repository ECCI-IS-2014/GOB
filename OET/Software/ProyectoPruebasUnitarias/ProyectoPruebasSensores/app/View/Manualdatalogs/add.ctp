<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog'); ?>
	<fieldset>
		<legend><?php echo __('Add Manualdatalog'); ?></legend>
	<?php
		echo $this->Form->input('data_type_id');
		echo $this->Form->input('recolection_date');
		echo $this->Form->input('data_');
		echo $this->Form->input('sensor_id');
		echo $this->Form->input('datalog');
		echo $this->Form->input('station_id');
		echo $this->Form->input('ID_MANUALDATALOGS');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
