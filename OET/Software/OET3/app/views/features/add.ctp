<div class="features form">
<?php echo $this->Form->create('Feature');?>
	<fieldset>
		<legend><?php __('Add Feature'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('sensor_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
	</ul>
</div>