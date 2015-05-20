<div class="sensors index">
	<h2><?php __('Sensors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('serial');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('type_');?></th>
			<th><?php echo $this->Paginator->sort('model_');?></th>
			<th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('installation_date');?></th>
			<th><?php echo $this->Paginator->sort('removal_date');?></th>
			<th><?php echo $this->Paginator->sort('calibration_date');?></th>
			<th><?php echo $this->Paginator->sort('brand');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('provider');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_x');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_y');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sensors as $sensor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
                <td><?php echo $sensor['Sensor']['id']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['serial']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['price']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['type_']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['model_']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['station_id']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['installation_date']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['removal_date']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['calibration_date']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['brand']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['description']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['provider']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['coordinate_x']; ?>&nbsp;</td>
		<td><?php echo $sensor['Sensor']['coordinate_y']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sensor['Sensor']['id'])); ?>
                        <?php
                            if($sensor['Sensor']['removal_date'] == null){
                                echo $this->Html->link(__('Remove', true), array('action' => 'removal', $sensor['Sensor']['id']));
                                echo $this->Html->link(__('Calibrate', true), array('action' => 'calibrate', $sensor['Sensor']['id']));
                            }
                        ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sensor['Sensor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sensor['Sensor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sensor', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('New Feature', true), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>