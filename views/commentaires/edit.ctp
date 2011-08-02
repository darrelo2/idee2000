<h2>Modifier un commentaire</h2>
 <div style="margin:20px auto; width:550px;">
<?php echo $this->Form->create('Commentaire');?>

	<?php
		echo $this->Form->input('contenu');
		echo $this->Form->input('employe_id');
		echo $this->Form->input('id');
	?>
	
	<div style="margin-top:10px;">

	    <?php
		echo $this->Form->input('utilisateur_id',
		array(
		'type' => 'hidden',
		'value'=>$this->Session->read('Auth.Utilisateur.id')
		));
	
	    
	    
	    
    echo $form->button('Réinitialiser le formulaire', array('type'=>'reset',"class"=>"button"));
    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'commentaires', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>
	</div>
	
<?php echo $this->Form->end();?>
</div>
