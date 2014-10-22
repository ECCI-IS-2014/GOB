<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
         echo $this->Form->input('password');
         echo $this->Form->input('first_name');
         echo $this->Form->input('middle_name');
         echo $this->Form->input('last_name');
         echo $this->Form->input('identification');
         echo $this->Form->input('birth_date', array('empty' => array('month' => 'Month','day'   => 'Day','year'  => 'Year'),'minYear' => date('Y')-130,'maxYear' => date('Y')));
		 echo $this->Form->input('email');
		
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'customer' => 'Customer')
        ));
		
		
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Sign Up')); ?>
</div>

