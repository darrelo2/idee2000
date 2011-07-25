<div class="utilisateurs view">
<h2><?php  __('Utilisateur');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('LastvisitDate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['lastvisitDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Groupe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($utilisateur['Groupe']['id'], array('controller' => 'groupes', 'action' => 'view', $utilisateur['Groupe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($utilisateur['Employe']['id'], array('controller' => 'employes', 'action' => 'view', $utilisateur['Employe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Utilisateur', true), array('action' => 'edit', $utilisateur['Utilisateur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Utilisateur', true), array('action' => 'delete', $utilisateur['Utilisateur']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $utilisateur['Utilisateur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Commentaires');?></h3>
	<?php if (!empty($utilisateur['Commentaire'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contenu'); ?></th>
		<th><?php __('Employe Id'); ?></th>
		<th><?php __('Utilisateur Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($utilisateur['Commentaire'] as $commentaire):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $commentaire['id'];?></td>
			<td><?php echo $commentaire['contenu'];?></td>
			<td><?php echo $commentaire['employe_id'];?></td>
			<td><?php echo $commentaire['utilisateur_id'];?></td>
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
