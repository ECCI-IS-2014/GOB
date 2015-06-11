<div class="manualdatalogs form">
<?php echo $this->Form->create('Manualdatalog');?>
	<fieldset>
		<legend><?php __('Add Manualdatalog'); ?></legend>
	<?php
        date_default_timezone_set('America/Costa_Rica');
        $hoy = date('Y-m-d');
        $hora=' 7:00';
        echo $this->Form->input('recolection_date',array(
            'type' => 'datetime',
            'default'=>$hoy.$hora,
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

		<li><?php echo $this->Html->link(__('List Manualdatalogs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Upload File', true), array('controller' => 'manualdatalogs', 'action' => 'csv')); ?> </li>
	</ul>
</div>