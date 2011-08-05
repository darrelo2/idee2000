<?php
class CommentairesController extends AppController {

	var $name = 'Commentaires';
	var $helpers = array('Javascript');

	function index() {
		$this->Commentaire->recursive = 0;
		$this->set('commentaires', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce Commentaire n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$this->set('commentaire', $this->Commentaire->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commentaire->create();
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash('Commentaire enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Commentaire non enregistré.', 'message_error');
			}
		}
		$employes = $this->Commentaire->Employe->find('list',
		 array(
		 "fields"=>array("id","nom","prenom")
		 )
		 );
		$utilisateurs = $this->Commentaire->Utilisateur->find('list');
		$this->set(compact('employes', 'utilisateurs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash("Ce Commentaire n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if (!empty($this->data)) {
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash('Commentaire enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Commentaire non enregistré.', 'message_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Commentaire->read(null, $id);
		}
		$employes = $this->Commentaire->Employe->find('list',
		 array(
		 "fields"=>array("id","nom","prenom")
		 ));
		$utilisateurs = $this->Commentaire->Utilisateur->find('list');
		$this->set(compact('employes', 'utilisateurs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce Commentaire n'existe pas", 'message_error');
			$this->redirect(array('action'=>'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if ($this->Commentaire->delete($id)) {
			$this->Session->setFlash('Commentaire supprimé', 'message_ok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash("Commentaire n'a pas été supprimé", 'message_error');
		$this->redirect(array('action' => 'index'));
	}
}
