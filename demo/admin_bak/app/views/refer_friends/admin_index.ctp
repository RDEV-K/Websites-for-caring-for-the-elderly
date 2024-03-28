<div class="staticPages index">
	<?php
			echo $this->element('admin/content_header',
							array('contentTitle'=>'Refer A Friend Manager', 
							)); 
	?>
	<?php echo $this->Form->create('ReferFriend', array('controller'=>'referFriends', 'action'=>'index', 'type'=>'GET')); ?>
	<table class="search_option_table">
		<tr>
			<th colspan="3">
				Search
			</th>
		</tr>

		<tr>
			<td width='200px'>
				Search By ReferFriend Name :
			</td>
			<td width='200px'>
				<?php
					$field1 = isset($this->params['named']['first_name']) ? $this->params['named']['first_name'] : null;
					echo $this->Form->input('first_name', array('label'=>false,'value'=>$field1));
				?>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width='200px'>
				Search By Email Address :
			</td>
			<td width='200px'>
				<?php
					$field1 = isset($this->params['named']['email']) ? $this->params['named']['email'] : null;
					echo $this->Form->input('email', array('label'=>false,'value'=>$field1));
				?>
			</td>
			<td>
				<?php echo $this->Form->submit('Search', array('class'=>'admin_button')); ?>
			</td>
		</tr>
	</table>
	<?php echo $this->Form->end(); ?>
	<p class='pagi'><?php echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of
				 {:count} total, starting on record {:start}, ending on {:end}',true)
	)); ?></p>
	<?php echo $this->Form->create('ReferFriend', array('controller'=>'referFriends', 'action'=>'delete_multiple')); ?>
	<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="center"><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
		<th class="center"><?php echo $this->Paginator->sort('Name','first_name');?></th>
		<th class='center'><?php echo $this->Paginator->sort('Email Address','email');?></th>
		<th class='center'><?php echo $this->Paginator->sort('Is Agree','is_agree');?></th>
		<th class="center"><?php echo __('Edit');?></th>
		<th class="center"><?php echo __('Delete');?></th>
	</tr>
	<?php
		foreach($referFriends as $referFriend):
	?>

		<tr>
			<td class="numeric">
				<?php echo __($referFriend['ReferFriend']['id']); ?>
			</td>
			
			<td>
				<?php
					echo __($referFriend['ReferFriend']['first_name']);
				?>
			</td>
			<td><?php echo __($referFriend['ReferFriend']['email']); ?></td>
			<td><?php echo __($referFriend['ReferFriend']['is_agree']); ?></td>
			<td class="actions links">
				<?php echo $this->Html->link($this->Html->image("admin/edit_link.png"), array('action' => 'edit', $referFriend['ReferFriend']['id']), array('escape'=>false)); ?>
			</td>
			<td>
				<?php
						echo $this->Form->checkbox($referFriend['ReferFriend']['id'],array('label'=>false,'value'=>$referFriend['ReferFriend']['id']));
				?>
			</td> 
		</tr>
	<?php endforeach; ?>
	<?php echo $this->element('admin/pagination_row', array('cols'=>6)); ?>
	</table>
	<?php echo $this->Form->end();?>
</div>