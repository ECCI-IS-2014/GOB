<div class="configurations form">
<?php echo $this->Form->create('Configuration'); ?>
	<fieldset>
		<legend><?php echo __('Edit Configuration'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('station_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Configuration.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Configuration.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('controller' => 'configs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
	</ul>
</div>
