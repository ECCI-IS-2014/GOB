<div class="valuesdatatypes form">
<?php echo $this->Form->create('Valuesdatatype'); ?>
	<fieldset>
		<legend><?php echo __('Add Valuesdatatype'); ?></legend>
	<?php
		echo $this->Form->input('Data_type_Id');
		echo $this->Form->input('Automaticdatalog_id');
		echo $this->Form->input('Data_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Valuesdatatypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs'), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog'), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
