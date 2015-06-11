<div class="automaticdatalogs view">
<h2><?php  __('Automaticdatalog');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $automaticdatalog['Automaticdatalog']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Station'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($automaticdatalog['Station']['id_station'], array('controller' => 'stations', 'action' => 'view', $automaticdatalog['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recolection Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $automaticdatalog['Automaticdatalog']['recolection_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Automaticdatalog', true), array('action' => 'edit', $automaticdatalog['Automaticdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Automaticdatalog', true), array('action' => 'delete', $automaticdatalog['Automaticdatalog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $automaticdatalog['Automaticdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Valuesdatatypes');?></h3>
	<?php if (!empty($automaticdatalog['Valuesdatatype'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Data Type Id'); ?></th>
		<th><?php __('Automaticdatalog Id'); ?></th>
		<th><?php __('Data Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($automaticdatalog['Valuesdatatype'] as $valuesdatatype):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $valuesdatatype['id'];?></td>
			<td><?php echo $valuesdatatype['data_type_id'];?></td>
			<td><?php echo $valuesdatatype['automaticdatalog_id'];?></td>
			<td><?php echo $valuesdatatype['data_value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'valuesdatatypes', 'action' => 'view', $valuesdatatype['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'valuesdatatypes', 'action' => 'edit', $valuesdatatype['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'valuesdatatypes', 'action' => 'delete', $valuesdatatype['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $valuesdatatype['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
