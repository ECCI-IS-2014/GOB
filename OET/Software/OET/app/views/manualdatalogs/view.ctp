<?php echo $this->Html->link('Home', '/');?>
<div class="manualdatalogs view">
<h2><?php  __('Manualdatalog');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['id']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recolection Date'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $manualdatalog['Manualdatalog']['recolection_date']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Insertion Date'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $manualdatalog['Manualdatalog']['insertion_date']; ?>
            &nbsp;
        </dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($manualdatalog['Station']['station'], array('controller' => 'stations', 'action' => 'view', $manualdatalog['Station']['id'])); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Temp'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $manualdatalog['Manualdatalog']['temp']; ?>
            &nbsp;
        </dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mintemp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['mintemp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Maxtemp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['maxtemp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relative Humidity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['relative_humidity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Barometric Pressure'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['barometric_pressure']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rainfall'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['rainfall']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recolector'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['recolector']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $manualdatalog['Manualdatalog']['comments']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manualdatalog', true), array('action' => 'edit', $manualdatalog['Manualdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Manualdatalog', true), array('action' => 'delete', $manualdatalog['Manualdatalog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manualdatalog['Manualdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
