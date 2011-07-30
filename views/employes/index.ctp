<div class="employes index">
	<h2><?php __('Tous les Employés');?></h2>
	<hr/>
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
			<th><?php echo $this->Paginator->sort("Département",'departement_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($employes as $employe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php
		echo $this->Html->link(
		$this->Html->image('employes/photo/'.$employe['Employe']['photo'], array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
		?>&nbsp;	
		</td>	
		<td><?php echo $employe['Employe']['nom']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['prenom']; ?>&nbsp;</td>		
		<td>
		<?php
			$genre= $employe['Employe']['genre'];
			if($genre == "M")
			{
				echo "Homme";
			}else{ echo "Femme";}
			?>
			&nbsp;		
		</td>
		<td>
		<?php
			$cat = $employe['Employe']['categorie'];       
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
		<td><?php echo $employe['Employe']['grade']; ?>&nbsp;</td>	
		<td>
		<?php
		echo date('d-m-Y', strtotime ( $employe['Employe']['date_naissance']));
		?>
		&nbsp;</td>
		<td>
		<?php
		echo date('d-m-Y', strtotime ( $employe['Employe']['date_embauche']));
		?>
		&nbsp;</td>
		<td><?php echo $employe['Employe']['matricule']; ?>&nbsp;</td>
		<td>
		<?php echo $this->Html->link($employe['Departement']['nom'], array('controller' => 'departements', 'action' => 'view', $employe['Departement']['id'])); ?>
		</td>
		<td class="actions">
			<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'edit', $employe['Employe']['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $employe['Employe']['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet employé",true)),
		sprintf(__('Voulez vous vraiment supprimer :  %s?', true), $employe['Employe']['nom']." ".$employe['Employe']['prenom'])
		
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
