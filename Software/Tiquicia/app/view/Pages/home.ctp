<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<body>
<div>
	<h2>Categor&iacuteas
	<table>
	<tr>
		<?php foreach ($categories as $category): ?>
			<?php $var = $category['Category']['name'] ?>
			<td>
				<img src="app/webroot/img/uploads/category/filename/<?php echo $category['Category']['filename']?>" class="img-responsive" alt="Responsive image">
			</td>
		<?php endforeach; ?>
	</tr>
	<tr>
		<?php foreach ($categories as $category): ?>
			<?php $var = $category['Category']['name'] ?>
			<td><?php echo $this->Html->link($category['Category']['name'], "/Products?Search=$var" , array('class' => 'btn btn-default btn-sm'));?></td>
		<?php endforeach; ?>
	</tr>
	</table>
</div>
<!-- Firma y fecha de la página, ¡sólo por cortesía! -->
<address>Copyrigth 2014<br></address>
</body>
</html>