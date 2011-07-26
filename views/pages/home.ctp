          <h1><?php echo $this->Html->image('themeAdmin/icons/dashboard.png', array("alt"=>""));?>Tableau de bord</h1>
		<div class="bloc left">
    <div class="title">
       Départements
    </div>
    <div class="content dashboard">
        <div class="center">

			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/page.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Write an Article',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/picture.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'test',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/contact.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'  Manage contacts',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/event.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).' Manage events',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/page.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'test',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
			?>

            <div class="cb"></div>
        </div>
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
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/font.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Typography',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>	
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/window.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Table',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>	
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/warning.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Notifications',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/posts.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Forms',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/chart.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Charts',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>
	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/calendar.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Calendar',
					array('controller'=>'recettes', 'action'=>'supprimer', 6),
					array('class'=>'shortcut','escape' => false)
				);
	?>
     
        <div class="cb"></div>
    </div>
</div> 