<div class="utilisateurs index">
	<h2><?php __('Utilisateurs');?></h2><br/>
	<table id="tableau">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Pseudonyme','username');?></th>
			<th><?php echo $this->Paginator->sort('Date de crétion','created');?></th>
			<th><?php echo $this->Paginator->sort('Dernière visite','lastvisitDate');?></th>
			<th><?php echo $this->Paginator->sort('Date de modification','modified');?></th>
			<th><?php echo $this->Paginator->sort('Groupe','groupe_id');?></th>
			<th><?php echo $this->Paginator->sort('Employé','employe_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($utilisateurs as $utilisateur):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $utilisateur['Utilisateur']['username']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['created']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['lastvisitDate']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Groupe']['nom'], array('controller' => 'groupes', 'action' => 'view', $utilisateur['Groupe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Employe']['nom']." ".$utilisateur['Employe']['prenom'], array('controller' => 'employes', 'action' => 'view', $utilisateur['Employe']['id'])); ?>
		</td>
		<td class="actions">

				<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $utilisateur['Utilisateur']['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'edit', $utilisateur['Utilisateur']['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $utilisateur['Utilisateur']['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet utilisateur",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;"),
		sprintf(__('Voulez vous vraiment supprimer :  %s?', true), $utilisateur['Utilisateur']['username'])
		
				);
		?>&nbsp;
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
	?>	
	</p>

	<div class="pagination">
		<?php echo $this->Paginator->prev('<< ' . __('', true), array(), null, array('class'=>'prev disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('', true) . ' >>', array(), null, array('class' => 'next disabled'));?>
	</div>
</div>
