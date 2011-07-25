<!DOCTYPE html>
<html>
    <head>
        <title>Your Admin Panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <!-- Reset all CSS rule -->
        <?php echo $this->Html->css('themeAdmin/reset.css'); ?>
        <!-- Main stylesheed  (EDIT THIS ONE) -->
		 <?php echo $this->Html->css('themeAdmin/style.css'); ?>
        
        <!-- jQuery AND jQueryUI -->
		<?php 
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

    </head>

    <body class="white whitealt">
        
        
        <!--              
                HEAD
                        --> 
        <div id="head">
            <div class="left">
                <a href="" class="button profile"><img src="img/icons/huser.png" alt="" /></a>
                Hi, 
                <a href="#">John Doe</a>
                |
                <a href="#">Logout</a>

            </div>
            <div class="right">
                <form action="#" id="search" class="search placeholder">
                    <label>Looking for something ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>

        </div>
                
                
        <!--            
                SIDEBAR
                         --> 
        <div id="sidebar">
            <ul>
                <li class="nosubmenu">
                    <a href="index.html">
                        <img src="img/icons/menu/black-dashboard.png" alt="" />
                        Dashboard
                    </a>
                </li>

                <li><a href="#"><img src="img/icons/menu/black-layout.png" alt="" /> Elements</a>
                    <ul>
                                                <li><a href="index.html">Dashboard</a></li>
                                                <li><a href="forms.html">Forms</a></li>
                                                <li><a href="table.html">Table</a></li>
                                                <li><a href="notif.html">Notifications</a></li>

                                                <li><a href="charts.html">Charts</a></li>
                                                <li><a href="typo.html">Typography</a></li>
                                                <li><a href="calendar.html">Calendar</a></li>
                                                <li><a href="index.html">Everything on the same page !</a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="img/icons/menu/black-color.png" alt="" /> Alternate colors</a>

                    <ul>
                        <li><a href="index.html"><span>White</span></a></li>
                        <li><a href="whitealt.html"><span>White with dark sidebar</span></a></li>
                        <li><a href="black.html"><span>Black</span></a></li>
                        <li><a href="wood.html"><span>Wood</span></a></li>
                    </ul>
                </li>

                <li class="nosubmenu"><a href="#"><img src="img/icons/menu/black-pacman.png" alt="" /> This button is useless</a></li>
            </ul>


        </div>
                
                
                
                
        <!--            
              CONTENT 
                        --> 
        <div id="content">
                                                <h1><img src="img/icons/dashboard.png" alt="" />Dashboard
</h1>
                

<div class="bloc left">
    <div class="title">
        Dashboard
    </div>
    <div class="content dashboard">
        <div class="center">
            <a href="#" class="shortcut">
                <img src="img/page.png" alt="" width="48" height="48"/>
                Write an Article
            </a>

            <a href="#" class="shortcut">
                <img src="img/picture.png" alt="" width="48" height="48" />
                Write an Article
            </a>
            <a href="#" class="shortcut">
                <img src="img/contact.png" alt="" width="48" height="48" />
                Manage contacts
            </a>
            <a href="#" class="shortcut last">
                <img src="img/event.png" alt="" width="48" height="48" />

                Manage events
            </a>
            <div class="cb"></div>
        </div>
        <p>Icons by <a href="http://icondrawer.com">icondrawer.com</a></p>
    </div>
</div>


                

<div class="bloc right">
    <div class="title">
        Today
    </div>
    <div class="content">
        <div class="left">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Content</em></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>460</h4></td>
                        <td>Posts</td>
                    </tr>
                    <tr>

                        <td><h4>12</h4></td>
                        <td>Pages</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td>Categories</td>
                    </tr>

                    <tr>
                        <td><h4>20 000</h4></td>
                        <td>Contacts</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="right">

            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Comments</em></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><h4>46 000</h4></td>
                        <td class="good">Comments</td>
                    </tr>
                    <tr>
                        <td><h4>5</h4></td>
                        <td class="neutral">Waiting for validation</td>
                    </tr>

                    <tr>
                        <td><h4>0</h4></td>
                        <td class="bad">Spams</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cb"></div>

    </div>
