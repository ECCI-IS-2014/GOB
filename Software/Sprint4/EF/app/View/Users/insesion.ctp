<h3>Bienvenido a Tiquicia Bank</h3>

<?php echo $this->Form->create('User', array('action'=>'index')); ?>
    <fieldset>
        <legend>
            <?php echo __('Por favor digite su número de tarjeta y pin'); ?>
        </legend>
        <?php echo $this->Form->input('numTarjeta',array('type'=>'number'));
              echo $this->Form->input('pin',array('type'=>'password','label' =>'Pin'));
    ?>


<?php echo $this->Form->submit('Ingresar');
echo $this->Form->end();
?>

<p><?php echo $this->Html->link("Registrar nueva tarjeta",'/users/add'); ?></p>

<br>
<p><?php echo $this->Html->link("Ver Banco Central",'/Client'); ?></p>
<table>
    <tr>

    </tr>


</table>