<div class="automaticdatalogs form">
<?php echo $this->Form->create('Automaticdatalog');?>
	<fieldset>
		<legend><?php __('Add Automaticdatalog'); ?></legend>
	<?php
		echo $this->Form->input('station_id');
		echo $this->Form->input('recolection_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Automaticdatalogs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>