<div class="manualdatalogs view">
<h2><?php echo __('Manualdatalog'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RECOLECTION DATE'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['RECOLECTION_DATE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('STATION ID'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['STATION_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TEMP'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['TEMP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MINTEMP'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['MINTEMP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MAXTEMP'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['MAXTEMP']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RELATIVE HUMIDITY'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['RELATIVE_HUMIDITY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BAROMETRIC PRESSURE'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['BAROMETRIC_PRESSURE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RAINFALL'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['RAINFALL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RECOLECTOR'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['RECOLECTOR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COMMENTS'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['COMMENTS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID MANUALDATALOGS'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['ID_MANUALDATALOGS']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('INSERTION DATE'); ?></dt>
		<dd>
			<?php echo h($manualdatalog['Manualdatalog']['INSERTION_DATE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manualdatalog'), array('action' => 'edit', $manualdatalog['Manualdatalog']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manualdatalog'), array('action' => 'delete', $manualdatalog['Manualdatalog']['ID']), array(), __('Are you sure you want to delete # %s?', $manualdatalog['Manualdatalog']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manualdatalogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manualdatalog'), array('action' => 'add')); ?> </li>
	</ul>
</div>
