
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
              echo $this->Form->input('password');
    ?>

    <?php echo $this->Html->link('Or Sign up', '/Users/add');?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>