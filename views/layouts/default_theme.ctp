<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
<?php echo $this->Html->charset(); ?>
<!--[if lt IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<!-- iPad Settings -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0">
<!-- iPad End -->

<title><?php echo $title_for_layout; ?></title>

<link rel="shortcut icon" href="favicon.html">

<!-- iOS ICONS -->
<link rel="apple-touch-icon" href="touch-icon-iphone.html" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.html" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.html" />
<link rel="apple-touch-startup-image" href="touch-startup-image.html">
<!-- iOS ICONS END -->

<!-- STYLESHEETS -->
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('theme/reset.css');
		echo $this->Html->css('theme/grids.css');
		echo $this->Html->css('theme/style.css');
		echo $this->Html->css('theme/jquery.uniform.css');
		echo $this->Html->css('theme/forms.css');
		echo $this->Html->css('theme/themes/gray/style.css');
		//	echo $this->Html->css('cake.generic');
	?>

<!-- jQplot CSS -->
<?php echo $this->Html->css('/lib/jqplot/jquery.jqplot.min.css',array("media"=>"screen")); ?>
<!-- jQplot CSS END -->

<!--[if lt IE 9]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<![endif]-->

<style type = "text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color: #eeeeee; height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->

</head>
<body style="overflow: hidden;">
    <div id="loading"> 

        <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                           "<img id='loading-graphic' width='16' height='16' src='images/ajax-loader-eeeeee.gif' /> " +
                           "Loading...</p></div>");
        </script> 

    </div> 

    <div id="wrapper">
        <header>
            <h1><a href="#">Gestion du personnel</a></h1>
            <nav>
				<ul id="main-navigation" class="clearfix"> 
					<li class="dropdown active"> 
						<a href="#a">active item</a> 
						<ul> 
							<li> 
								<a href="#aa">menu item</a> 
							</li> 
							<li class="dropdown"> 
								<a href="#ab">menu item</a> 
								<ul> 
									<li class="current"><a href="#">menu item</a></li> 
									<li><a href="#aba">menu item</a></li> 
									<li><a href="#abb">menu item</a></li> 
									<li><a href="#abc">menu item</a></li> 
									<li><a href="#abd">menu item</a></li> 
								</ul> 
							</li> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
						</ul> 
					</li> 
					<li> 
						<a href="#">menu item</a> 
					</li> 
					<li class="dropdown"> 
						<a href="#">menu item</a> 
						<ul> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
							<li class="dropdown"> 
								<a href="#">menu item</a> 
								<ul> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
									<li><a href="#">menu item</a></li> 
								</ul> 
							</li> 
						</ul> 
					</li> 
					<li class="dropdown"> 
                        <a href="#">Themes</a> 
                        <ul>
                            <li><a href="dashboard.html">Lightblue</a></li> 
                            <li><a href="gray.html">Gray</a></li> 
                            <li><a href="dark.html">Dark</a></li> 
                        </ul> 
					</li>	
                    <li class="fr dropdown"> 
                        <a href="#" class="with-profile-image"><span><img src="img/theme/profile-image.png" /></span>Administrator</a> 
                        <ul> 
                            <li><a href="#">Settings</a></li> 
                            <li><a href="#">Users</a></li> 
                            <li><a href="#">Groups</a></li> 
                            <li><a href="#">Signout</a></li> 
                        </ul>
                    </li> 
				</ul> 
            </nav>
        </header>
        
        <section>
            <!-- Sidebar -->

            <aside>
                <nav>
                    <ul>
                        <li class="current"><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="forms.html">Forms</a></li>
                        <li><a href="wizard.html">Wizard</a></li>
                        <li><a href="tables.html">Tables</a></li>
                    </ul>
                </nav>
                <nav>
                    <h2>Applications</h2>
                    <ul>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="wysiwyg.html">WYSIWYG Editor</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Sidebar End -->

            <section>
                <header class="container_12 clearfix">
                    <div class="grid_12">
                        <h1>Dashboard</h1>
                    </div>
                </header>
                 
               
                   
                <section class="container_12 clearfix">
                
                    <section class="grid_12"> 
                    
                        <div class="clearfix">
                           <?php echo $this->Session->flash(); ?>
                        </div>
                  
                    </section> 
                
                   
                    <div class="clear"></div>
                    
                   

               
                     
                    <section class="portlet grid_12 leading">
                       
                        <section class="clearfix">
                           <?php echo $content_for_layout; ?>
                        </section>
                    </section>
                    
                    <div class="clear"></div>
                    <section class="portlet grid_12 leading">
                        <header>
                            <h2>Portlet</h2>
                        </header>
                        <section class="clearfix">
                          <?php echo $this->element('sql_dump'); ?>
                        </section>
                    </section>
                    
              
                

                  
                </section>
                <footer class="container_12 clearfix">
                    <div class="grid_12">
                        Copyright &copy; 2011. 
                    </div>
                </footer>
            </section>

            <!-- Main Section End -->
        </section>
    </div>
    
    <!-- MAIN JAVASCRIPTS -->
     	<?php 
	 echo $javascript->link("theme/jquery.min.js", true);
	 echo $javascript->link("theme/global.js", true);
	 echo $javascript->link("theme/jquery.tools.min.js", true);
	 echo $javascript->link("theme/jquery.uniform.min.js", true);
	
	?>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/PIE.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]-->

    <!-- MAIN JAVASCRIPTS END -->

    <!-- LOADING SCRIPT -->
    <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    </script>
    <!-- LOADING SCRIPT -->
   
    <!-- jQplot SETUP -->
    <!--[if lt IE 9]>
    <?php echo $javascript->link("lib/jqplot/excanvas.js", true); ?>
    <![endif]-->
    	<?php 
	 echo $javascript->link("lib/jqplot/jquery.jqplot.min.js", true);
	 echo $javascript->link("lib/jqplot/plugins/jqplot.categoryAxisRenderer.min.js", true);
	 echo $javascript->link("lib/jqplot/plugins/jqplot.categoryAxisRenderer.min.js", true);
	 echo $javascript->link("lib/jqplot/plugins/jqplot.barRenderer.min.js", true);
	
	?>
    <script type="text/javascript">
    $(document).ready(function(){
        var line1 = [1,4, 9, 16];
        var line2 = [25, 12.5, 6.25, 3.125];
        var line3 = [2, 7, 15, 30];
        var plot2 = $.jqplot('chart2', [line1, line2, line3], {
            show: true,
            legend:{show:true, location:'ne', xoffset:0},
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer, 
                rendererOptions:{barPadding: 8, barMargin: 10, shadowDepth: 2}
            },
            series:[
                {label:'Profits'}, 
                {label:'Expenses'}, 
                {label:'Sales'}
            ],
            axes:{
                xaxis:{
                    renderer:$.jqplot.CategoryAxisRenderer, 
                    ticks:['1st Qtr', '2nd Qtr', '3rd Qtr', '4th Qtr']
                }, 
                yaxis:{min:0}
            }
        });
    });
    </script>
    <!-- jQplot SETUP END -->
</body>

</html>