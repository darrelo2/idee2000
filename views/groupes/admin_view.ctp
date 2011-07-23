<div class="groupes view">
<h2><?php  __('Groupe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groupe', true), array('action' => 'edit', $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Groupe', true), array('action' => 'delete', $groupe['Groupe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Commentaires');?></h3>
	<?php if (!empty($groupe['Commentaire'])):?>
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
		foreach ($groupe['Commentaire'] as $commentaire):
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
	<h3><?php __('Related Utilisateurs');?></h3>
	<?php if (!empty($groupe['Utilisateur'])):?>
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
		foreach ($groupe['Utilisateur'] as $utilisateur):
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