</div>


<div class="cb"></div>


           
<div class="bloc">
    <div class="title">
        Shortcuts
    </div>
    <div class="content">

        <a href="typo.html" class="shortcut">
            <img src="img/icons/font.png" alt="" />
            Typography
        </a>
        <a href="table.html" class="shortcut">
            <img src="img/icons/window.png" alt=""  width="32" height="32"/>
            Table
        </a>
        <a href="notif.html" class="shortcut">
            <img src="img/icons/warning.png" alt=""  width="32" height="32"/>

            Notifications
        </a>
        <a href="forms.html" class="shortcut">
            <img src="img/icons/posts.png" alt=""  width="32" height="32"/>
            Forms
        </a>
        <a href="charts.html" class="shortcut">
            <img src="img/icons/chart.png" alt=""  width="32" height="32"/>
            Charts
        </a>

        <a href="calendar.html" class="shortcut">
            <img src="img/icons/calendar.png" alt=""  width="32" height="32"/>
            Calendar
        </a>
        <div class="cb"></div>
    </div>
</div>                                    <h1><img src="img/icons/posts.png" alt="" />Forms</h1>

<div class="bloc">
    <div class="title">Simple inputs</div>

    <div class="content">
        <div class="input">
            <label for="input1">Text input</label>
            <input type="text" id="input1" />
            Some informations on how to use this field
        </div>
        <div class="input medium error">
            <label for="input2">Medium input with error</label>

            <input type="text" id="input2" />
            <span class="error-message">This field can't be empty !</span>
        </div>
        <div class="input long">
            <label for="input3">Loooooooooong input</label>
            <input type="text" id="input3" />
        </div>
        <div class="input">

            <label for="file">Upload a file</label>
            <input type="file" id="file" />
        </div>

        <div class="input">
            <label class="label">Checkboxes</label>
            <input type="checkbox" id="check1" checked="checked"/><label for="check1" class="inline">This is a checkbox</label> <br/>

            <input type="checkbox" id="check2" /><label for="check2" class="inline">Another one !</label> <br/>
        </div>
        <div class="input">
            <label class="label">Radio</label>
            <input type="radio" id="radio1" name="radiobutton"  checked="checked"/><label for="radio1" class="inline">This is a radio input</label> <br/>
            <input type="radio" id="radio2"  name="radiobutton"/><label for="radio2" class="inline">And this is another radio input</label>

        </div>
        <div class="input">
            <label for="select">This is a "select" input</label>
            <select name="select" id="select">
                <option value="1">First value</option>
                <option value="2">Second value</option>
                <option value="3">Third value</option>

            </select>
        </div>
        <div class="input textarea">
            <label for="textarea1">Textarea</label>
            <textarea name="text" id="textarea1" rows="7" cols="4"></textarea>
        </div>
        <div class="submit">
            <input type="submit" value="Enregistrer" />

            <input type="reset" value="Black button" class="black"/>
            <input type="reset" value="White button" class="white"/>
        </div>
    </div>
</div>

<div class="bloc">
    <div class="title">Advanced inputs</div>
    <div class="content">
        <div class="input">

            <label for="input4">Datepicker using jQuery UI</label>
            <input type="text" class="datepicker" id="input4"/>
        </div>
        <div class="input textarea">
            <label for="textarea2">Autogrow WYSIWYG Textarea (<a href="https://github.com/akzhan/jwysiwyg">jwysiwyg</a>)</label>
            <textarea name="text" id="textarea2" rows="7" class="wysiwyg" cols="4">
                Here you <em>can have</em> some <strong>HTML Content</strong>
            </textarea>

        </div>
        <div class="input">
            <label>Range : $<span></span></label>
            <input type="text" class="range min-10 max-60" value="35" />
        </div>
        
        <div class="input">
            <label for="iphonecheck" class="label">Iphone checkbox</label>
            <input type="checkbox" id="iphonecheck" class="iphone"/>

        </div>
        
        
    </div>
