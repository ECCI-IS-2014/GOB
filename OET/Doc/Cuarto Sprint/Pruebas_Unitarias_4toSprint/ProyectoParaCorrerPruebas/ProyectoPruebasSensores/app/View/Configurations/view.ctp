<div class="configurations view">
<h2><?php echo __('Configuration'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($configuration['Configuration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($configuration['Station']['description'], array('controller' => 'stations', 'action' => 'view', $configuration['Station']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Configuration'), array('action' => 'edit', $configuration['Configuration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Configuration'), array('action' => 'delete', $configuration['Configuration']['id']), array(), __('Are you sure you want to delete # %s?', $configuration['Configuration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configurations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuration'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('controller' => 'configs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Configs'); ?></h3>
	<?php if (!empty($configuration['Config'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data Type Id'); ?></th>
		<th><?php echo __('Csv Columns'); ?></th>
		<th><?php echo __('Habilitado'); ?></th>
		<th><?php echo __('Configuration Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($configuration['Config'] as $config): ?>
		<tr>
			<td><?php echo $config['id']; ?></td>
			<td><?php echo $config['data_type_id']; ?></td>
			<td><?php echo $config['csv_columns']; ?></td>
			<td><?php echo $config['habilitado']; ?></td>
			<td><?php echo $config['configuration_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'configs', 'action' => 'view', $config['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'configs', 'action' => 'edit', $config['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'configs', 'action' => 'delete', $config['id']), array(), __('Are you sure you want to delete # %s?', $config['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
