 <h2>Ajouter un utilisateur</h2>


 <div style="margin:20px auto; width:550px;">
 



<?php
echo $form->create('Utilisateur',
array(
	'action' => 'add/'.$employe['Employe']['id'],
	'class' => 'form has-validation',

));
?>
	<div class="clearfix ">


	<?php echo $form->label('username','Identifiant :', array("class"=>"form-label requit")); ?>



	<?php echo $form->input('username',
	array(
		'label'  => false,
		'class' => 'full',
		//'required' => 'required',
		'placeholder' => 'Identifiant',
		'div'=>'input long',
	));
	?>
	</div>
	<div class="clearfix ">


	<?php echo $form->label('passwd','Mot de passe :', array("class"=>"form-label requit")); ?>

	<?php echo $form->input('passwd',
	array(
		'label'  => false,
		'type' => 'password',
		'required' => 'required',
		'value' => 'password',
		'div'=>'input long',
	));
	?>
	</div>
	<div class="clearfix ">


	<?php echo $form->label('password_confirm','Confirmation :', array("class"=>"form-label requit")); ?>



	<?php echo $form->input('password_confirm',
	array(
		'label'  => false,
		'type' => 'password',
		'required' => 'required',
		'value' => 'password',
		'div'=>'input long',
	));
	?>
	</div>
	<div class="clearfix ">


	<?php echo $form->label('Utilisateur.groupe_id','Groupe :', array("class"=>"form-label requit")); ?>



	<?php echo $form->input('Utilisateur.groupe_id',
	array(
		'label'  => false,
		//'required' => 'required',
		'div'=>'input long',
		'empty' => 'Selectionnez un groupe'
	));
	?>
	</div>
	<div class="clearfix ">

	<?php 
	echo $this->Form->input('lastvisitDate',
		array(
			'type'=>'hidden'
				
		     ));
	?>
		<?php
	
		echo $this->Form->input('Utilisateur.employe_id',
					array(
		'div'=>'input long',
		'type'=>'hidden',
		'value'=>$employe['Employe']['id'],
		));
	?>
	</div>
	<div class="form-action clearfix">

		<button data-icon-primary="ui-icon-circle-check" type="submit"
			class="button">OK</button>

		<button type="reset" class="button">Effacer</button>

	</div>
	<?php echo $form->end();
	
	
	?>
	
	
</div>






