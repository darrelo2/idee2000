<div class="departements view">
<h2><?php  __('Departement');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departement['Departement']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departement['Departement']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Statut'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departement['Departement']['statut']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departement['Departement']['grade']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departement', true), array('action' => 'edit', $departement['Departement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Departement', true), array('action' => 'delete', $departement['Departement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $departement['Departement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departements', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents', true), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document', true), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Commentaires');?></h3>
	<?php if (!empty($departement['Commentaire'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contenu'); ?></th>
		<th><?php __('Employe Id'); ?></th>
		<th><?php __('Departement Id'); ?></th>
		<th><?php __('Utilisateur Id'); ?></th>
		<th><?php __('Groupe Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departement['Commentaire'] as $commentaire):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $commentaire['id'];?></td>
			<td><?php echo $commentaire['contenu'];?></td>
			<td><?php echo $commentaire['employe_id'];?></td>
			<td><?php echo $commentaire['departement_id'];?></td>
			<td><?php echo $commentaire['utilisateur_id'];?></td>
			<td><?php echo $commentaire['groupe_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'commentaires', 'action' => 'view', $commentaire['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'commentaires', 'action' => 'edit', $commentaire['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'commentaires', 'action' => 'delete', $commentaire['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentaire['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Documents');?></h3>
	<?php if (!empty($departement['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nom'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Nom Fichier'); ?></th>
		<th><?php __('Employe Id'); ?></th>
		<th><?php __('Departement Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departement['Document'] as $document):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['nom'];?></td>
			<td><?php echo $document['description'];?></td>
			<td><?php echo $document['nom_fichier'];?></td>
			<td><?php echo $document['employe_id'];?></td>
			<td><?php echo $document['departement_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'documents', 'action' => 'delete', $document['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document', true), array('controller' => 'documents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Employes');?></h3>
	<?php if (!empty($departement['Employe'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titre'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Nom'); ?></th>
		<th><?php __('Prenom'); ?></th>
		<th><?php __('Genre'); ?></th>
		<th><?php __('Categorie'); ?></th>
		<th><?php __('Date Embauche'); ?></th>
		<th><?php __('Date Naissance'); ?></th>
		<th><?php __('Lieu Naissance'); ?></th>
		<th><?php __('Numero Assurance'); ?></th>
		<th><?php __('Nbre Enfant'); ?></th>
		<th><?php __('Adresse'); ?></th>
		<th><?php __('Telephone1'); ?></th>
		<th><?php __('Telephone2'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Photo'); ?></th>
		<th><?php __('Departement Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departement['Employe'] as $employe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employe['id'];?></td>
			<td><?php echo $employe['titre'];?></td>
			<td><?php echo $employe['code'];?></td>
			<td><?php echo $employe['nom'];?></td>
			<td><?php echo $employe['prenom'];?></td>
			<td><?php echo $employe['genre'];?></td>
			<td><?php echo $employe['categorie'];?></td>
			<td><?php echo $employe['date_embauche'];?></td>
			<td><?php echo $employe['date_naissance'];?></td>
			<td><?php echo $employe['lieu_naissance'];?></td>
			<td><?php echo $employe['numero_assurance'];?></td>
			<td><?php echo $employe['nbre_enfant'];?></td>
			<td><?php echo $employe['adresse'];?></td>
			<td><?php echo $employe['telephone1'];?></td>
			<td><?php echo $employe['telephone2'];?></td>
			<td><?php echo $employe['email'];?></td>
			<td><?php echo $employe['photo'];?></td>
			<td><?php echo $employe['departement_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employes', 'action' => 'view', $employe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employes', 'action' => 'edit', $employe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employes', 'action' => 'delete', $employe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Utilisateurs');?></h3>
	<?php if (!empty($departement['Utilisateur'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pseudo'); ?></th>
		<th><?php __('Mot Passe'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Groupe Id'); ?></th>
		<th><?php __('Employe Id'); ?></th>
		<th><?php __('Departement Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departement['Utilisateur'] as $utilisateur):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $utilisateur['id'];?></td>
			<td><?php echo $utilisateur['pseudo'];?></td>
			<td><?php echo $utilisateur['mot_passe'];?></td>
			<td><?php echo $utilisateur['created'];?></td>
			<td><?php echo $utilisateur['modified'];?></td>
			<td><?php echo $utilisateur['groupe_id'];?></td>
			<td><?php echo $utilisateur['employe_id'];?></td>
			<td><?php echo $utilisateur['departement_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'utilisateurs', 'action' => 'view', $utilisateur['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'utilisateurs', 'action' => 'edit', $utilisateur['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'utilisateurs', 'action' => 'delete', $utilisateur['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $utilisateur['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
