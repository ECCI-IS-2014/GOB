<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Add Usuario'); ?></legend>
	<?php
		
		echo $this->Form->input('name');
		echo $this->Form->input('role',array('options' => array('Administrador'=>'Administrador', 'Usuario'=>'Usuario')));
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
	</ul>
</div>