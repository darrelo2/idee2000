<h2>Modifier un groupe</h2>
 <div style="margin:20px auto; width:550px;">
<?php echo $this->Form->create('Groupe');?>

	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('id');
	?>
	
		<div style="margin-top:10px;">

	    <?php 
    echo $form->button('Réinitialiser le formulaire', array('type'=>'reset',"class"=>"button"));
    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'groupes', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>
	</div>
<?php echo $this->Form->end();?>
</div>
