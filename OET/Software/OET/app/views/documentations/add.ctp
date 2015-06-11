<div class="documentations form">
<?php echo $this->Form->create('Documentation', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Add Documentation'); ?></legend>
	<?php
		echo $this->Form->input('doc_types_id');
		if(!$docType) {
			echo $this->Form->input('sensor_id');
		}else {
			echo $this->Form->input('station_id');
		}
		echo $this->Form->input('description');
		echo $this->Form->input('file', array('type' => 'file'));
		echo $this->Form->input('type',array('type' => 'checkbox','label'=>'Public'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>