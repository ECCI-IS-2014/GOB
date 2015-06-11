<div class="automaticdatalogs index">
	<h2><?php __('Automatic Datalogs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('station_id');?></th>
			<th><?php echo $this->Paginator->sort('recolection_date');?></th>

	</tr>
	<?php
	$i = 0;
	foreach ($automaticdatalogs as $automaticdatalog):

		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
        <?php if(!empty($automaticdatalog['Automaticdatalog']['station_id'])){ ?>
		<td><?php echo $automaticdatalog['Automaticdatalog']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($automaticdatalog['Station']['id_station'], array('controller' => 'stations', 'action' => 'view', $automaticdatalog['Station']['id'])); ?>
		</td>

		<td><?php echo $automaticdatalog['Automaticdatalog']['recolection_date'];?>&nbsp;</td>

	</tr>
<?php } endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Automaticdatalog', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station', true), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valuesdatatypes', true), array('controller' => 'valuesdatatypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valuesdatatype', true), array('controller' => 'valuesdatatypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Import CSV', true), array('controller' => 'automaticdatalogs', 'action' => 'csv')); ?> </li>
	</ul>
</div>