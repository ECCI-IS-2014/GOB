<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog'); ?>
	<fieldset>
		<legend><?php echo __('Edit Manualdatalog'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('RECOLECTION_DATE');
		echo $this->Form->input('STATION_ID');
		echo $this->Form->input('TEMP');
		echo $this->Form->input('MINTEMP');
		echo $this->Form->input('MAXTEMP');
		echo $this->Form->input('RELATIVE_HUMIDITY');
		echo $this->Form->input('BAROMETRIC_PRESSURE');
		echo $this->Form->input('RAINFALL');
		echo $this->Form->input('RECOLECTOR');
		echo $this->Form->input('COMMENTS');
		echo $this->Form->input('ID_MANUALDATALOGS');
		echo $this->Form->input('INSERTION_DATE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Manualdatalog.ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Manualdatalog.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('action' => 'index')); ?></li>
	</ul>
</div>
