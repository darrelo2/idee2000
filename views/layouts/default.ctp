﻿<?php echo $html->docType("xhtml-trans"); ?>  
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
		 <!--[if lt IE 7]>
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

    <body class="white whitealt">   
        
        <!-- HEAD--> 
      <?php echo $this->element('sidebar'); ?>
                
       <div class="cb"></div>         
        <!--SIDEBAR--> 
      <?php echo $this->element('header'); ?>
    
                
                
   <div class="cb"></div>             
        <!-- CONTENT --> 
     <div id="content">
	 <h1><?php echo $title_for_layout; ?></h1>
	<?php echo $this->Session->flash(); ?>
<div class="cb"></div>
	<div class="bloc">
	<div id="area" class="content" style="display: block;">
	<?php echo $content_for_layout; ?>
	</div>
	</div>
	<div class="cb"></div>


           
<div class="bloc requet">
		<div class="title">
        Requet sql
		</div>
		<div class="content">
		<?php //echo $this->element('sql_dump'); 
		   $regions = array(  
    "Alsace","Aquitaine","Auvergne","Bourgogne","Bretagne","Centre","Champagne-Ardenne","Corse","Franche-Comté","Île-de-France","Languedoc-Roussillon","Limousin","Lorraine","Midi-Pyrénées","Nord-Pas-de-Calais","Basse-Normandie","Haute-Normandie","Pays de la Loire","Picardie","Poitou-Charentes","Provence-Alpes-Côte d'Azur","Rhône-Alpes","Guyane","Guadeloupe","Martinique","Réunion"  
    );
	$villes = array("Bitam","Booué","Cocobeach","Fougamou","Gamba","Kango","Koulamoutou","Lambaréné","Lastoursville","Lékoni","Libreville","Makokou","Masuku","Mayumba","Mbigou","Médouneu","Mékambo","Mimongo","Minvoul","Mitzic","Moanda","Mouila","Mounana","Ndendé","Ndjolé","Nkan","Ntoum","Okandja","Omboué","Oyem","Port-Gentil","Tchibanga","Tsogni");
	$provinces=array("Estuaire","Haut Ogooue","Moyen Ogooue","Ngounie","Nyanga","Ogooue Ivindo","Ogooue Lolo","Ogooue Maritime","Woleu Ntem");
	
	debug($provinces);
	echo count($regions);
		
		?>
		</div>
	</div>
</div>
    </body>
</html>