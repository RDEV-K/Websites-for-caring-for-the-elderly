<div class="staticPages index">
	<?php
			echo $this->element('admin/content_header',
							array('contentTitle'=>'Conatct Manager', 
							)); 
	?>
	<?php echo $this->Form->create('Contact', array('controller'=>'contacts', 'action'=>'index', 'type'=>'GET')); ?>
	<table class="search_option_table">
		<tr>
			<th colspan="3">
				Search
			</th>
		</tr>

		<tr>
			<td width='200px'>
				Search By Contact Name :
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
	<?php echo $this->Form->create('Contact', array('controller'=>'contacts', 'action'=>'delete_multiple')); ?>
	<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="center"><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
		<th class="center"><?php echo $this->Paginator->sort('Name','first_name');?></th>
		<th class='center'><?php echo $this->Paginator->sort('Email Address','email');?></th>
		<th class="center"><?php echo __('Edit');?></th>
		<th class="center"><?php echo __('Delete');?></th>
	</tr>
	<?php
		foreach($contacts as $contact):
	?>

		<tr>
			<td class="numeric">
				<?php echo __($contact['Contact']['id']); ?>
			</td>
			
			<td>
				<?php
					echo __($contact['Contact']['first_name']);
				?>
			</td>
			<td><?php echo __($contact['Contact']['email']); ?></td>
			<td class="actions links">
				<?php echo $this->Html->link($this->Html->image("admin/edit_link.png"), array('action' => 'edit', $contact['Contact']['id']), array('escape'=>false)); ?>
			</td>
			<td>
				<?php
						echo $this->Form->checkbox($contact['Contact']['id'],array('label'=>false,'value'=>$contact['Contact']['id']));
				?>
			</td> 
		</tr>
	<?php endforeach; ?>
	<?php echo $this->element('admin/pagination_row', array('cols'=>5)); ?>
	</table>
	<?php echo $this->Form->end();?>
</div>