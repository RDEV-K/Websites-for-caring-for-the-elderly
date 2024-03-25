<div class="staticPages index">
	<?php
			echo $this->element('admin/content_header',
							array('contentTitle'=>'Blog Manager', 'newLink'=>array(
								'description'=>'This section displays the list of Blog',
								'controller_name'=>'blogs',
								'link_text'=>'New Blog'
							))); 
	?>
	<?php echo $this->Form->create('Blog', array('controller'=>'blogs', 'action'=>'index', 'type'=>'GET')); ?>
	<table class="search_option_table">
		<tr>
			<th colspan="3">
				Search
			</th>
		</tr>

		<tr>
			<td width='200px'>
				Search By Blog Title :
			</td>
			<td width='200px'>
				<?php
					$field1 = isset($this->params['named']['title']) ? $this->params['named']['title'] : null;
					echo $this->Form->input('title', array('label'=>false,'value'=>$field1));
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
	<?php echo $this->Form->create('Blog', array('controller'=>'blogs', 'action'=>'delete_multiple')); ?>
	<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="center"><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
		<th class="center"><?php echo $this->Paginator->sort('Title','title');?></th>
		<th class='center'><?php echo $this->Paginator->sort('Event Date','date');?></th>
		<th class="center"><?php echo __('Active');?></th>
		<th class="center"><?php echo __('Edit');?></th>
		<th class="center"><?php echo __('Delete');?></th>
	</tr>
	<?php
		foreach($blogs as $blog):
	?>
		<tr>
			<td class="numeric">
				<?php echo __($blog['Blog']['id']); ?>
			</td>
			
			<td>
				<?php
					echo __($blog['Blog']['title']);
				?>
			</td>
			<td><?php echo __($blog['Blog']['date']); ?></td>
			<td>
				<?php echo $this->Status->create($blog['Blog']['id'] , $blog['Blog']['active']);?>
			</td>
			<td class="actions links">
				<?php echo $this->Html->link($this->Html->image("admin/edit_link.png"), array('action' => 'edit', $blog['Blog']['id']), array('escape'=>false)); ?>
			</td>
			<td>
				<?php
						echo $this->Form->checkbox($blog['Blog']['id'],array('label'=>false,'value'=>$blog['Blog']['id']));
				?>
			</td> 
		</tr>
	<?php endforeach; ?>
	<?php echo $this->element('admin/pagination_row', array('cols'=>6)); ?>
	</table>
	<?php echo $this->Form->end();?>
</div>