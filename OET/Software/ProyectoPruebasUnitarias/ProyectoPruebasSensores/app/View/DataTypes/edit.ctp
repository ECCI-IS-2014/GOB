<div class="dataTypes form">
<?php echo $this->Form->create('DataType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Data Type'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Sensor_id');
		echo $this->Form->input('Temporality');
		echo $this->Form->input('Id_Data_Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DataType.Id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DataType.Id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
