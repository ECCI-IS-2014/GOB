<div class="dataTypes view">
<h2><?php  __('Data Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sensor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($dataType['Sensor']['id'], array('controller' => 'sensors', 'action' => 'view', $dataType['Sensor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Temporality'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['temporality']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id Data Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dataType['DataType']['id_data_type']; ?>
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
		<li><?php echo $this->Html->link(__('List Sensors', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('controller' => 'sensors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Valuesdatatypes');?></h3>
	<?php if (!empty($dataType['Valuesdatatype'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Data Type Id'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Data Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dataType['Valuesdatatype'] as $valuesdatatype):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php
        //debug($Automaticdatalog);
        echo $class;?>>
			<td><?php echo $valuesdatatype['id'];?></td>
			<td><?php echo $valuesdatatype['data_type_id'];?></td>
			<td><?php
                foreach($Automaticdatalogs as $automaticdatalog):

                    if( $automaticdatalog['Automaticdatalog']['id'] === $valuesdatatype['automaticdatalog_id']){

                        echo $automaticdatalog['Automaticdatalog']['recolection_date'];


                    }
                endforeach;
                ?></td>
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
