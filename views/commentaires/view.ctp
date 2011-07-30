<div class="commentaires view">
<h2><?php  __('Commentaire');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentaire['Commentaire']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contenu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentaire['Commentaire']['contenu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentaire['Employe']['id'], array('controller' => 'employes', 'action' => 'view', $commentaire['Employe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Utilisateur'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentaire['Utilisateur']['id'], array('controller' => 'utilisateurs', 'action' => 'view', $commentaire['Utilisateur']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commentaire', true), array('action' => 'edit', $commentaire['Commentaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Commentaire', true), array('action' => 'delete', $commentaire['Commentaire']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $commentaire['Commentaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
