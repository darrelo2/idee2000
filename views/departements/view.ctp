<div class="departements view">
	<h2><?php  __('Département : '.$departement['Departement']['nom']);?></h2>
<hr/>
<div class="actions">
	<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	<hr/>
	<ul id="nav">
		<li><?php echo $this->Html->link(__('Modifier', true), array('action' => 'edit', $departement['Departement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer département', true), array('action' => 'delete', $departement['Departement']['id']), null, sprintf(__('Voulez vous vraiment supprimer le département %s?', true), $departement['Departement']['nom'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste des départements', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouveau département', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Employés', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel Employé', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
	</ul>
    </div></div></div><br/><hr/>
<div class="bloc">

	 <div class="title">
        <h3><?php __("Détails"); ?></h3>
     </div><div class="content">
	<hr/>
 <div class="centre" >
	<dl><?php $i = 0; $class = ' class="altrow"';?>
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
</div></div></div>

<div class="related">
<div class="bloc">
	 <div class="title">
        <h3><?php __("Employés de ce département"); ?></h3>
     </div><div class="content">
	<hr/>
	<?php if(!empty($departement["Employe"])): ?>
	<table  id="tableau">
	<thead>	
	<tr> 
			
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('Nom','nom');?></th>
			<th><?php echo $this->Paginator->sort('Prénom','prenom');?></th>
			<th><?php echo $this->Paginator->sort('Genre','genre');?></th>
			<th><?php echo $this->Paginator->sort('Categorie','categorie');?></th>
			<th><?php echo $this->Paginator->sort('Grade','grade');?></th>
			<th><?php echo $this->Paginator->sort('Date de naissance','date_naissance');?></th>
			<th><?php echo $this->Paginator->sort("Date d'embauche",'date_embauche');?></th>			
			<th><?php echo $this->Paginator->sort("Matricule",'matricule');?></th>
			
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($departement["Employe"] as $employe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php
		echo $this->Html->link(
		$this->Html->image('employes/photo/'.$employe['photo'], array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['id']),
		array('escape' => false)
				);
		?>&nbsp;	
		</td>	
		<td><?php echo $employe['nom']; ?>&nbsp;</td>
		<td><?php echo $employe['prenom']; ?>&nbsp;</td>		
		<td>
		<?php
			echo $employe['genre'];
		
			?>
			&nbsp;		
		</td>
		<td>
		<?php
			$cat = $employe['categorie'];       
			switch ($cat) {
			case "AE":
			    echo "Agent d'exécution";
			    break;
			case "TS":
			    echo "Techniciens supérieurs";
			    break;
			case "C":
			    echo "Cadre";
			    break;
			case "CD":
			    echo "Cadre dirigeant";
			    break;
			default:
				}
				
			?>
			&nbsp;
		</td>
		<td><?php echo $employe['grade']; ?>&nbsp;</td>	
		<td>
		<?php
		echo date('d-m-Y', strtotime ( $employe['date_naissance']));
		?>
		&nbsp;</td>
		<td>
		<?php
		echo date('d-m-Y', strtotime ( $employe['date_embauche']));
		?>
		&nbsp;</td>
		<td><?php echo $employe['matricule']; ?>&nbsp;</td>
		
		<td class="actions">
			<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'edit', $employe['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $employe['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet employé",true)),
		sprintf(__('Voulez vous vraiment supprimer :  %s?', true), $employe['nom']." ".$employe['prenom'])
		
				);
		?>&nbsp;
		
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => 'Page %page% de %pages%, montrant %current% enregistrements sur un total de %count%, en commençant à %start% et se terminant à %end%'
	)); 
	?>	
	</p>

	<div class="pagination">
		<?php echo $this->Paginator->prev('<< ' . __('', true), array(), null, array('class'=>'prev disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('', true) . ' >>', array(), null, array('class' => 'next disabled'));?>
	</div>
</div>
<?php endif;  ?>
</div></div>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouvel employé', true), array('controller' => 'employes', 'action' => 'add'),array("class"=>"button"));?> </li>
		</ul>
	</div>
</div>
