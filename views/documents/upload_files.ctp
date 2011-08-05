 <h2>Veuillez ajouter des informations</h2>
 
<div style="margin:20px auto; width:550px;">
<?php echo $this->Form->create('Document', array(
		 'action'=>"editing",

		 ));?>
	
	<?php
		for($i=0;$i<count($documents);$i++){
			$document = $documents[$i];
	?>
	<fieldset>
		<legend><?php echo $document['Document']["nom"]; ?></legend>
		
	<?php	echo $this->Form->input('Document.'.$i.'.id',array(
		 'value'=>$document['Document']['id'],
		 'type'=>'hidden',
		 ));
		echo $this->Form->input('Document.'.$i.'.nom', array(
		 'div'=>'input long',
		 'label'=>"Nom",
		 'value'=>$document['Document']["nom"],
		 
		 
		 ));
		echo $this->Form->input('Document.'.$i.'.description', array(
		 'div'=>'input long',
		 'label'=>"Description",
		 'value'=>"Veuillez décrire ce fichier",
		 
		 
		 ));
		echo $this->Form->input('Document.'.$i.'.nom_fichier', array(
		 'type'=>"hidden",
		 'value'=>$document['Document']["nom_fichier"],
		 
		 
		 ));
		echo $this->Form->input('Document.'.$i.'.employe_id', array(
		 'value'=>$document['Document']["employe_id"],
		 'type'=>"hidden",
		 
		 
		 ));
		/*echo $this->Form->input('count', array(
		 'value'=>count($documents),
		 'type'=>"hidden",
		 
		 
		 ));	*/
	?>
	</fieldset>
	<?php
		}

	?>
	
	
	
	<div style="margin-top:10px;">
	    <?php

    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'employes', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>
	</div>
<?php echo $this->Form->end();?>
</div>