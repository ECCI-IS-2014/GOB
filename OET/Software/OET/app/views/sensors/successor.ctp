<div class="sensors form">
<?php echo $this->Form->create('Sensor');?>
	<fieldset>
		<legend><?php __('Select Successor'); ?></legend>
	<?php
		
		echo $form->input('Successor',array('type'=>'select','options'=>$sensors));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sensors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Feature', true), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
