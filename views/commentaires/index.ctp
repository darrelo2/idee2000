<div class="commentaires index">
	<div class="actions">
			<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	<ul id="nav">
		<li><?php echo $this->Html->link(__('Nouveau Commentaire', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Liste Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel Employé', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Liste Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
	 </div></div></div><br/>
</div>
			<div class="bloc">
    <div class="title">
        <h2><?php __('Tous les Commentaires');?></h2>
    </div>
	<div class="content">
	
	<table id="tableau">
		<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Contenu','contenu');?></th>
			<th><?php echo $this->Paginator->sort('Employé','employe_id');?></th>
			<th><?php echo $this->Paginator->sort('Utilisateur','utilisateur_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
		</thead>
	<?php
	$i = 0;
	foreach ($commentaires as $commentaire):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $commentaire['Commentaire']['contenu']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentaire['Employe']['nom']." ".$commentaire['Employe']['nom'], array('controller' => 'employes', 'action' => 'view', $commentaire['Employe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($commentaire['Utilisateur']['username'], array('controller' => 'utilisateurs', 'action' => 'view', $commentaire['Utilisateur']['id'])); ?>
		</td>
		<td class="actions">
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'view', $commentaire['Commentaire']['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?><?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'edit', $commentaire['Commentaire']['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;")
				);
		?><?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires','action' => 'delete', $commentaire['Commentaire']['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet utilisateur",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:20px;"),
		'Voulez vous vraiment supprimer ce commentaire'
		
				);
		?>
		</td>
	</tr>
<?php endforeach; ?>
	</table></div>
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
