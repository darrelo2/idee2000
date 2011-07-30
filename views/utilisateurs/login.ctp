
    <?php echo $session->flash('auth');?>

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
	
		<?php echo $form->input('username', 
		array(
		'label' => 'Identifiant :',
		'required' => 'required',
		'div' => 'input placeholder',
		'value'=>''
		)); 
		?>

	
 	<?php echo $form->input('password', 
 	array(
 	'label' => 'Mot de passe :',
 	'required' => 'required',
	'div' => 'input placeholder',
	'value'=>''
 	)); ?>

                       
          <?php echo $form->input('remember', 
          array(
          'type' => 'checkbox',
          'label' => 'Se souvenir de moi',
          'id' => 'remember',
          'div' => 'checkbox',
          ));
	  echo $this->Form->input('lastvisitDate',
		array(
				'type'=>'hidden'
				
		     ));
	  
	  ?>
   
 	  <div class="submit">
                    <input type="submit" value="Connexion"/>
                </div>
	<?php echo $form->end(); ?>
