<div class="valuesdatatypes form">
<?php echo $this->Form->create('Valuesdatatype');?>
	<fieldset>
		<legend><?php __('Edit Valuesdatatype'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('data_type_id');
		echo $this->Form->input('automaticdatalog_id');
		echo $this->Form->input('data_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Valuesdatatype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Valuesdatatype.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type', true), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs', true), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog', true), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>