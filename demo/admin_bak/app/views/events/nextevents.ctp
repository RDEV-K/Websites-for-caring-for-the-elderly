<ul class="breadcrumb">
	<li>
	<?php echo $this->Html->link('Home',array('controller'=>'home'));?> <span class="divider">/</span>
	</li>
	<li class="active">Six months Events</li>
</ul>
<div class="page-header">
	<h1>
		Events
		<small>List of next six months Events </small>
	</h1>
</div>
<div class="pagination">
	<?php
		echo $this->Paginator->counter(array(
			'format' => 'Showing {:page}-{:pages},of {:count} results '));
	?>
	<div id="number">
		<?php
			echo $this->Paginator->prev(' << ', array(), null, array('class' => 'prev disabled'));
			echo ' ';
			echo $this->Paginator->numbers(array('separator'=>' '));
			echo ' ';
			echo $this->Paginator->next('>> ', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<?php foreach($nextevents as $event):?>
<h2><?php echo $event['Event']['title'];?></h2>
<div>
	<?php echo $event['Event']['event_date'].", Start Time :- ".$event['Event']['start_time'].", End Time :- ".$event['Event']['end_time'];?>
</div>
<?php echo $event['Event']['description'];?>
<?php endforeach;?>
<div class="pagination">
	<?php
		echo $this->Paginator->counter(array(
			'format' => 'Showing {:page}-{:pages},of {:count} results '));
	?>
	<div id="number">
		<?php
			echo $this->Paginator->prev(' << ', array(), null, array('class' => 'prev disabled'));
			echo ' ';
			echo $this->Paginator->numbers(array('separator'=>' '));
			echo ' ';
			echo $this->Paginator->next('>> ', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>