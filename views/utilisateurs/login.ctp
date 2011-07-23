<div>
    <?php echo $session->flash('auth');?>
</div>

<?php echo $form->create('Utilisateur',array('url' => '/utilisateurs/login')); 
$this->pageTitle = "Identification requise";
 
// Formulaire de connexion
e($form->create('Utilisateur', array('action' => 'login')));
e($form->input('login', array('label' => 'Identifiant :')));
e($form->input('password', array('label' => 'Mot de passe :')));
e($form->end("Connexion"));
?>