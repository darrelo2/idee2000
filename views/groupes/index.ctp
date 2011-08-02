<div class="groupes index">
	<h2><?php __('Liste des groupes');?></h2>
	<table id="tableau" >
		<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Nom','nom');?></th>
			<th><?php echo $this->Paginator->sort('Date de création','created');?></th>
			<th><?php echo $this->Paginator->sort('Date de modification','modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
		</thead>
	<?php
	$i = 0;
	foreach ($groupes as $groupe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $groupe['Groupe']['nom']; ?>&nbsp;</td>
		<td><?php echo $groupe['Groupe']['created']; ?>&nbsp;</td>
		<td><?php echo $groupe['Groupe']['modified']; ?>&nbsp;</td>
		<td class="actions">
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $groupe['Groupe']['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'edit', $groupe['Groupe']['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $groupe['Groupe']['id']),
		array('escape' => false,"title"=>sprintf("Supprimer ce groupe",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;"),
		sprintf(__('Voulez vous vraiment supprimer le groupe :  %s?', true), $groupe['Groupe']['nom'])
		
				);
		?>&nbsp;
		
		</td>
	</tr>
<?php endforeach; ?>
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
