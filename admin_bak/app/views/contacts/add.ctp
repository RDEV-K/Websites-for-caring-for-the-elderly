<ul class="breadcrumb">
	<li>
	<?php echo $this->Html->link('Home',array('controller'=>'home'));?> <span class="divider">/</span>
	</li>
	<li class="active">Contact Us</li>
</ul>
<div class="page-header">
	<h2>Contact Us</h2>
	<p>We would love to hear from you. Questions? Comments? Let us hear what you have to say about us.</p>
</div>
<?php echo $this->Form->create('Contact', array('action'=>'add','inputDefaults'=>array('div'=>false,'label'=>false),'class'=>'ContactAddForm form-horizontal','onsubmit'=>'return validate(".ContactAddForm")'));?>
	<fieldset>
		<!--<legend>We would love to hear from you. Questions? Comments? Let us hear what you have to say about Form Appliction Tours and servies.</legend>-->
		<div class="control-group">
			<?php
				echo $this->element('ContactFriend_from');
			?>
			<div class="form-actions">
				<?php echo $this->Form->button('Submit',array('div'=>false,'class'=>'btn btn-primary','type'=>'submit')); ?>
				<?php echo $this->Form->button('Reset',array('type'=>'reset','class'=>'btn')); ?>
			</div>
			
		</div>
	</fieldset>
<?php echo $this->Form->end();?>
