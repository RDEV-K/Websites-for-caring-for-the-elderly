<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		::Capys Realtors::
        <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cpuys','jquery.jcarousel','skin'));
		echo $this->Javascript->link(array('image_fade_in.js','jquery-1.3.1.min.js','jquery.jcarousel.pack.js'));
		echo $scripts_for_layout;
	?>
</head>
<body>
<!--main div start-->
<div id="main">
    <!--header div start-->
    <div class="header_div">
        <div class="logo"><?php echo $this->Html->link($this->Html->image('logo.jpg',array('alt'=>'image')),array('controller'=>'fronts','action'=>'view','slug'=>'home','ext'=>'html', 'plugin'=>false),array('escape'=>false)); ?></div>
        <div class="header_rt_div">
            <ul class="language">
                <li>
                    <h1><?php echo $this->Html->link($this->Html->image("english_flag.jpg",array('alt'=>'image')),array('action'=>'set_cookies','eng'),array('escape'=>false)); ?></h1>
                    <h2><?php echo $this->Html->link('English',array('action'=>'set_cookies','eng'),array('escape'=>false)); ?></h2>
                </li>
                <li>
                    <h1><?php echo $this->Html->link($this->Html->image('french.jpg',array('alt'=>'image')),array('action'=>'set_cookies','frn'),array('escape'=>false)); ?></h1>
                    <h2><?php echo $this->Html->link('French',array('action'=>'set_cookies','frn'),array('escape'=>false)); ?></h2>
                </li>
            </ul>
        </div>
    </div>
    <!--header div end-->
    
    <!--main link div start-->
    <div id="main_link_div">
        <ul class="menu">
        	<?php $pages = $this->requestAction(array('controller' => 'fronts', 'action' => 'menu'));?>
			<?php foreach($pages as $page): ?>
            <li>
            	<?php
					if($page['Page']['id']!=1 && $page['Page']['active']!=0){
						if(isset($cookie) && $cookie == 'frn'){
							echo $this->Html->link(__( $page['Page']['french_name'], true), array('controller'=>'fronts','action' => 'view', 'slug'=>$page['Page']['slug'], 'ext'=>'html'));
						}else{
							echo $this->Html->link(__( $page['Page']['name'], true), array('controller'=>'fronts','action' => 'view', 'slug'=>$page['Page']['slug'], 'ext'=>'html'));
						}
					}
				?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--main link div end-->