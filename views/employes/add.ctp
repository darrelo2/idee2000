﻿ <h2>Ajouter un employé</h2>

 <div style="margin:20px auto; width:550px;">
<div class="employes form">
<?php echo $this->Form->create('Employe',array(
	'class' => 'form has-validation',
	"type" => "file"
	));?>

		<fieldset>
		<legend>Informations personnelles</legend>

		<?php echo $this->Form->input('genre',
		array(
		      "options"=>array(
				"Homme"=>"Homme",
				"Femme"=>"Femme"
		)));?>		

 
 	<?php 
		 echo $this->Form->input('nom',
		 array(
		 'div'=>'input long',
		 'label'=>"Nom",
		 
		 
		 ));
		
		?>
		<?php 
		echo $this->Form->input('prenom',
				 array(
		 'div'=>'input long',
		 'label'=>'Prénom',
		
		 
		 ));?>
		
		<?php echo $this->Form->input('date_naissance',
		array(
		'div'=>'input long',
		'type'=>'text',
		'label'=>'Date de naissance',
		'class'=>'datepicker',
		
		));?>
		<?php echo $this->Form->input('lieu_naissance',
		array(
		'div'=>'input long',
		'label'=>'Lieu de naissance'
		
		));?>
		<?php echo $this->Form->input('nbre_enfant',
		array(
		'div'=>'input long',
		'label'=>"Nombre d'enfant",
		));?>
		<?php echo $this->Form->input('numero_assurance',
		array(
		'div'=>'input long',
		'label'=>"Numéro d'assurance",
		));?>
		<?php echo $this->Form->input('adresse',
		array(
		'div'=>'input long',
		'label'=>'Adresse',
		));?>
		<?php echo $this->Form->input('telephone1',
		array(
		'div'=>'input long',
		'label'=>'Numéro de télephone',
		));?>
		<?php echo $this->Form->input('telephone2',
		array(
		'div'=>'input long',
		'label'=>'Portable',
		));?>
		<?php echo $this->Form->input('email',
		array(
		'div'=>'input long',
		'label'=>'Adresse email',
		));?>
		<?php echo $this->Form->input('photo',
		array(
		'div'=>'input',
		'type'=>'file',
		'label'=>'Photo',
		
		
		));?>
		</fieldset>
		<fieldset>
		<legend>Informations professionnelles</legend>
		<?php echo $this->Form->input('matricule',
		array(
		'div'=>'input long',
		'label'=>'Numéro de matricule',
		
		));?>
		<?php echo $this->Form->input('grade',
		array(
		'div'=>'input long',
		'label'=>'Grade',
		
		));?>
		<?php echo $this->Form->input('categorie',
		array("options"=>array(
				"AE"=>"Agent d'exécution",
				"TS"=>"Techniciens supérieurs",
				"AM"=>"Agent de maitrise",
				"C"=>"Cadre",
				"CD"=>"Cadre dirigeant",
		)),
		array(
		'div'=>'input long',
		'label'=>'Classement')
		
		);?>
		<?php echo $this->Form->input('date_embauche',
		array(
		'div'=>'input long',
		'type'=>'text',
		'class'=>'datepicker',
		'label'=>"Date d'embauche",
		
		));?>
		<?php echo $this->Form->input('departement_id',
		array(
		'div'=>'input long',
		'label'=>'Département',
		));?>
		</fieldset>
		
		
		
		
		
		
		
		
		
		
	<div style="margin-top:10px;">

	    <?php
		/*echo $this->Form->input('mimetype', array('type' => 'hidden'));
		echo $this->Form->input('filesize', array('type' => 'hidden'));*/
		echo $this->Form->input('dir', array('type' => 'hidden'));
	    
	    
	    
    echo $form->button('Réinitialiser le formulaire', array('type'=>'reset',"class"=>"button"));
    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'employes', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>
	</div>		

<?php echo $this->Form->end();?>
</div>
</div>
