﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
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
         <?php
		 echo $javascript->link("themeAdmin/jquery.uniform.min.js", true);
		 echo $scripts_for_layout;
		 ?>
		  
       

    </head>

    <body class="white whitealt">   
        
        <!-- HEAD--> 
      <?php echo $this->element('sidebar'); ?>
                
       <div class="cb"></div>         
        <!--SIDEBAR--> 
      <?php echo $this->element('header'); ?>
    
                
                
   <div class="cb"></div>             
        <!-- CONTENT --> 
     <div id="content" >
		
	 <h1>Fiche de l'employé au format pdf</h1>
	 
	<?php echo $this->Session->flash();
	?>
	<div class="cb"></div>
	<div class="bloc requet">
		<div class="content">
		<?php
		$fichier = 'fiche_'.$employe['Employe']['nom']."-".$employe['Employe']['prenom']."_".$employe['Employe']['matricule'].'.pdf';
		echo $html->link('Télécharger',array('controller'=>'employes', 'action'=>'telecharger', $fichier),array("class"=>"button"));
	
		?>
		</div>
	</div>
	<div class="cb"></div>
	<div class="bloc">
	<div id="area" class="content" style="display: block;">
	<?php
	echo $content_for_layout;
	?>
	</div>
	</div>
	<div class="cb"></div>

</div>
    </body>
</html>