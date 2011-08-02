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
			$this->Session->setFlash(__('Invalid commentaire', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('commentaire', $this->Commentaire->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Commentaire->create();
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash(__('The commentaire has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentaire could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Invalid commentaire', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Commentaire->save($this->data)) {
				$this->Session->setFlash(__('The commentaire has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The commentaire could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Invalid id for commentaire', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Commentaire->delete($id)) {
			$this->Session->setFlash(__('Commentaire deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Commentaire was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
