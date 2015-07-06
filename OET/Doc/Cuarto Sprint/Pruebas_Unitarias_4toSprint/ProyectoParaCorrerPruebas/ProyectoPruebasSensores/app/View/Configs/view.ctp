<div class="configs view">
<h2><?php echo __('Config'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($config['Config']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($config['DataType']['Name'], array('controller' => 'data_types', 'action' => 'view', $config['DataType']['Id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Csv Columns'); ?></dt>
		<dd>
			<?php echo h($config['Config']['csv_columns']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habilitado'); ?></dt>
		<dd>
			<?php echo h($config['Config']['habilitado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Configuration'); ?></dt>
		<dd>
			<?php echo $this->Html->link($config['Configuration']['station_id'], array('controller' => 'configurations', 'action' => 'view', $config['Configuration']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config'), array('action' => 'edit', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Config'), array('action' => 'delete', $config['Config']['id']), array(), __('Are you sure you want to delete # %s?', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('controller' => 'configurations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuration'), array('controller' => 'configurations', 'action' => 'add')); ?> </li>
	</ul>
</div>
