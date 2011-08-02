<div class="departements index">
	<h2><?php __('Les départements');?></h2>
	<hr/>
	<table id="tableau">
		<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('statut');?></th>
			<th><?php echo $this->Paginator->sort('grade');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<?php
	$i = 0;
	foreach ($departements as $departement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	
		<td><?php echo $departement['Departement']['nom']; ?>&nbsp;</td>
		<td><?php echo $departement['Departement']['statut']; ?>&nbsp;</td>
		<td><?php echo $departement['Departement']['grade']; ?>&nbsp;</td>
		<td class="actions">
				<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $departement['Departement']['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:40px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'edit', $departement['Departement']['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:40px;")
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $departement['Departement']['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet département",true),"style"=>"text-decoration:none; text-align:rigth;margin-left:40px;"),
		sprintf(__('Voulez vous vraiment supprimer le département :  %s?', true), $departement['Departement']['nom'])
		
				);
		?>&nbsp;
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="pagination">
		<?php echo $this->Paginator->prev('<< ' . __('', true), array(), null, array('class'=>'prev disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('', true) . ' >>', array(), null, array('class' => 'next disabled'));?>
	</div>
</div>