</div>                                    <h1><img src="img/icons/posts.png" alt="" />Table</h1>
<div class="bloc">
    <div class="title">
        Table Content
    </div>
    <div class="content">
        <table>

            <thead>
                <tr>
                    <th><input type="checkbox" class="checkall"/></th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Catégories</th>
                    <th>Tags</th>

                    <th><img src="img/th-comment.png" alt="" /></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>

                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>

                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>

                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>

                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>

                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>

                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>

                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>

                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>

                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>

                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>

                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>

                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>

                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>

                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>

                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>
                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>

                    <td><input type="checkbox" /></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td><a href="#">Grafikart</a></td>
                    <td><a href="#">Dolor</a> , <a href="#">Amet</a></td>
                    <td><a href="#">Consecte</a> , <a href="#">Adipiscin</a>, <a href="#">Elit</a></td>

                    <td>35</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                            </tbody>
        </table>
        <div class="left input">
            <select name="action" id="tableaction">
                <option value="">Action</option>

                <option value="delete">Delete</option>
            </select>
        </div>
        <div class="pagination">
            <a href="#" class="prev">«</a>
            <a href="#">1</a>
            <a href="#" class="current">2</a>

            ...
            <a href="#">21</a>
            <a href="#">22</a>
            <a href="#" class="next">»</a>
        </div>
    </div>
</div>


<div class="bloc">
    <div class="title">
        Table Content with pictures
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Picture</th>

                    <th>Title</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                                <tr>

                    <td class="picture" style="width:140px;"><a href="http://lorempixum.com/800/600/food/0" class="zoombox"><img src="http://lorempixum.com/100/100/food/0" alt="" /></a></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td>http://lorempixum.com/800/600/food/0</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:140px;"><a href="http://lorempixum.com/800/600/food/1" class="zoombox"><img src="http://lorempixum.com/100/100/food/1" alt="" /></a></td>
                    <td><a href="#">Lorem ipsum</a></td>

                    <td>http://lorempixum.com/800/600/food/1</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:140px;"><a href="http://lorempixum.com/800/600/food/2" class="zoombox"><img src="http://lorempixum.com/100/100/food/2" alt="" /></a></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td>http://lorempixum.com/800/600/food/2</td>

                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:140px;"><a href="http://lorempixum.com/800/600/food/3" class="zoombox"><img src="http://lorempixum.com/100/100/food/3" alt="" /></a></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td>http://lorempixum.com/800/600/food/3</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>

                                <tr>
                    <td class="picture" style="width:140px;"><a href="http://lorempixum.com/800/600/food/4" class="zoombox"><img src="http://lorempixum.com/100/100/food/4" alt="" /></a></td>
                    <td><a href="#">Lorem ipsum</a></td>
                    <td>http://lorempixum.com/800/600/food/4</td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                            </tbody>
        </table>

    </div>
</div>



<div class="bloc">
    <div class="title">
        Last comments
    </div>
    <div class="content">
        <table class="noalt">
            <tbody>

                                <tr>
                    <td class="picture" style="width:80px;"><img src="img/anonymous.png" alt="" /></td>
                    <td>
                        <p>
                            <strong><a href="#">John Doe</a></strong><br/>
                            <em>December 24, at 22:13 - <a href="#">Reply</a></em><br/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt.
                        </p>

                    </td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:80px;"><img src="img/anonymous.png" alt="" /></td>
                    <td>
                        <p>
                            <strong><a href="#">John Doe</a></strong><br/>

                            <em>December 24, at 22:13 - <a href="#">Reply</a></em><br/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt.
                        </p>
                    </td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:80px;"><img src="img/anonymous.png" alt="" /></td>

                    <td>
                        <p>
                            <strong><a href="#">John Doe</a></strong><br/>
                            <em>December 24, at 22:13 - <a href="#">Reply</a></em><br/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt.
                        </p>
                    </td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>

                </tr>
                                <tr>
                    <td class="picture" style="width:80px;"><img src="img/anonymous.png" alt="" /></td>
                    <td>
                        <p>
                            <strong><a href="#">John Doe</a></strong><br/>
                            <em>December 24, at 22:13 - <a href="#">Reply</a></em><br/>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt.
                        </p>
                    </td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                                <tr>
                    <td class="picture" style="width:80px;"><img src="img/anonymous.png" alt="" /></td>
                    <td>
                        <p>

                            <strong><a href="#">John Doe</a></strong><br/>
                            <em>December 24, at 22:13 - <a href="#">Reply</a></em><br/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nulla sapien, quis luctus felis. Fusce sodales tempus tincidunt.
                        </p>
                    </td>
                    <td class="actions"><a href="#" title="Edit this content"><img src="img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="img/icons/delete.png" alt="" /></a></td>
                </tr>
                            </tbody>

        </table>
    </div>
