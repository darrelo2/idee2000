 <header class="container_12 clearfix">
 <h2>Ajouter un utilisateur</h2>
 </header>
<section>

<?php
echo $form->create('Utilisateur',
array(
	'action' => 'add',
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
		'div'=>'form-input',
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
		'div'=>'form-input requiered',
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
		'div'=>'form-input requiered',
	));
	?>
	</div>
	<div class="clearfix ">


	<?php echo $form->label('Utilisateur.groupe_id','Groupe :', array("class"=>"form-label requit")); ?>



	<?php echo $form->input('Utilisateur.groupe_id',
	array(
		'label'  => false,
		//'required' => 'required',
		'div'=>'form-input requiered',
	));
	?>
	</div>
	<div class="clearfix ">


	<?php echo $form->label('Utilisateur.employe_id','Employé :', array("class"=>"form-label requit")); ?>



	<?php echo $form->input('Utilisateur.employe_id',
	array(
		'label'  => false,
		'div'=>'form-input requiered',
	));
	?>
	</div>
	<div class="form-action clearfix">

		<button data-icon-primary="ui-icon-circle-check" type="submit"
			class="button">OK</button>

		<button type="reset" class="button">Effacer</button>

	</div>
	<?php echo $form->end();?>
</section>





