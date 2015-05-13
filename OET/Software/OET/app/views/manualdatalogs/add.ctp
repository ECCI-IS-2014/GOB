<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog');?>
	<fieldset>
		<legend><?php __('Add Manual datalog'); ?></legend>
	<?php
		echo $this->Form->input('data_type_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('sensor_id');
		//echo $this->Form->input('recolection_date');
		echo $this->Form->input('data_');
		echo $this->Form->input('datalog');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Manual datalogs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type', true), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>