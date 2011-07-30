<div class="utilisateurs index">
	<h2><?php __('Utilisateurs');?></h2>
	<table id="tableau">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('lastvisitDate');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('groupe_id');?></th>
			<th><?php echo $this->Paginator->sort('employe_id');?></th>
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
		<td><?php echo $utilisateur['Utilisateur']['id']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['username']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['password']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['created']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['lastvisitDate']; ?>&nbsp;</td>
		<td><?php echo $utilisateur['Utilisateur']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Groupe']['id'], array('controller' => 'groupes', 'action' => 'view', $utilisateur['Groupe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($utilisateur['Employe']['id'], array('controller' => 'employes', 'action' => 'view', $utilisateur['Employe']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $utilisateur['Utilisateur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $utilisateur['Utilisateur']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $utilisateur['Utilisateur']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $utilisateur['Utilisateur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employes', true), array('controller' => 'employes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employe', true), array('controller' => 'employes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
	</ul>
</div>