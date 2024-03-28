<div class="page-header">
	<h1>
		Blogs
		<small>List of blogs</small>
	</h1>
</div>
<div>
	<?php
		echo $this->Paginator->counter(array(
			'format' => 'Showing {:page}-{:pages},of {:count} results '));
	?>
	<div id="number" class="pagination-numbers">
		<?php
			echo $this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator'=>''));
			echo $this->Paginator->next('>>', array(), null, array('class' => 'next disabled'));
		?>
		<div class="clear"></div>
	</div>
</div>


<?php foreach($blogData as $blog):?>
	<h2><?php echo $blog['Blog']['title'];?></h2>
	<div>
		<?php echo $blog['Blog']['date'];?>
	</div>
	<?php echo $blog['Blog']['description'];?>
	
<?php endforeach;?>

<div>
	<?php
		echo $this->Paginator->counter(array(
			'format' => 'Showing {:page}-{:pages},of {:count} results '));
	?>
	<div id="number" class="pagination-numbers">
		<?php
			echo $this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator'=>''));
			echo $this->Paginator->next('>>', array(), null, array('class' => 'next disabled'));
		?>
		<div class="clear"></div>
	</div>
</div>

<div class="page-header">
	<h1>
		Events
		<small> Current Events</small>
	</h1>
</div>
<?php foreach($eventData as $event):?>
	<h2><?php echo $event['Event']['title'];?></h2>
	<div>
		<?php echo $event['Event']['event_date'].", Start Time :- ".$event['Event']['start_time'].", End Time :- ".$event['Event']['end_time'];?>
	</div>

		<?php echo $event['Event']['description'];?>

<?php endforeach;?>
<div class='viewallevents'>
	<?php echo $this->Html->link($this->Html->image('button-events.png'),array('controller'=>'events','action'=>'nextevents'),array('escape'=>false));?>
</div>

