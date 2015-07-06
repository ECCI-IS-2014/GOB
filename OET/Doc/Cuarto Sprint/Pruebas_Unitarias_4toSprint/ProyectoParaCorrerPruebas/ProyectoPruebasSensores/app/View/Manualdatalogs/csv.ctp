<?php echo $this->Form->create('Manualdatalog', array('type' => 'file')); ?>

<fieldset>

    <?php


    echo $this->Form->input('file', array('type' => 'file'));
    ?>
</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>