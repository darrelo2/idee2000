<div class="groupes view">
<h2><?php  __('Groupe : '.$groupe['Groupe']['nom']);?></h2>

<div class="actions">
	<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	
	
	<ul id="nav">		
		<li><?php echo $this->Html->link(__('Modifier', true), array('action' => 'edit', $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $groupe['Groupe']['id']), null, sprintf(__('Voulez vous vraiment supprimer le groupe :  %s ?', true), $groupe['Groupe']['nom'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
    </div></div></div><br/>
<div class="bloc">
	 <div class="title">
        <h3><?php __("Groupe"); ?></h3>
     </div><div class="content">
	
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date de création'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date de modification'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div></div></div><br/>
<div class="related">
	<div class="bloc">
	 <div class="title">
      <h3><?php __('Utilisateurs associés');?></h3>
     </div><div class="content">
	
	<?php if (!empty($groupe['Utilisateur'])):?>
	<table id = "tableau" >
		<thead>
	<tr>
		<th><?php __('Pseudonyme'); ?></th>
		<th><?php __('Date de création'); ?></th>
		<th><?php __('Dernière visite'); ?></th>
		<th><?php __('Date de modification'); ?></th>
		<th><?php __('Employé'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
		</thead>
	<?php
		$i = 0;
		foreach ($groupe['Utilisateur'] as $utilisateur):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $utilisateur['username'];?></td>
			<td><?php echo $utilisateur['created'];?></td>
			<td><?php echo $utilisateur['lastvisitDate'];?></td>
			<td><?php echo $utilisateur['modified'];?></td>
			<td><?php			
			for($i=0;$i<count($employes);$i++){
			if($employes[$i]["Employe"]["id"]==$utilisateur['employe_id']){
				echo $employes[$i]["Employe"]["nom"]."&nbsp".$employes[$i]["Employe"]["prenom"];
				break;
			}
			}
			?></td>
			<td class="actions">
				<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs','action' => 'view', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs','action' => 'edit', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs','action' => 'delete', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet employé",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;"),
		sprintf(__('Voulez vous vraiment supprimer :  %s?', true), $utilisateur['username'])
		
				);
		?>&nbsp;
			</td>
		</tr>
	<?php endforeach; ?>
	</table></div></div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouvel utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add'),array("class"=>"button"));?> </li>
		</ul>
	</div>
</div>
