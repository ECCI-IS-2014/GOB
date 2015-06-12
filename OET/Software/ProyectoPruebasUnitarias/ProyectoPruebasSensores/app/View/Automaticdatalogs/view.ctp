<div class="automaticdatalogs view">
<h2><?php echo __('Automaticdatalog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($automaticdatalog['Automaticdatalog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($automaticdatalog['Station']['description'], array('controller' => 'stations', 'action' => 'view', $automaticdatalog['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recolection Date'); ?></dt>
		<dd>
			<?php echo h($automaticdatalog['Automaticdatalog']['recolection_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Automaticdatalog'), array('action' => 'edit', $automaticdatalog['Automaticdatalog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Automaticdatalog'), array('action' => 'delete', $automaticdatalog['Automaticdatalog']['id']), array(), __('Are you sure you want to delete # %s?', $automaticdatalog['Automaticdatalog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Automaticdatalogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Automaticdatalog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
