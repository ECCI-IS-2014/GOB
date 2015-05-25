<div class="sensors form">
<?php echo $this->Form->create('Sensor'); ?>
	<fieldset>
		<legend><?php echo __('Add Sensor'); ?></legend>
	<?php
		echo $this->Form->input('serial');
		echo $this->Form->input('price');
		echo $this->Form->input('type_');
		echo $this->Form->input('model_');
		echo $this->Form->input('installation_date');
		echo $this->Form->input('removal_date');
		echo $this->Form->input('calibration_date');
		echo $this->Form->input('brand');
		echo $this->Form->input('description');
		echo $this->Form->input('provider');
		echo $this->Form->input('coordinate_x');
		echo $this->Form->input('coordinate_y');
		echo $this->Form->input('station_id');
		echo $this->Form->input('ID_SENSOR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sensors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
