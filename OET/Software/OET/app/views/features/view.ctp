<div class="features view">
<h2><?php  __('Feature');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $feature['Feature']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $feature['Feature']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sensor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($feature['Sensor']['id'], array('controller' => 'sensors', 'action' => 'view', $feature['Sensor']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature', true), array('action' => 'edit', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Feature', true), array('action' => 'delete', $feature['Feature']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
	</ul>
</div>
