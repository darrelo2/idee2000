<div class="">
    <?php echo $session->flash('auth');?>
</div>

<?php 
// Formulaire de connexion

echo $form->create('Utilisateur',
	array(
	'action' => 'login',
	'id' => 'form',
	'class' => 'has-validation',
	'style' => 'margin-top: 30px',
	
	)); 
?>
	<p style="margin-bottom: 30px">
		<?php echo $form->input('username', 
		array(
		'label' => 'Identifiant :',
		'required' => 'required',
		'placeholder' => 'Identifiant',
		)); 
		?>
	</p>
	<p style="margin-bottom: 30px">
 	<?php echo $form->input('password', 
 	array(
 	'label' => 'Mot de passe :',
 	'required' => 'required',
 	'placeholder' => 'password',
 	)); ?>
	</p>

 <p class="clearfix">
    <span class="fl" style="line-height: 23px;">                         
          <?php echo $form->input('remember', 
          array(
          'type' => 'checkbox',
          'label' => 'Se souvenir de moi :',
          'id' => 'remember',
          )); ?>
                               
 	</span>
 	<button class="fr" type="submit">Connexion</button>
	<?php echo $form->end(); ?>
  </p>