<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<body>

	
<div class="actions">
	<h3><?php __('Menu'); ?></h3>
	<ul>
	
				<li><?php echo $this->Html->link(__('Sensores', true), array('controller' => 'sensors', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Features', true), array('controller' => 'features', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Stations', true), array('controller' => 'stations', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Logbooks', true), array('controller' => 'logbooks', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Manual datalogs', true), array('controller' => 'manualdatalogs', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Automatic datalogs', true), array('controller' => 'automaticdatalogs', 'action' => 'index')); ?> </li>
	</ul>
</div>
		

<div>
<?php echo $this->Html->image('oet.jpeg')?>		
</div>	


</body>
</html>

