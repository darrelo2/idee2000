﻿   <div id="head">
            <div class="left">
             	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/huser.png', array('width'=>'20','height'=>'20','alt'=>'déconnexion', 'border' => '0')),
					array('controller'=>'Utilisateurs', 'action'=>'view',$this->Session->read('Auth.Utilisateur.id')),
					array('class'=>'button profile','escape' => false,'title'=>"Afficher votre profile")
				);
			?>	
                Salut, 
                <?php echo $this->Session->read('Auth.Utilisateur.username');?>
				
                |
				
			   <?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/locked.png', array('width'=>'20','height'=>'20','alt'=>'deconnexion', 'border' => '0')).'Deconnexion',
					array('controller'=>'Utilisateurs', 'action'=>'logout'),
					array('class'=>'shortcut','escape' => false,'title'=>"Quitter l'application")
				);
			?>	   
		

            </div>
            <div class="right">
                <form action="#" id="search" class="search placeholder">
                    
                   <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>

  </div>