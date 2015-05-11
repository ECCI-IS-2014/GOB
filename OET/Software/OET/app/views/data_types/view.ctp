<div class="dataTypes view">
<h2><?php  __('Data Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['data_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Temporality'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['temporality']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Type', true), array('action' => 'edit', $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Data Type', true), array('action' => 'delete', $dataType['DataType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dataType['DataType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
