﻿ <h2>Ajouter un employé</h2>
<hr/>
 <div style="margin:20px auto; width:550px;">
<div class="employes form">
<?php echo $this->Form->create('Employe',array(
		'action' => 'add',
	'class' => 'form has-validation'));?>

		<fieldset>
		<legend>Informations personnelles</legend>
		<?php 
		 echo $this->Form->input('nom',
		 array(
		 'div'=>'input long',
		 
		 
		 ));
		
		?>
		<?php 
		echo $this->Form->input('prenom',
				 array(
		 'div'=>'input long',
		 
		 
		 ));?>
		<?php echo $this->Form->input('genre',array('div'=>'input long'));?>
		<?php echo $this->Form->input('titre',array('div'=>'input long'));?>
		<?php echo $this->Form->input('date_naissance',
		array(
		'div'=>'input long',
		'type'=>'text',
		'class'=>'datepicker',
		
		));?>
		<?php echo $this->Form->input('lieu_naissance',array('div'=>'input long'));?>
		<?php echo $this->Form->input('nbre_enfant',array('div'=>'input long'));?>
		<?php echo $this->Form->input('numero_assurance',array('div'=>'input long',));?>
		<?php echo $this->Form->input('adresse',array('div'=>'input long'));?>
		<?php echo $this->Form->input('telephone1',array('div'=>'input long'));?>
		<?php echo $this->Form->input('telephone2',array('div'=>'input long'));?>
		<?php echo $this->Form->input('email',array('div'=>'input long'));?>
		<?php echo $this->Form->input('photo',
		array(
		'div'=>'input',
		'type'=>'file',
		
		
		));?>
		</fieldset>
		<fieldset>
		<legend>Informations professionnelles</legend>
		<?php echo $this->Form->input('code',array('div'=>'input long'));?>
		<?php echo $this->Form->input('categorie',array('div'=>'input long'));?>
		<?php echo $this->Form->input('date_embauche',
		array(
		'div'=>'input long',
		'type'=>'text',
		'class'=>'datepicker',
		
		));?>
		<?php echo $this->Form->input('departement',array('div'=>'input long'));?>
		</fieldset>
		
	
		
		
		
		
		
		
		
		
		
	<div class="form-action clearfix">

		<button data-icon-primary="ui-icon-circle-check" type="submit"
			class="button">Enregistrer</button>

		<button type="reset" class="button">Effacer</button>

	</div>		

<?php echo $this->Form->end();?>
</div>
</div>
