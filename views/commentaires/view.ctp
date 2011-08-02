<div class="commentaires view">
	<h2><?php  __('Commentaire');?></h2>

<div class="actions">
<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	
		<ul id="nav">
		<li><?php echo $this->Html->link(__('Modifier', true), array('action' => 'edit', $commentaire['Commentaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $commentaire['Commentaire']['id']), null, 'Voulez vous vraiment supprimer ce commentaire ?'); ?> </li>
		<li><?php echo $this->Html->link(__('Liste', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau', true), array('action' => 'add')); ?> </li>
	</ul>
    </div></div></div><br/>
	<div class="bloc">
    <div class="title">
        <h2><?php  __('Commentaire');?></h2>
    </div>
	<div class="content">
	
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contenu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $commentaire['Commentaire']['contenu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentaire['Employe']['nom']." ".$commentaire['Employe']['prenom'], array('controller' => 'employes', 'action' => 'view', $commentaire['Employe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Utilisateur'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($commentaire['Utilisateur']['username'], array('controller' => 'utilisateurs', 'action' => 'view', $commentaire['Utilisateur']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div></div></div>

