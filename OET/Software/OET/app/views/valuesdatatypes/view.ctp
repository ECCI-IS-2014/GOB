<div class="valuesdatatypes view">
<h2><?php  __('Valuesdatatype');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valuesdatatype['Valuesdatatype']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valuesdatatype['DataType']['name'], array('controller' => 'data_types', 'action' => 'view', $valuesdatatype['DataType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Automaticdatalog'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			&nbsp;
			<?php echo $this->Html->link($valuesdatatype['Automaticdatalog']['id'], array('controller' => 'automaticdatalogs', 'action' => 'view', $valuesdatatype['Automaticdatalog']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valuesdatatype['Valuesdatatype']['data_value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Valuesdatatype', true), array('action' => 'edit', $valuesdatatype['Valuesdatatype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Valuesdatatype', true), array('action' => 'delete', $valuesdatatype['Valuesdatatype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $valuesdatatype['Valuesdatatype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('controller' => 'data_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type', true), array('controller' => 'data_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs', true), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog', true), array('controller' => 'automaticdatalogs', 'action' => 'add')); ?> </li>
	</ul>
</div>
