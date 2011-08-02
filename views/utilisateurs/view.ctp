<div class="utilisateurs view">
<h2><?php  __('Utilisateur : '.$utilisateur['Utilisateur']['username']);?></h2>

<div class="actions">
	<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	
		<ul id="nav">
		<li><?php echo $this->Html->link(__('Modifier', true), array('action' => 'edit', $utilisateur['Utilisateur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $utilisateur['Utilisateur']['id']), null, sprintf(__("Voulez vous vraiment supprimer l'utilisateur : %s ?", true), $utilisateur['Utilisateur']['username'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel utilisateur', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Employés', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel Employé', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
	</ul>
    </div></div></div><br/>
<div class="bloc">
 <div class="title">
        <h3><?php __('Détails'); ?></h3>
    </div>
	<div class="content">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pseudonyme'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date de création'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dernière visite'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['lastvisitDate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date de modification'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $utilisateur['Utilisateur']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Groupe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($utilisateur['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $utilisateur['Groupe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($utilisateur['Employe']['nom']." ".$utilisateur['Employe']['prenom'], array('controller' => 'employes', 'action' => 'view', $utilisateur['Employe']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div></div></div>

<div class="related">
<div class="bloc">
 <div class="title">
       <h3><?php __('Commentaires rédigés');?></h3>
    </div>
	<div class="content">
	
	<?php if (!empty($utilisateur['Commentaire'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<thead>
	<tr>
		<th><?php __('Contenu'); ?></th>
		<th><?php __('Employé'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<?php
		$i = 0;
		foreach ($utilisateur['Commentaire'] as $commentaire):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php 
			$p_maxWord = 10;
			$p_chaine = $commentaire['contenu'];
			$array = explode(' ',$p_chaine);
			if(count($array)<=$p_maxWord){
			    echo $p_chaine;
			}
			else{
			$chaine = "";
			for($i=0; $i<$p_maxWord;$i++){
			    $chaine .= $array[$i]." ";
			}
			echo $chaine."...";
			}
			
			
			?></td>
			<td><?php
			for($i=0;$i<count($employes);$i++){
			if($employes[$i]["Employe"]["id"]==$commentaire['employe_id']){
				echo $employes[$i]["Employe"]["nom"]."&nbsp".$employes[$i]["Employe"]["prenom"];
				break;
			}
			}
			
			?></td>
			<td class="actions">
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'view', $commentaire['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'edit', $commentaire['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'delete', $commentaire['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet utilisateur",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;"),
		'Voulez vous vraiment supprimer ce commentaire'
		
				);
		?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table></div></div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Commentaire', true), array('controller' => 'commentaires', 'action' => 'add'),array("class"=>"button"));?> </li>
		</ul>
	</div>
</div>