<?php
class EmployesController extends AppController {

	var $name = 'Employes';
	 var $paginate = array(
	'limit' => 3,
	'order' => array(
	'Employe.nom' => 'asc'
	));

	function index() {
		$this->Employe->recursive = 0;
		$this->set('employes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__("Cet employé n'existe pas ", true));
			$this->redirect(array('action' => 'index'));
		}
		$employes = $this->Employe->find('all',
			 array(
		 "fields"=>array("id","nom","prenom")
		 )
		);
		$this->set('employe', $this->Employe->read(null, $id));
		$this->set('employes', $employes);
	}

	function add() {
		$this->data["Employes"]["photo"]=$this->data["Employes"]["photo"]["name"];
		if (!empty($this->data)) {
			$this->Employe->create();
			if ($this->Employe->save($this->data)) {
				$this->Session->setFlash(__("L'employé a été enregistré", true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("L'employé n'a pas pu être enregistré. Certaines données sont erronées.", true));
			}
		}
		$departements = $this->Employe->Departement->find('list',
		 array(
		 "fields"=>array("id","nom"),
		 "Recursive"=>-1,
		 ));
		$this->set(compact('departements'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__("Cet employé n'existe pas", true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employe->save($this->data)) {
				$this->Session->setFlash(__("L'employé a été enregistré", true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("L'employé n'a pas pu être enregistré. Certaines données sont erronées.", true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employe->read(null, $id);
		}
		$departements = $this->Employe->Departement->find('list',
		 array(
		 "fields"=>array("id","nom"),
		 "Recursive"=>-1,
		 ));
		$this->set(compact('departements'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Identifiant invalide', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employe->delete($id)) {
			$this->Session->setFlash(__('Employé supprimé', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__("L'employe n'a pas été supprimé",
		true));
		$this->redirect(array('action' => 'index'));
	}
		 


}
