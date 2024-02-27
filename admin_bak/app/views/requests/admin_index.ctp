<div class="staticPages index">
	<?php
			echo $this->element('admin/content_header',
							array('contentTitle'=>'Request Manager', 
							)); 
	?>
	<?php echo $this->Form->create('Request', array('controller'=>'requests', 'action'=>'index', 'type'=>'GET')); ?>
	<table class="search_option_table">
		<tr>
			<th colspan="3">
				Search
			</th>
		</tr>

		<tr>
			<td width='200px'>
				Search By Request Name :
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
				Admin Employe Tour :
			</td>
			<td width='200px'>
				<?php
					$field1 = isset($this->params['named']['admin_employe_tour']) ? $this->params['named']['admin_employe_tour'] : null;
					echo $this->Form->input('admin_employe_tour', array('label'=>false,'value'=>$field1));
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
	<?php echo $this->Form->create('Request', array('controller'=>'requests', 'action'=>'delete_multiple')); ?>
	<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="center"><?php echo $this->Paginator->sort('ID', 'id'); ?></th>
		<th class="center"><?php echo $this->Paginator->sort('Name','name');?></th>
		<th class='center'><?php echo __('Admin Employe Tour')?></th>
		<th class="center"><?php echo __('Edit')?></th>
		<th class="center"><?php echo __('Delete')?></th>
	</tr>
	<?php
		foreach($requests as $request):
	?>

		<tr>
			<td class="numeric">
				<?php echo __($request['Request']['id']); ?>
			</td>
			
			<td>
				<?php
					echo __($request['Request']['first_name']);
				?>
			</td>
			<td><?php echo __($request['Request']['admin_employe_tour']); ?></td>
			<td class="actions links">
				<?php echo $this->Html->link($this->Html->image("admin/edit_link.png"), array('action' => 'edit', $request['Request']['id']), array('escape'=>false)); ?>
			</td>
			<td>
				<?php
						echo $this->Form->checkbox($request['Request']['id'],array('label'=>false,'value'=>$request['Request']['id']));
				?>
			</td> 
		</tr>
	<?php endforeach; ?>
	<?php echo $this->element('admin/pagination_row', array('cols'=>5)); ?>
	</table>
	<?php echo $this->Form->end();?>
</div>