</div>                                                    
                
                
<h1><img src="img/icons/warning.png" alt="" />Notifications</h1>

<div class="notif success bloc">
    <strong>Success :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
    <a href="#" class="close"></a>
</div>
<div class="notif error bloc">
    <strong>Error :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
    <a href="#" class="close"></a>

</div>
<div class="notif warning bloc">
    <strong>Warning !</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
    <a href="#" class="close"></a>
</div>
<div class="notif info bloc">
    <strong>Information :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
    <a href="#" class="close"></a>
</div>
<div class="notif tip bloc">

    <strong>Tips :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
    <a href="#" class="close"></a>
</div>


<div class="bloc">
    <div class="title">Notification inside a bloc</div>
    <div class="content">
        <div class="notif success">
            <strong>Success :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            <a href="#" class="close"></a>

        </div>
        <div class="notif error">
            <strong>Error :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            <a href="#" class="close"></a>
        </div>
        <div class="notif warning">
            <strong>Warning !</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            <a href="#" class="close"></a>

        </div>
        <div class="notif info">
            <strong>Information :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            <a href="#" class="close"></a>
        </div>
        <div class="notif tip">
            <strong>Tips :</strong> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            <a href="#" class="close"></a>

        </div>
    </div>
</div>                                    
<h1><img src="img/icons/chart.png" alt="" />Charts</h1>

