<div class="configs form">
<?php echo $this->Form->create('Config'); ?>
	<fieldset>
		<legend><?php echo __('Add Config'); ?></legend>
	<?php
		echo $this->Form->input('data_type_id');
		echo $this->Form->input('csv_columns');
		echo $this->Form->input('habilitado');
		echo $this->Form->input('configuration_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('controller' => 'configurations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuration'), array('controller' => 'configurations', 'action' => 'add')); ?> </li>
	</ul>
</div>
