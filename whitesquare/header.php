<!doctype html>
<html>
     <head>
       <meta charset="utf-8">
       <title>Awesome Theme</title><?php wp_head(); ?>
       <script type="text/javascript" script-name="bangers" src="http://use.edgefonts.net/bangers.js"></script>
     </head>
	 <?php
	   if(is_front_page() ):
	     $awesome_classes = array('awesome-class', 'my-class');
		 else:
		 $awesome_classes = array('no-awesome-class');
      endif;		
	  
	 ?>
<body <?php body_class($awesome_classes); ?>>

 <div class="container">
 
 <div class="row">
      <div class="col-xs-15">
	  
	  <nav class="navbar navbar-default">
	   <div class="container-fluid">
	   <div class="navbar-header">
	   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	   <span class="sr-only">Toggle navigation</span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   </button>
	    <a class="navbar-brand" href="#">Awesome Theme</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php wp_nav_menu(array(
		'theme_location'=>'primary',
		'container'=>false,
		'menu_class' => 'nav navbar-nav navbar-right'
		)
		); 
		?>		
		</div>
		<!--
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav navbar-right">
		 <li><a href="#">Link</a></li>
		 </ul>
		 </div>.navbar-collapse -->
		 </div><!-- .container-fluid -->
		 </nav>
	  
	  
	  </div>
 </div>


