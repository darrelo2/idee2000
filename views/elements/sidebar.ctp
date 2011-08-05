   <div id="sidebar">
            <ul>
                <li class="nosubmenu">
					
					<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/black-dashboard.png').'Tableau de bord',
					array('controller' => 'pages', 'action' => 'display', 'accueil'),
					array('class'=>'shortcut','escape' => false)
				);
	?>
                </li>

                <li <?php if($this->params['controller']=="employes") echo 'class="current"';?> >
									<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/agents.png').'Employés','#',
					array('class'=>'shortcut','escape' => false)
				);
	?>
                    <ul class="submenu">
                                                <li>
																	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/list.png').'Liste des employés',
					array('controller' => 'employes', 'action' => 'index'),
					array('class'=>'shortcut','escape' => false)
				);
	?>
												
												</li>
                                                <li>
												<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/pen.png').'Ajouter employé',
					array('controller' => 'employes', 'action' => 'add'),
					array('class'=>'shortcut','escape' => false)
				);
	?>										
												</li>
                                            
                    </ul>
                </li>
				             <li <?php if($this->params['controller']=="departements") echo 'class="current"';?> >
									<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/inbox2.png').'Départements','#',
					array('class'=>'shortcut','escape' => false)
				);
	?>
                    <ul class="submenu">
                                                <li>
																	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/list.png').'Liste des départements',
					array('controller' => 'departements', 'action' => 'index'),
					array('class'=>'shortcut','escape' => false)
				);
	?>
												
												</li>
                                                <li>
												<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/pen.png').'Ajouter Département',
					array('controller' => 'departements', 'action' => 'add'),
					array('class'=>'shortcut','escape' => false)
				);
	?>										
												</li>
                                            
                    </ul>
                </li>
				    <li <?php if($this->params['controller']=="utilisateurs") echo 'class="current"';?>>
									<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/admin.png').'Administrateurs','#',
					array('class'=>'shortcut','escape' => false)
				);
	?>
                    <ul class="submenu">
                                                <li>
																	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/list.png').'Liste des administrateurs',
					array('controller' => 'utilisateurs', 'action' => 'index'),
					array('class'=>'shortcut','escape' => false)
				);
	?>
												
												</li>
                                                <li>
												<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/pen.png').'Ajouter administrateur',
					array('controller' => 'utilisateurs', 'action' => 'add'),
					array('class'=>'shortcut','escape' => false)
				);
	?>										
												</li>
                                            
                    </ul>
                </li>
				
				<!--En production les rôles ne seront pas visibles par les utilisateurs de l'application
					Les rôle permettent de definir les niveaux d'accès à l'application
				
				-->
				    <li <?php if($this->params['controller']=="groupes") echo 'class="current"';?>>
									<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/settings.png').'Roles','#',
					array('class'=>'shortcut','escape' => false)
				);
	?>
                    <ul class="submenu">
                                                <li>
																	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/list.png').'Liste des roles',
					array('controller' => 'groupes', 'action' => 'index'),
					array('class'=>'shortcut','escape' => false)
				);
	?>
												
												</li>
                                                <li>
												<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/pen.png').'Ajouter rôle',
					array('controller' => 'groupes', 'action' => 'add'),
					array('class'=>'shortcut','escape' => false,'title'=>"Définir les niveaux d'accès")
				);
	?>										
												</li>
                                            
                    </ul>
                </li>
					    <li <?php if($this->params['controller']=="documents") echo 'class="current"';?>>
									<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/documents.png').'Gestion des documents','#',
					array('class'=>'shortcut','escape' => false,'title'=>"Gestion des documents des employés")
				);
	?>
                    <ul class="submenu">
                                                <li>
																	<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/list.png').'Liste des documents',
					array('controller' => 'documents', 'action' => 'index'),
					array('class'=>'shortcut','escape' => false,'title'=>"Liste des documents par employé")
				);
	?>
												
												</li>
                                                <li>
												<?php echo $this->Html->link(
					$this->Html->image('themeAdmin/icons/menu/pen.png').'Ajouter documents',
					array('controller' => 'documents', 'action' => 'list_employe'),
					array('class'=>'shortcut','escape' => false,'title'=>"Ajouter les documents d'un employé")
				);
	?>										
												</li>
                                            
                    </ul>
                </li>

            </ul>


        </div>