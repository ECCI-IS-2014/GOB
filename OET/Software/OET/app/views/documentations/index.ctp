<div class="documentations index">
	<h2><?php __('Documentations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_documentations');?></th>
			<th><?php echo $this->Paginator->sort('doc_types_id');?></th>
			<th><?php echo $this->Paginator->sort('sensor_id');?></th>
			<th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('upload_date');?></th>
			<th><?php echo $this->Paginator->sort('path');?></th>
			<th><?php echo $this->Paginator->sort('doc_name');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($documentations as $documentation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $documentation['Documentation']['id_documentations']; ?> &nbsp;</td>
		<td>
			<?php echo $this->Html->link($documentation['DocType']['description'], array('controller' => 'doc_types', 'action' => 'view', $documentation['DocType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentation['Sensor']['serial'], array('controller' => 'sensors', 'action' => 'view', $documentation['Sensor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($documentation['Station']['description'], array('controller' => 'stations', 'action' => 'view', $documentation['Station']['id'])); ?>
		</td>
		<td><?php echo $documentation['Documentation']['description']; ?>&nbsp;</td>
		<td><?php echo $documentation['Documentation']['upload_date']; ?>&nbsp;</td>
		<td><?php echo $documentation['Documentation']['path']; ?>&nbsp;</td>
		<td><?php echo $documentation['Documentation']['doc_name']; ?>&nbsp;</td>
		<td>
			<?php
			if($documentation['Documentation']['type'] == 0){
				echo "Private";
			}else{
				echo "Public";
			}
			?>
			&nbsp;
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $documentation['Documentation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $documentation['Documentation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $documentation['Documentation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentation['Documentation']['id'])); ?>
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