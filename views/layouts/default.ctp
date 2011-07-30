﻿<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml>
    <head>
  
		<?php
		echo $this->Html->charset(); 
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		
		?>
        <!-- Reset all CSS rule -->
        <?php echo $this->Html->css('themeAdmin/reset.css'); ?>
        <!-- Main stylesheed  (EDIT THIS ONE) -->
		 <?php echo $this->Html->css('themeAdmin/style.css'); ?>
        
        <!-- jQuery AND jQueryUI -->
		<?php 
		echo $scripts_for_layout;
		 echo $javascript->link("jquery/jquery.min.js", true);
		 echo $javascript->link("jquery/jquery-ui.min.js", true);
		 echo $javascript->link("jquery/jquery.dataTables.min.js", true);
		 echo $javascript->link("jquery/interface.js", true);
		 echo $javascript->link("jquery/jquery.jqprint.0.3.js", true);
		 echo $this->Html->css('themeAdmin/jqueryui/jqueryui.css'); 
		?>
	<title><?php echo $title_for_layout; ?></title>
        
        <!-- jWysiwyg - https://github.com/akzhan/jwysiwyg/ -->
        <link rel="stylesheet" href="js/jwysiwyg/jquery.wysiwyg.old-school.css" />
        <script type="text/javascript" src="js/jwysiwyg/jquery.wysiwyg.js"></script>

        
        
        <!-- Tooltipsy - http://tooltipsy.com/ -->
        <script type="text/javascript" src="js/tooltipsy.min.js"></script>
        <?php echo $javascript->link("themeAdmin/jquery.min.js", true); ?>
        <!-- iPhone checkboxes - http://awardwinningfjords.com/2009/06/16/iphone-style-checkboxes.html -->
		<?php 
		echo $javascript->link("themeAdmin/iphone-style-checkboxes.js", true);
		echo $javascript->link("themeAdmin/excanvas.js", true);
		?>
        
        <!-- Load zoombox (lightbox effect) - http://www.grafikart.fr/zoombox -->
		 <?php echo $javascript->link("themeAdmin/zoombox/zoombox.js", true); ?>
		 <?php echo $this->Html->css('themeAdmin/zoombox/zoombox.css'); ?>
        
        <!-- Charts - http://www.filamentgroup.com/lab/update_to_jquery_visualize_accessible_charts_with_html5_from_designing_with/ -->
         <?php echo $javascript->link("themeAdmin/visualize.jQuery.js", true); ?>
        <!-- Uniform - http://uniformjs.com/ -->
         <?php echo $javascript->link("themeAdmin/jquery.uniform.min.js", true); ?>
		  
       

    </head>

    <body class="white whitealt" style="overflow: hidden";>
         <div id="loading"> 

        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='img/ajax-loader-eeeeee.gif' /> " +
                           "Loading...</p></div>");
        </script> 

    </div>    
        
        <!-- HEAD--> 
      <?php echo $this->element('sidebar'); ?>
                
                
        <!--SIDEBAR--> 
      <?php echo $this->element('header'); ?>
    
                
                
                
        <!-- CONTENT --> 
     <div id="content">
	 <h1><?php echo $title_for_layout; ?></h1>
	<?php echo $this->Session->flash(); ?>

	<div class="bloc">
	<div id="area" class="content" style="display: block;">
	<?php echo $content_for_layout; ?>
	</div>
	</div>
	<div class="cb"></div>


           
	<div class="bloc">
		<div class="title">
        Requet sql
		</div>
		<div class="content">
		<?php echo $this->element('sql_dump'); ?>
		</div>
	</div>
</div>
            	   <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    </script>    
        
    </body>
</html>