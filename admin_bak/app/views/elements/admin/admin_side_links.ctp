<table cellpadding='0' cellspacing='0'>
    <tr><td>&nbsp;</td></tr>
	<tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Requests Summary",true), array(
            						'controller'=>'requests','action' =>'admin_index'));
            ?>
        </td>
    </tr>
	
	<tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Events Summary",true), array(
            						'controller'=>'events','action' =>'admin_index'));
            ?>
        </td>
    </tr>
	<tr>
        <td class="last_cell">
            <?php echo $this->Html->link('Add Page', array('controller'=>'events','action' =>'admin_add')); ?>
        </td>
    </tr>
	
	<tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Blogs Summary",true), array(
            						'controller'=>'blogs','action' =>'admin_index'));
            ?>
        </td>
    </tr>
	<tr>
        <td class="last_cell">
            <?php echo $this->Html->link('Add Page', array('controller'=>'blogs','action' =>'admin_add')); ?>
        </td>
    </tr>
	
	<tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Contact Summary",true), array(
            						'controller'=>'contacts', 'action' =>'admin_index'));
            ?>
        </td>
    </tr>
	<tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Refer A Friend Summary",true), array(
            						'controller'=>'referFriends', 'action' =>'admin_index'));
            ?>
        </td>
    </tr>
    <tr>
        <td class="link_header">
            <?php 
            	echo $this->Html->link(__("Change Password",true), array(
            					'controller'=>'users', 'action' => 'change_password','plugin'=>false));
            ?>
        </td>
    </tr>
	<!--User information-->
    <tr>
        <td class="user_info">
            <b><?php __("Login Information"); ?></b><br />
            <div style="width:180px; overflow:hidden;"><?php __("Username : "); ?><?php echo $session->read('Auth.User.username'); ?><br /></div>
            <?php __("Email : "); ?><?php echo CONFIG_ADMIN_MAIL; ?>
        </td>
    </tr>
    <!--End user information part-->
</table>