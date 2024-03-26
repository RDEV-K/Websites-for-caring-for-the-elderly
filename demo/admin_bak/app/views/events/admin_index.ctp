<div class="staticPages index">
	<?php
			echo $this->element('admin/content_header',
							array('contentTitle'=>'Event Manager', 'newLink'=>array(
								'description'=>'This section displays the list of Event',
								'controller_name'=>'events',
								'link_text'=>'New Event'
							))); 
	?>
	<?php echo $this->Form->create('Event', array('controller'=>'events', 'action'=>'index', 'type'=>'GET')); ?>
	<table class="search_option_table">
		<tr>
			<th colspan="3">
				Search
			</th>
		</tr>

		<tr>
			<td width='200px'>
				Search By Event Name :
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
	<?php echo $this->Form->create('Event', array('controller'=>'events', 'action'=>'delete_multiple')); ?>
	<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="center"><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
		<th class="center"><?php echo $this->Paginator->sort('Title','title');?></th>
		<th class='center'><?php echo $this->Paginator->sort('Date','event_date');?></th>
		<th class="center"><?php echo __('active');?></th>
		<th class="center"><?php echo __('Edit');?></th>
		<th class="center"><?php echo __('Delete');?></th>
	</tr>
	<?php
		foreach($events as $event):
	?>
	<tr>
		<td class="numeric">
			<?php echo __($event['Event']['id']); ?>
		</td>	
		<td>
			<?php	echo __($event['Event']['title']); ?>
		</td>
		<td><?php echo __($event['Event']['event_date']); ?></td>
		<td>
			<?php echo $this->Status->create($event['Event']['id'] ,$event['Event']['active']);?>
		</td>
		<td class="actions links">
			<?php echo $this->Html->link($this->Html->image("admin/edit_link.png"), array('action' => 'edit', $event['Event']['id']), array('escape'=>false)); ?>
		</td>
		<td>
			<?php
					echo $this->Form->checkbox($event['Event']['id'],array('label'=>false,'value'=>$event['Event']['id']));
			?>
		</td> 
	</tr>
	<?php endforeach; ?>
	<?php echo $this->element('admin/pagination_row', array('cols'=>6)); ?>
	</table>
	<?php echo $this->Form->end();?>
</div>