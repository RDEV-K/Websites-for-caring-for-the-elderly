<!DOCTYPE html>
<html>
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php 
			if (!empty($title_for_layout)) {
				echo $title_for_layout . " - ";
			} 
		?>
		Form Application
	</title>
	<?php
		//echo $this->Html->meta('icon');
		echo $this->Html->css(
			array(
				'bootstrap.min',
				'bootstrap-responsive.min',
				'style',
				'datepicker',
				'jquery-ui-1.8.16.custom'
			)
		);
		echo $this->Javascript->link(
			array(
				'jquery-1.7.2.min',
				'bootstrap.min',
				'jquery-ui-1.8.16.custom.min',
				'front_validation_rules',
				'datepicker',
				'datepicker_defaults'
			)
		);
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div class="container">
		<header>
			<h1><?php echo __('Form Application'); ?></h1>
			<div class="navbar">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<ul class="nav">
								<?php echo $this->Nav->link('Blog', 'active', array('controller'=>'home')); ?>
								<?php echo $this->Nav->link('Request Form', 'active', array('controller'=>'requests','action'=>'add'));?>
								<?php echo $this->Nav->link('Conatct Us', 'active', array('controller'=>'contacts','action'=>'add'));?>
								<?php echo $this->Nav->link('Refer A Friend', 'active', array('controller'=>'referFriends','action'=>'add'));?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<?php echo $session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</section>
		<footer class="footer">
			<hr>
			Powered by <a href="http://www.logicielsolutions.co.in" alt="Logiciel Solutions">Logiciel Solutions</a>
		</footer>
	</div>
	
</body>
</html>
 