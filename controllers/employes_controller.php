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
			$this->Session->setFlash("Cet employé n'existe pas ", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
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
				$this->Session->setFlash("L'employé a été enregistré", 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("L'employé n'a pas pu être enregistré. Certaines données sont erronées.", 'message_error');
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
			$this->Session->setFlash("Cet employé n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employe->save($this->data)) {
				$this->Session->setFlash("L'employé a été enregistré", 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("L'employé n'a pas pu être enregistré. Certaines données sont erronées.", 'message_error');
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
			$this->Session->setFlash('Identifiant invalide', 'message_error');
			$this->redirect($this->referer());
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		if ($this->Employe->delete($id)) {
			$this->Session->setFlash('Employé supprimé', 'message_ok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash("L'employe n'a pas été supprimé",
		'message_error');
		$this->redirect(array('action' => 'index'));
	}
	/*Permet de génerer un fichier PDF à partir des informations d'un client
	 *@param: id
	 */
	function pdf_employe($id = null) {
		if (!$id) {
			$this->Session->setFlash('Identifiant invalide', 'message_error');
			$this->redirect(array('action'=>'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$employes = $this->Employe->find('all',
			 array(
		 "fields"=>array("id","nom","prenom")
		 )
		);
		$this->set('employe', $this->Employe->read(null, $id));
		$this->set('employes', $employes);
		 App::import('Vendor', 'html2pdf', array('file' => 'pdf'.DS.'html2pdf.class.php'));
		$this->layout = "pdf_layout";
	}
	function telecharger ($filename) {
		$ext = substr(strtolower(strrchr(basename($filename),".")),1);
		$nom = substr($filename,0,strpos($filename,"."));
        $this->view = 'Media';
        $params = array(
              'id'        => $filename,
              'name'      => $nom,
              'download'  => true,
              'extension' => $ext,
              'path'      => APP.'webroot'.DS.'img'.DS.'employes'.DS.'pdf'.DS,
	      'mimeType' => array('pdf' => 'application/pdf')
       );
       
       $this->set($params);
    }
		 


}
