
	<h1><?php __('Veuillez choisir un employé');
		//echo APP;
		
	?></h1>
	<div class="actions">
	<div class="bloc">
    <div class="title">
        <h5><?php __('Recherche avancée'); ?></h5>
    </div>
	<div class="content">
	<?php
	echo $form->create(
  'Document',
  array(
    'action' => 'search',
    'type' => 'GET'
  )
);
// Champ texte pour les mots clés
echo $form->input(
  'nom',
  array(
    'label' => 'Entrez un nom',
    'value' => isset($this->params['named']['nom']) ? $this->params['named']['nom'] : null
  )
);
// Champ select avec la liste des départements
echo $form->input(
  'departement',
  array(
    'label' => 'Selectionnez un département',
    'type' => 'select',
    'options' => $departements,
    'selected' => isset($this->params['named']['departement_id']) ? $this->params['named']['departement_id'] : null,
    'empty' => 'Selectionnez un département'
  )
);
echo $form->end('Lancer la recherche');
	//debug($departements);
	?>
	
    </div></div></div><br/>
	<table  id="tableau">
	<thead>	
	<tr> 
			
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('Nom','nom');?></th>
			<th><?php echo $this->Paginator->sort('Prénom','prenom');?></th>
			<th><?php echo $this->Paginator->sort('Genre','genre');?></th>
			<th><?php echo $this->Paginator->sort('Categorie','categorie');?></th>
			
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
		array('action' => 'uploader', $employe['Employe']['id']),
		array('escape' => false)
				);
		?>&nbsp;	
		</td>	
		<td><?php echo $employe['Employe']['nom']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['prenom']; ?>&nbsp;</td>		
		<td>
		<?php
			echo $employe['Employe']['genre'];
		
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
		$this->Html->image('themeAdmin/icons/select.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'uploader', $employe['Employe']['id']),
		array('escape' => false,"title"=>sprintf("Choisir cet employé",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:10px;")
				);
		?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => 'Page %page% de %pages%, montrant %current% enregistrements sur un total de %count%, en commençant à %start% et se terminant à %end%'
	));
	$this->Paginator->options(array('url' => isset($this->params['named']) ? $this->params['named'] : array() ));
	?>	
	</p>

	<div class="pagination">
		<?php echo $this->Paginator->prev('<< ' . __('', true), array(), null, array('class'=>'prev disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('', true) . ' >>', array(), null, array('class' => 'next disabled'));?>
	</div>

