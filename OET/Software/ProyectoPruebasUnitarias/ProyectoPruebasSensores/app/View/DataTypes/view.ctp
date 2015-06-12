<div class="dataTypes view">
<h2><?php echo __('Data Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sensor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dataType['Sensor']['serial'], array('controller' => 'sensors', 'action' => 'view', $dataType['Sensor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temporality'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['Temporality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Data Type'); ?></dt>
		<dd>
			<?php echo h($dataType['DataType']['Id_Data_Type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Data Type'), array('action' => 'edit', $dataType['DataType']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Data Type'), array('action' => 'delete', $dataType['DataType']['Id']), array(), __('Are you sure you want to delete # %s?', $dataType['DataType']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Data Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Data Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sensors'), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor'), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Valuesdatatypes'); ?></h3>
	<?php if (!empty($dataType['valuesdatatypes'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data Type Id'); ?></th>
		<th><?php echo __('Automaticdatalog Id'); ?></th>
		<th><?php echo __('Data Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dataType['valuesdatatypes'] as $valuesdatatypes): ?>
		<tr>
			<td><?php echo $valuesdatatypes['Id']; ?></td>
			<td><?php echo $valuesdatatypes['Data_type_Id']; ?></td>
			<td><?php echo $valuesdatatypes['Automaticdatalog_id']; ?></td>
			<td><?php echo $valuesdatatypes['Data_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'valuesdatatypes', 'action' => 'view', $valuesdatatypes['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'valuesdatatypes', 'action' => 'edit', $valuesdatatypes['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'valuesdatatypes', 'action' => 'delete', $valuesdatatypes['id']), array(), __('Are you sure you want to delete # %s?', $valuesdatatypes['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Valuesdatatypes'), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
