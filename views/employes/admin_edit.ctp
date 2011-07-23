<div class="employes form">
<?php echo $this->Form->create('Employe');?>
	<fieldset>
		<legend><?php __('Admin Edit Employe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titre');
		echo $this->Form->input('code');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('genre');
		echo $this->Form->input('categorie');
		echo $this->Form->input('date_embauche');
		echo $this->Form->input('date_naissance');
		echo $this->Form->input('lieu_naissance');
		echo $this->Form->input('numero_assurance');
		echo $this->Form->input('nbre_enfant');
		echo $this->Form->input('adresse');
		echo $this->Form->input('telephone1');
		echo $this->Form->input('telephone2');
		echo $this->Form->input('email');
		echo $this->Form->input('photo');
		echo $this->Form->input('departement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Employe.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Employe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departements', true), array('controller' => 'departements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement', true), array('controller' => 'departements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents', true), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document', true), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>