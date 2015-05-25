<div class="dataTypes form">
<?php echo $this->Form->create('DataType'); ?>
	<fieldset>
		<legend><?php echo __('Add Data Type'); ?></legend>
	<?php
		echo $this->Form->input('data_type');
		echo $this->Form->input('description');
		echo $this->Form->input('temporality');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Data Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('controller' => 'manualdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
