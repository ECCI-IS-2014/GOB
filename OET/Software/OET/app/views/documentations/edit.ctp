<div class="documentations form">
<?php echo $this->Form->create('Documentation');?>
	<fieldset>
		<legend><?php __('Edit Documentation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doc_types_id');
		echo $this->Form->input('sensor_id');
		echo $this->Form->input('station_id');
		echo $this->Form->input('description');
		echo $this->Form->input('upload_date');
		echo $this->Form->input('path');
		echo $this->Form->input('doc_name');
		echo $this->Form->input('id_documentations');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Documentation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documentation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documentations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Doc Types', true), array('controller' => 'doc_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Types', true), array('controller' => 'doc_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>