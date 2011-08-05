<!DOCTYPE html>
<html>
       <head>
        <title><?php echo $title_for_layout; ?></title>
		<meta name=robots content=noindex />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
		 echo $this->Html->css('themeAdmin/jqueryui/jqueryui.css'); 
		?>
	
        
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
         <?php echo $javascript->link("themeAdmin/code.js", true); ?>

    </head>

    <body>
                
            <div id="content" class="login">
				
			<?php echo $content_for_layout; ?>
                
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
