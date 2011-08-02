 <h2>Ajouter un Département</h2>
<hr/>
 <div style="margin:20px auto; width:550px;">
<div class="departements form">
<?php echo $this->Form->create('Departement');?>
	<?php
		echo $this->Form->input('nom',
					array(
		'div'=>'input long',
		'label'=>'Nom',
		
		));
		echo $this->Form->input('statut',
					array(
		'div'=>'input long',
		'label'=>'Statut',
		
		));
		echo $this->Form->input('grade',
					array(
		'div'=>'input long',
		'label'=>'Grade',
		
		));
	?>
	
	
	<div style="margin-top:10px;">

	    <?php
	    
    echo $form->button('Réinitialiser le formulaire', array('type'=>'reset',"class"=>"button"));
    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'departements', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>
	</div>	
	<?php echo $this->Form->end();?>
</div></div>
