<div class="utilisateurs form">
<?php echo $this->Form->create('Utilisateur');?>
	<fieldset>
		<legend><?php __('Admin Add Utilisateur'); ?></legend>
	<?php
		echo $this->Form->input('pseudo');
		echo $this->Form->input('mot_passe');
		echo $this->Form->input('password_confirm');
		echo $this->Form->input('groupe_id');
		echo $this->Form->input('employe_id');
		echo $this->Form->input('departement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departements', true), array('controller' => 'departements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement', true), array('controller' => 'departements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
	</ul>
</div>