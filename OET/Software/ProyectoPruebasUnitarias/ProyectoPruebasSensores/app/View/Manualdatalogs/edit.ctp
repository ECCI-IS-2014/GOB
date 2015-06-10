<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog');?>
	<fieldset>
		<legend><?php __('Edit Manualdatalog'); ?></legend>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('recolection_date',array(
            'type' => 'datetime',
            'timeFormat' => '24',
        ));
		echo $this->Form->input('station_id');
        echo $this->Form->input('temp');
		echo $this->Form->input('mintemp');
		echo $this->Form->input('maxtemp');
		echo $this->Form->input('relative_humidity');
		echo $this->Form->input('barometric_pressure');
		echo $this->Form->input('rainfall');
		echo $this->Form->input('recolector');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Manualdatalog.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Manualdatalog.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>