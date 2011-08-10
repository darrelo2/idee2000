<?php echo $html->docType("xhtml-trans"); ?>  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
       <head>
		<meta http-equiv="X-UA-Compatible" content="IE=5;IE=6;IE=7;IE=8;IE=9" >
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
		<!--[if IE]>
		<?php echo $this->Html->css('themeAdmin/ie-style.css'); ?>
		<![endif]-->
        <!--[if lt IE 7]>
		<?php echo $javascript->link("ie/IE7.js", true); ?>
		<![endif]-->
		<!--[if lt IE 8]>
		<?php echo $javascript->link("ie/IE8.js", true); ?>
		<![endif]-->
		<!--[if lt IE 9]>
		<?php echo $javascript->link("ie/IE7.js", true); ?>
		<![endif]-->
        
        <!-- jQuery AND jQueryUI -->
		<?php 
	
		 echo $javascript->link("jquery/jquery.min.js", true);
		 echo $javascript->link("jquery/jquery-ui.min.js", true);
		 echo $javascript->link("jquery/jquery.dataTables.min.js", true);
		 echo $javascript->link("jquery/interface.js", true);
		 echo $javascript->link("jquery/jquery.jqprint.js", true);
		
		?>
		

		<!-- tinyTips - http://tinyTips.com/ -->
		<?php 
	
		 echo $javascript->link("lib/tinyTips/js/jquery.tinyTips.js", true);
		 echo $this->Html->css("/webroot/js/lib/tinyTips/css/tinyTips.css", true);
		
		?>
        <!-- Tooltipsy - http://tooltipsy.com/ -->
        <?php echo $javascript->link("themeAdmin/tooltipsy.min.js", true); ?>
        
        <!-- Charts - http://www.filamentgroup.com/lab/update_to_jquery_visualize_accessible_charts_with_html5_from_designing_with/ -->
         <?php echo $javascript->link("themeAdmin/visualize.jQuery.js", true); ?>
        <!-- Uniform - http://uniformjs.com/ -->
         <?php
		 echo $javascript->link("themeAdmin/jquery.uniform.min.js", true);
		 echo $scripts_for_layout;
		 ?>
    </head>

    <body>
                
            <div id="content" class="login">
				<h1>Veuillez vous connectez</h1>
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
