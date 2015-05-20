<div class="logbooks index">
	<h2><?php __('Logbooks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('log_date');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('oet_user_id');?></th>
			<th><?php echo $this->Paginator->sort('table_name');?></th>
			<th><?php echo $this->Paginator->sort('new value');?></th>
			<th><?php echo $this->Paginator->sort('old value');?></th>
			<th><?php echo $this->Paginator->sort('action');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($logbooks as $logbook):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $logbook['Logbook']['log_date']; ?>&nbsp;</td>
		<td><?php echo $logbook['Logbook']['id']; ?>&nbsp;</td>
		<td><?php echo $logbook['Logbook']['data_']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($logbook['OetUser']['name_'], array('controller' => 'oet_users', 'action' => 'view', $logbook['OetUser']['id'])); ?>
		</td>
		<td><?php echo $logbook['Logbook']['table_name']; ?>&nbsp;</td>
		<td><?php echo $logbook['Logbook']['newvalue']; ?>&nbsp;</td>
		<td><?php echo $logbook['Logbook']['oldvalue']; ?>&nbsp;</td>
		<td><?php echo $logbook['Logbook']['action']; ?>&nbsp;</td>
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