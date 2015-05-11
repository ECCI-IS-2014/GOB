<div class="dataTypes form">
<?php echo $this->Form->create('DataType');?>
	<fieldset>
		<legend><?php __('Add Data Type'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Data Types', true), array('action' => 'index'));?></li>
	</ul>
</div>