<?php
class DepartementsController extends AppController {

	var $name = 'Departements';
	 var $paginate = array(
	'limit' => 1,
	'order' => array(
	'Departement.nom' => 'asc'
	));
	function index() {
		$this->Departement->recursive = 0;
		$this->set('departements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash("Cet département n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$this->set('departement', $this->Departement->read(null, $id),$this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Departement->create();
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash("Le departement a été enregistré", 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Le département n'a pas pu être enregistré. Certaines données sont erronées.", 'message_error');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash("cet département n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if (!empty($this->data)) {
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash('Le departement a été modifié', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Le département n'a pas pu être enregistré. Certaines données sont erronées.", 'message_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departement->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Identifiant invalide', 'message_error');
			$this->redirect(array('action'=>'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if ($this->Departement->delete($id)) {
			$this->Session->setFlash('Département supprimé', 'message_ok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash("Le département ne peut être supprimé car il contient encore des employés", 'message_error');
		$this->redirect(array('action' => 'index'));
	}
}
