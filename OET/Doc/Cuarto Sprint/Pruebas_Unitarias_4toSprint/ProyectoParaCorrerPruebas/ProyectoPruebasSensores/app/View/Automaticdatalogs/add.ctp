<div class="automaticdatalogs form">
<?php echo $this->Form->create('Automaticdatalog'); ?>
	<fieldset>
		<legend><?php echo __('Add Automaticdatalog'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('recolection_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Automaticdatalogs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
