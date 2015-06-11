<div class="dataTypes form">
<?php echo $this->Form->create('DataType');?>
	<fieldset>
		<legend><?php __('Add Data Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('sensor_id');
		echo $this->Form->input('temporality');
		echo $this->Form->input('id_data_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Data Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>