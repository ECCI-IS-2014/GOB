
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Pulse para cerrar sesión'); ?>
        </legend>

    </fieldset>
    <?php echo $this->Form->end(__('Logout')); ?>
</div>