    <head>
  
		<?php
		echo $this->Html->charset(); 
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');	
		?>
		<title><?php echo $title_for_layout; ?></title>
        <!-- Reset all CSS rule -->
        <?php 
		echo $this->Html->css('themeAdmin/reset.css'); 
		
		?>
        <!-- Main stylesheed  (EDIT THIS ONE) -->
		 <?php echo $this->Html->css('themeAdmin/style.css'); ?>
		 <?php
		 echo $this->Html->css('themeAdmin/print.css',"stylesheet",array("media"=>"print"));
		 echo $this->Html->css('themeAdmin/jqueryui/jqueryui.css'); 
		 ?>
        
        <!-- jQuery AND jQueryUI -->
		<?php 
		echo $scripts_for_layout;
		 echo $javascript->link("jquery/jquery.min.js", true);
		 echo $javascript->link("jquery/jquery-ui.min.js", true);
		 echo $javascript->link("jquery/jquery.dataTables.min.js", true);
		 echo $javascript->link("jquery/interface.js", true);
		 echo $javascript->link("jquery/jquery.jqprint.js", true);
		
		?>
      
        <!-- Tooltipsy - http://tooltipsy.com/ -->
        <?php echo $javascript->link("themeAdmin/tooltipsy.min.js", true); ?>
       
        <!-- Load zoombox (lightbox effect) - http://www.grafikart.fr/zoombox -->
		 <?php echo $javascript->link("themeAdmin/zoombox/zoombox.js", true); ?>
		 <?php echo $this->Html->css('themeAdmin/zoombox/zoombox.css'); ?>
        
        <!-- Charts - http://www.filamentgroup.com/lab/update_to_jquery_visualize_accessible_charts_with_html5_from_designing_with/ -->
         <?php echo $javascript->link("themeAdmin/visualize.jQuery.js", true); ?>
        <!-- Uniform - http://uniformjs.com/ -->
         <?php echo $javascript->link("themeAdmin/jquery.uniform.min.js", true); ?>
		  
       

    </head>