<div class="bloc">
    <div class="title">
        Charts
        <div class="tabs">
            <a href="#area">Area</a>

            <a href="#pie">Pie</a>
            <a href="#bar">Bar</a>
        </div>
    </div>
    <div class="content" id="area">
        <table class="graph type-line">
            <caption>2009 Employee Sales by Department</caption> 
            <thead> 
                    <tr> 
                            <td></td> 
                            <th scope="col">food</th> 
                            <th scope="col">auto</th> 
                            <th scope="col">household</th> 
                            <th scope="col">furniture</th> 
                            <th scope="col">kitchen</th> 
                            <th scope="col">bath</th> 
                    </tr> 
            </thead> 
            <tbody> 
                    <tr> 
                            <th scope="row">Mary</th> 
                            <td>190</td> 
                            <td>160</td> 
                            <td>40</td> 
                            <td>120</td> 
                            <td>30</td> 
                            <td>70</td> 
                    </tr> 
                    <tr> 
                            <th scope="row">Tom</th> 
                            <td>3</td> 
                            <td>40</td> 
                            <td>30</td> 
                            <td>45</td> 
                            <td>35</td> 
                            <td>49</td> 
                    </tr> 
                    <tr> 
                            <th scope="row">Brad</th> 
                            <td>10</td> 
                            <td>180</td> 
                            <td>10</td> 
                            <td>85</td> 
                            <td>25</td> 
                            <td>79</td> 
                    </tr> 
                    <tr> 
                            <th scope="row">Kate</th> 
                            <td>40</td> 
                            <td>80</td> 
                            <td>90</td> 
                            <td>25</td> 
                            <td>15</td> 
                            <td>119</td> 
                    </tr>		
            </tbody> 
        </table>

    </div>
    <div class="content" id="pie">
        <table class="graph type-pie">
                <caption>2009 Employee Sales by Department</caption>
                <thead>
                        <tr>
                                <td></td>
                                <th scope="col">food</th>

                                <th scope="col">auto</th>
                                <th scope="col">household</th>
                                <th scope="col">furniture</th>
                                <th scope="col">kitchen</th>
                                <th scope="col">bath</th>
                        </tr>

                </thead>
                <tbody> 
                        <tr> 
                                <th scope="row">Mary</th> 
                                <td>190</td> 
                                <td>160</td> 
                                <td>40</td> 
                                <td>120</td> 
                                <td>30</td> 
                                <td>70</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Tom</th> 
                                <td>3</td> 
                                <td>40</td> 
                                <td>30</td> 
                                <td>45</td> 
                                <td>35</td> 
                                <td>49</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Brad</th> 
                                <td>10</td> 
                                <td>180</td> 
                                <td>10</td> 
                                <td>85</td> 
                                <td>25</td> 
                                <td>79</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Kate</th> 
                                <td>40</td> 
                                <td>80</td> 
                                <td>90</td> 
                                <td>25</td> 
                                <td>15</td> 
                                <td>119</td> 
                        </tr>		
                </tbody> 
        </table>

    </div>
    <div class="content" id="bar">
        <table class="graph type-bar">
                <caption>2009 Employee Sales by Department</caption>
                <thead>
                        <tr>
                                <td></td>
                                <th scope="col">food</th>

                                <th scope="col">auto</th>
                                <th scope="col">household</th>
                                <th scope="col">furniture</th>
                                <th scope="col">kitchen</th>
                                <th scope="col">bath</th>
                        </tr>

                </thead>
                <tbody> 
                        <tr> 
                                <th scope="row">Mary</th> 
                                <td>190</td> 
                                <td>160</td> 
                                <td>40</td> 
                                <td>120</td> 
                                <td>30</td> 
                                <td>70</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Tom</th> 
                                <td>3</td> 
                                <td>40</td> 
                                <td>30</td> 
                                <td>45</td> 
                                <td>35</td> 
                                <td>49</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Brad</th> 
                                <td>10</td> 
                                <td>180</td> 
                                <td>10</td> 
                                <td>85</td> 
                                <td>25</td> 
                                <td>79</td> 
                        </tr> 
                        <tr> 
                                <th scope="row">Kate</th> 
                                <td>40</td> 
                                <td>80</td> 
                                <td>90</td> 
                                <td>25</td> 
                                <td>15</td> 
                                <td>119</td> 
                        </tr>		
                </tbody> 
        </table>

    </div>
</div>
                                    
<h1><img src="img/icons/font.png" alt="" />Typography</h1>

<div class="bloc">
    <div class="title">Text</div>
    <div class="content">
        <div class="left">
            <h1>H1 title</h1>

            <h2>H2 title</h2>
            <h3>H3 title</h3>
            <h4>H4 title</h4>
            <h5>H5 title</h5>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit. In vulputate fermentum sollicitudin. Donec purus dolor, sagittis at rutrum id, volutpat eu nisl. Suspendisse quis velit et sapien malesuada vulputate. Pellentesque ante diam, congue ut volutpat nec, varius non erat.</p>

        </div>
        <div class="right">
            <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit. In vulputate fermentum sollicitudin. Donec purus dolor, sagittis at rutrum id, volutpat eu nisl. Suspendisse quis velit et sapien malesuada vulputate. Pellentesque ante diam, congue ut volutpat nec, varius non erat.</p>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Cras nec lectus egestas purus vehicula faucibus sit amet sit amet nunc.</li>

                <li>Cras vel elit nec eros ullamcorper pretium in vel libero.</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit. In vulputate fermentum sollicitudin. Donec purus dolor, sagittis at rutrum id, volutpat eu nisl. Suspendisse quis velit et sapien malesuada vulputate. Pellentesque ante diam, congue ut volutpat nec, varius non erat.</p>
            <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Cras nec lectus egestas purus vehicula faucibus sit amet sit amet nunc.</li>

                <li>Cras vel elit nec eros ullamcorper pretium in vel libero.</li>
            </ol>
            <p>
                <a href="" class="button">a.button</a>
                <a href="" class="button black">a.button.black</a>
                <a href="" class="button white">a.button.white</a>
            </p>

        </div>
        <div class="cb"></div>
    </div>
