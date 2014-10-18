<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo $this->Html->link('Delete User', "controller" => "Users", "action" => "searchDelete", $user['User']['id']);?>
        </legend>

    </fieldset>
</div>