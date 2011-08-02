          <h1><?php echo $this->Html->image('themeAdmin/icons/dashboard.png', array("alt"=>""));?>Tableau de bord</h1>
		<div class="bloc left">
    <div class="title">
       Accès direct
    </div>
    <div class="content dashboard">
        <div class="center">

			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/employes.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des employés',
					array('controller'=>'employes', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/departements.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des Départements',
					array('controller'=>'departements', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/users.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des utilisateurs',
					array('controller'=>'utilisateurs', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/groups.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des groupes',
					array('controller'=>'groupes', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>			<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/comments.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des commentaires',
					array('controller'=>'commentaires', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/documents.png', array('width'=>'48','height'=>'48','alt'=>'CakePHP', 'border' => '0')).'Liste des documents',
					array('controller'=>'documents', 'action'=>'index'),
					array('class'=>'shortcut','escape' => false)
				);
			?>

            <div class="cb"></div>
        </div>
    </div>
</div>


                

<div class="bloc right">
    <div class="title">
        Informations
    </div>
    <div class="content">
        <div class="left">
            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Contenu</em></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4><?php echo count($employes);?></h4></td>
                        <td>Employés</td>
                    </tr>
                    <tr>

                        <td><h4><?php echo count($departements);?></h4></td>
                        <td>Départements</td>
                    </tr>
                    <tr>
                        <td><h4><?php echo count($groupes);?></h4></td>
                        <td>Groupes</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="right">

            <table class="noalt">
                <thead>
                    <tr>
                        <th colspan="2"><em>Contenu</em></th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                        <td><h4><?php echo count($utilisateurs);?></h4></td>
                        <td class="good">Utilisateurs</td>
                    </tr>
                    <tr>
                        <td><h4><?php echo count($commentaires);?></h4></td>
                        <td class="neutral">Commentaires</td>
                    </tr>

                    <tr>
                        <td><h4><?php echo count($documents);?></h4></td>
                        <td class="bad">Documents</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cb"></div>

    </div>
</div>


<div class="cb"></div>


           
<!--<div class="bloc">
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
</div>-->