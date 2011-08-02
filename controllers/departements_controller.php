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
			$this->Session->setFlash(__("Cet département n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departement', $this->Departement->read(null, $id),$this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Departement->create();
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash(__("Le departement a été enregistré", true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("Le département n'a pas pu être enregistré. Certaines données sont erronées.", true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__("cet département n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departement->save($this->data)) {
				$this->Session->setFlash(__('Le departement a été modifié', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("Le département n'a pas pu être enregistré. Certaines données sont erronées.", true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departement->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identifiant invalide', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Departement->delete($id)) {
			$this->Session->setFlash(__('Département supprimé', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__("Le département ne peut être supprimé car il contient encore des employés", true));
		$this->redirect(array('action' => 'index'));
	}
}
