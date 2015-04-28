<div class="sensors form">
<?php echo $this->Form->create('Sensor');?>
	<fieldset>
		<legend><?php __('Add Sensor'); ?></legend>
	<?php
		echo $this->Form->input('serial');
		echo $this->Form->input('price');
		echo $this->Form->input('type_');
		echo $this->Form->input('model_');
		//echo $this->Form->input('installation_date');
		//echo $this->Form->input('removal_date');
		echo $this->Form->input('calibration_date');
		echo $this->Form->input('brand');
		echo $this->Form->input('description');
		echo $this->Form->input('provider');
		echo $this->Form->input('coordinate_x');
		echo $this->Form->input('coordinate_y');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sensors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Feature', true), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>