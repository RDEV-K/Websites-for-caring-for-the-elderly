
<h2 style='color:#1C5978;'>Login</h2><br />
<?php echo $this->Form->create('User',array('controller' => 'users', 'action' =>'login','admin'=>1)); ?>
<?php
    echo $this->Session->flash();
    echo $this->Session->flash('auth');
?>
<table cellpadding="5px" cellspacing="5px" id='login_table'>
    <tr>
        <td>
            Username
        </td>
        <td>
            <?php echo $this->Form->input('username', array('label'=>false)); ?>
        </td>
    </tr>
    <tr>
        <td>
            Password
        </td>
        <td>
            <?php echo $this->Form->input('password', array('label'=>false)); ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <?php echo $this->Form->submit('Login', array('class'=>'admin_button')); ?>
        </td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>