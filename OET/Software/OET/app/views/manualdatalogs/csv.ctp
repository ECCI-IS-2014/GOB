<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog', array('type' => 'file')); ?>
<fieldset>
	<legend><?php __('Upload Manualdatalog File'); ?></legend>
<?php
    echo $this->Form->input('file', array('type' => 'file'));
?>
</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Manualdatalogs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
