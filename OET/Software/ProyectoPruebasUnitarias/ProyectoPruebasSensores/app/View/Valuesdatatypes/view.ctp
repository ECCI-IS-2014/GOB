<div class="valuesdatatypes view">
<h2><?php echo __('Valuesdatatype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($valuesdatatype['Valuesdatatype']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($valuesdatatype['data_type'][''], array('controller' => 'data_types', 'action' => 'view', $valuesdatatype['data_type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Automaticdatalog'); ?></dt>
		<dd>
			<?php echo $this->Html->link($valuesdatatype['Automaticdatalog']['id'], array('controller' => 'automaticdatalogs', 'action' => 'view', $valuesdatatype['Automaticdatalog']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Value'); ?></dt>
		<dd>
			<?php echo h($valuesdatatype['Valuesdatatype']['Data_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Valuesdatatype'), array('action' => 'edit', $valuesdatatype['Valuesdatatype']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Valuesdatatype'), array('action' => 'delete', $valuesdatatype['Valuesdatatype']['Id']), array(), __('Are you sure you want to delete # %s?', $valuesdatatype['Valuesdatatype']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs'), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog'), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
