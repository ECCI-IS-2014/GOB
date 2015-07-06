<div class="features form">
<?php echo $this->Form->create('Feature'); ?>
	<fieldset>
		<legend><?php echo __('Add Feature'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('sensor_id');
		echo $this->Form->input('ID_FEATURE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
	</ul>
</div>