</div>                                    
<h1><img src="img/icons/calendar.png" alt="" />Calendar</h1>

<div class="bloc calendar">
    <div class="title"><a href="#" class="prev" title="April 2010"></a>June 2010<a href="#" class="next" title="July 2010"></a></div>
    <div class="content">

        <table> 
            <thead> 
                <tr> 
                    <th>Monday</th> 
                    <th>Tuesday</th> 
                    <th>Wednesday</th> 
                    <th>Thursday</th> 
                    <th>Friday</th> 
                    <th>Saturday</th> 
                    <th>Sunday</th> 
                </tr> 
            </thead> 
            <tbody> 
                <tr> 
                    <td colspan="5" class="padding"></td> 
                    <td> 
                        <div class="day">1</div> 
                    </td> 
                    <td> 
                        <div class="day">2</div> 
                    </td> 
                </tr><tr> 
                    <td> 
                        <div class="day">3</div> 
                    </td> 
                    <td> 
                        <div class="day">4</div> 
                    </td> 
                    <td> 
                            <div class="day">5</div> 
                    </td> 
                    <td> 
                            <div class="day">6</div> 
                    </td> 
                    <td> 
                            <div class="day">7</div> 
                    </td> 
                    <td> 
                            <div class="day">8</div> 
                    </td> 
                    <td> 
                            <div class="day">9</div> 
                    </td> 
                </tr><tr> 
                    <td> 
                            <div class="day">10</div> 
                    </td> 
                    <td> 
                            <div class="day">11</div> 
                    </td> 
                    <td> 
                            <div class="day">12</div> 
                    </td> 
                    <td> 
                            <div class="day">13</div> 
                    </td> 
                    <td> 
                            <div class="day">14</div> 
                    </td> 
                    <td> 
                            <div class="day">15</div> 
                    </td> 
                    <td> 
                            <div class="day">16</div> 
                    </td> 
                </tr><tr> 
                    <td> 
                            <div class="day">17</div> 
                    </td> 
                    <td> 
                            <div class="day">18</div> 
                    </td> 
                    <td> 
                            <div class="day">19</div> 
                    </td> 
                    <td class="today"> 
                            <div class="day">20</div> 
                            <ul class="events"> 
                                <li><span>15:00</span><a href="#">Wake up</a></li> 
                            </ul> 
                    </td> 
                    <td> 
                            <div class="day">21</div> 
                            <ul class="events"> 
                                <li><span>09:00</span><a href="#">Event</a></li> 
                                <li><span>11:00</span><a href="#">Another Event</a></li> 
                            </ul> 
                    </td> 
                    <td> 
                            <div class="day">22</div> 
                    </td> 
                    <td> 
                            <div class="day">23</div> 
                    </td> 
                </tr><tr> 
                    <td> 
                            <div class="day">24</div> 
                    </td> 
                    <td> 
                            <div class="day">25</div> 
                    </td> 
                    <td> 
                            <div class="day">26</div> 
                    </td> 
                    <td> 
                            <div class="day">27</div> 
                    </td> 
                    <td> 
                            <div class="day">28</div> 
                    </td> 
                    <td> 
                            <div class="day">29</div> 
                    </td> 
                    <td> 
                            <div class="day">30</div> 
                    </td> 
                </tr><tr> 
                    <td> 
                            <div class="day">31</div> 
                    </td> 
                    <td colspan="6" class="padding"></td> 
                </tr> 
            </tbody> 
        </table>

    </div>
</div>                                    </div>
        
        
    </body>
</html>