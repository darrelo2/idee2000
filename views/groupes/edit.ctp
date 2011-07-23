<div class="groupes form">
<?php echo $this->Form->create('Groupe');?>
	<fieldset>
		<legend><?php __('Admin Edit Groupe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Groupe.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Groupe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groupes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>