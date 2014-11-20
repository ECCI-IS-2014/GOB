
<h1>Acciones del Cliente</h1>
<p>
Escoja una accion
<ul>
<li><?php echo $this->Html->link('Ver Saldo', array('controller' => 'client', 'action' => 'request_view', 2)); ?></li>
<li><?php echo $this->Html->link('Actualiza Saldo', array('controller' => 'client', 'action' => 'request_edit',4018283728917197,1000000)); ?></li>
<li><?php echo $this->Html->link('Cambio de Dolar', array('controller' => 'client', 'action' => 'request_dolar')); ?></li>
<br>
<li><?php echo $this->Html->link("Ir a Inicio",'/'); ?></li>
</ul>

</p>
