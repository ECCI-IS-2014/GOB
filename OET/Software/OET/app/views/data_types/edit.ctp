<div class="dataTypes form">
<?php echo $this->Form->create('DataType');?>
	<fieldset>
		<legend><?php __('Edit Data Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data_type');
		echo $this->Form->input('description');
		echo $this->Form->input('temporality');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DataType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DataType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('action' => 'index'));?></li>
	</ul>
</div>