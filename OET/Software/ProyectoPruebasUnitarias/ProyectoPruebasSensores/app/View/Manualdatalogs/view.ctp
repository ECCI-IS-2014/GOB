<div class="manualdatalogs view">
<h2><?php echo __('Manualdatalog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manualdatalog['DataType']['id'], array('controller' => 'data_types', 'action' => 'view', $manualdatalog['DataType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recolection Date'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['recolection_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data '); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['data_']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sensor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manualdatalog['Sensor']['serial'], array('controller' => 'sensors', 'action' => 'view', $manualdatalog['Sensor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datalog'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['datalog']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($manualdatalog['Station']['station'], array('controller' => 'stations', 'action' => 'view', $manualdatalog['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID MANUALDATALOGS'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['ID_MANUALDATALOGS']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manualdatalog'), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manualdatalog'), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), array(), __('Are you sure you want to delete # %s?', $manualdatalog['Manualdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
