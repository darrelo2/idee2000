<?php
class DocumentsController extends AppController {

	var $name = 'Documents';
	var $uses = array('Document','Employe','Departement');
	var $paginate = array(
	'Document' => array (
	'limit' => 10,
	'order' => array(
	'Document.nom' => 'asc'		    
			    
	),
	'Employe' => array (
	'limit' => 10,
	'order' => array(
	'Employe.nom' => 'asc'
	
	))));

	function index() {
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate('Document'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce document n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			 $this->cakeError('error404', array(array('url' => $this->action)));
		}
		$this->set('document', $this->Document->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Document->create();
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash('Le document a été enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Les données n'ont pas été enregistré...", 'message_error');
			}
		}
		$employes = $this->Document->Employe->find('list');
		$this->set(compact('employes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash("Ce document n'existe pas", 'message_error');
			$this->redirect(array('action' => 'index'));
			 $this->cakeError('error404', array(array('url' => $this->action)));
		}
		if (!empty($this->data)) {
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash('Le document a été enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Les données n'ont pas été enregistré...", 'message_error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Document->read(null, $id);
		}
		$employes = $this->Document->Employe->find('list');
		$this->set(compact('employes'));
	}
	function editing() {
		if (empty($this->data)) {
			$this->Session->setFlash("Pas de données", 'message_error');
			$this->redirect($this->referer());
		}
		if (!empty($this->data)) {
					
			if ($this->Document->saveAll($this->data["Document"])) {
				$this->Session->setFlash('Le document a été enregistré', 'message_ok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash("Les données n'ont pas été enregistré...", 'message_error');
				$this->redirect($this->referer());

			}
			
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce document n'existe pas", 'message_error');
			$this->redirect($this->referer());
			 $this->cakeError('error404', array(array('url' => $this->action)));
		}
			App::import('Core', 'File');
			$employe=$this->Employe->Document->read(null,$id);
			$filename =$employe["Document"]["nom_fichier"];
			$name =$employe["Document"]["nom"];
			$dirName = $employe["Employe"]["matricule"]."_".$employe["Employe"]["nom"]."-".$employe["Employe"]["prenom"];
			$targetDir = APP.DS.'documents'.DS.$dirName.DS;
			$file = new File($targetDir.$filename);
		if($file->exists()){	
			if(!$file->delete())
			{
				$this->Session->setFlash("Impossible de supprimer le fichier '{$name}'.", 'message_error');
				$this->redirect($this->referer());
			}
			else
			{
				$this->Document->delete($id);
				$this->Session->setFlash("Fichier '{$name}' supprimé.", 'message_ok');
				$this->redirect($this->referer());
			}
					
		}else{
			$this->Session->setFlash("Impossible de supprimer le fichier '{$filename}'.", 'message_error');
			$this->redirect($this->referer());
		}

		
	}
	function telecharger($id = null) {
		if (!$id) {
			$this->Session->setFlash("Ce document n'existe pas", 'message_error');
			$this->redirect($this->referer());
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		$employe=$this->Employe->Document->read(null,$id);
		$filename =$employe["Document"]["nom_fichier"];
		$ext = substr(strtolower(strrchr(basename($filename),".")),1);
		$nom = substr($filename,0,strpos($filename,"."));
		
		$dirName = $employe["Employe"]["matricule"]."_".$employe["Employe"]["nom"]."-".$employe["Employe"]["prenom"];
		$targetDir = APP.DS.'documents'.DS.$dirName.DS;
		//$targetDir = APP.DS.'documents'.DS;
		//définition du mimeType des fichiers 
		switch($ext){
			case 'pdf':
				$mimeType = array('pdf' => 'application/pdf');
				break;
			case 'jpg':
				$mimeType = array('jpg' => 'image/jpg');
				break;
			case 'jpeg':
				$mimeType = array('jpeg' => 'image/pjpeg');
				break;
			case 'png':
				$mimeType =array('png' => 'image/png');
				break;
			case 'gif':
				$mimeType =array('gif' => 'image/gif');
				break;
			case 'bmp':
				$mimeType =array('bmp' => 'image/bmp');
				break;
			case 'zip':
				$mimeType =array('zip' => 'application/zip');
				break;
			case 'gz':
				$mimeType =array('gz' => 'application/x-gzip');
				break;
			case 'mp3':
				$mimeType =array('mp3' => 'audio/mpeg');
				break;
			case 'txt':
				$mimeType =array('txt' => 'text/plain');
				break;
			case 'doc':
				$mimeType =array('doc' => 'application/msword');
				break;
			case 'docx':
				$mimeType =array('docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
				break;
			case 'xlsx':
				$mimeType =array('docx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				break;
			case 'xls':
				$mimeType =array('xls' => 'application/vnd.ms-excel');
				break;
			case 'ppt':
				$mimeType =array('ppt' => 'application/vnd.ms-powerpoint');
				break;
			case 'pptx':
				$mimeType =array('pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation');
				break;
			case 'ppt':
				$mimeType =array('ppt' => 'application/vnd.ms-powerpoint');
				break;
		}
	
	    $this->view = 'Media';	 
	    $params = array(	 
		'id' => $filename,	 
		'name' => $nom,	 
		'extension' => $ext,	 	 
		'path' =>$targetDir,
		'download'  => true,
		'mimeType' => $mimeType
	    );	 
	    $this->set($params);	 
	}
	//Affiche la liste des employés pour la selection 
	function list_employe() {
		$departements=$this->Employe->Departement->find('list',
			array(
			  'fields'=>array('id','nom')
			)			       
		);
	$documents=$this->Employe->Document->find('all');	
	$this->set(compact('departements','documents'));
	// Nettoyage de la saisie
	App::import('Sanitize');
	 $Sanitizer =& new Sanitize();
	 $Sanitizer->clean(&$this->params['named']);
	 // Utilisons le deuxième argument de la méthode Paginate
	// pour fournir un tableau de conditions que nous construirons
	 // dans notre modèle à l’aide de la méthode createStatement
	 $employes = $this->Paginate('Employe', $this->Employe->createStatement($this->params['named']));
	
		$this->set(compact('employes'));
	}
	function autoComplete() {
	//Partial strings will come from the autocomplete field as
	//$this->data['Post']['subject'] 
	$this->set('employes', $this->Employe->find('all', array(
				'conditions' => array(
					'Employe.nom LIKE' => $this->data['Employe']['nom'].'%',
				),
				'fields' => array('nom')
		)));
		//$this->layout = 'ajax';
	}
	function search()
	{
	  // exclusion du 1er argument de $this->params['url'] (l'URL courante)
	  array_shift($this->params['url']);
	 
	  $passedArgs = array();
	 
	  // exclusion des données nulles
	  $criterias = array_filter(
	    $this->params['url'],
	    create_function(
	      '$item',
	      'return !empty($item);'
	    )
	  );
	 
	  // transformation des données au format du Paginator
	  foreach($criterias as $key => $value)
	  {
	    array_push($passedArgs, $key . ':' . urlencode($value));
	  }
	 
	  // redirect vers la Vue, en passant en argument les critères de recherche retenus.
	  $this->redirect('list_employe/'.join('/', $passedArgs));
	}
		//Renvoi le formulaire d'upload après selection d'un employé
	function uploader($id = null) {
		if (!$id) {
			$this->Session->setFlash("Cet employé n'existe pas ", 'message_error');
			$this->redirect(array('action' => 'index'));
			$this->cakeError('error404', array(array('url' => $this->action)));
		}

		$this->set('employe', $this->Employe->read(null,$id));
	}
	function upload_files() {
		/* Si on a la variable POST existe et que le nombre de fichier envoyer n'est pas vide
		 * On Parcour POST, on recupère le nom du fichier sur le serveur
		*/
		if ($_POST && $_POST['uploader_count'] != 0) {
			for ($i = 0; $i < $_POST["uploader_count"]; $i++) {
				
				$fileName = $_POST["uploader_" . $i . "_tmpname"];
				$nom = substr($_POST["uploader_".$i."_name"],0,strpos($_POST["uploader_".$i."_name"],"."));;
				$data["nom"] = $nom;
				$data["description"] =$nom;
				$data["nom_fichier"] =$fileName;
				$data["employe_id"] = $_POST["data"]["Employe"]["id"];
				$this->Document->create();
				if ($this->Document->save($data)) {
				$this->Session->setFlash('document enregistré', 'message_ok');
				//$this->redirect(array('action' => 'index'));
				} else {
				$this->Session->setFlash("Les données n'ont pas été enregistré...", 'message_error');
				}

			}
			//On recupère le nombre de fichier téléchargé
			$nbFileU = $_POST["uploader_count"];						
			$count = $this->Document->find('count');
			$offset =$count-$nbFileU;
			$documents = $this->Document->find('all',
				array(
				'recursive' => -1, 
				'limit' =>$nbFileU,
				'offset'=>$offset,
				)				  
							  
			);
			$this->data =$documents;
			$this->set('documents', $documents);
		
		} else {
			$this->Session->setFlash("Les données n'ont pas été enregistré...", 'message_error');
			$this->redirect($this->referer());
		}
		
	}
	function upload($id = null) {
		if (!$id) {
			$this->Session->setFlash("Cet employé n'existe pas ", 'message_error');
			$this->redirect($this->referer());
			$this->cakeError('error404', array(array('url' => $this->action)));
		}
		// En-tête HTTP pour ne pas utiliser le cache etc
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		
		// On crée le nom du dossier cible avec le Nom, le prenom et le matricule de l'employé
		//$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
		$employe=$this->Employe->read(null,$id);
		$dirName = $employe["Employe"]["matricule"]."_".$employe["Employe"]["nom"]."-".$employe["Employe"]["prenom"];
		$targetDir = APP.DS.'documents'.DS.$dirName.DS;
		
		//$cleanupTargetDir = false; // Remove old files
		//$maxFileAge = 60 * 60; // Temp file age in seconds
		
		// 5 minutes de temps d'exécution
		@set_time_limit(5 * 60);
		
		// Décommentez cette ligne pour modifier la durée de téléchargement
		// usleep(5000);
		
		// Récuperation des paramètres
		$chunk = isset($_REQUEST["chunk"]) ? $_REQUEST["chunk"] : 0;
		$chunks = isset($_REQUEST["chunks"]) ? $_REQUEST["chunks"] : 0;
		$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';
		
		// Nettoyage du nom du fichier pour des raisons de sécurité
		$fileName = preg_replace('/[^\w\._]+/', '', $fileName);
		
		//On s'assure que le nom du fichier est unique, mais seulement si la segmentation est désactivé
		if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
			$ext = strrpos($fileName, '.');
			$fileName_a = substr($fileName, 0, $ext);
			$fileName_b = substr($fileName, $ext);
		
			$count = 1;
			while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
				$count++;
		
			$fileName = $fileName_a . '_' . $count . $fileName_b;
		}
		
		// Création du dossier cible
		if (!file_exists($targetDir))
			@mkdir($targetDir);
		
		// Supprimer les anciens fichiers temporaires 
		/* Cela ne fonctionne pas vraiment comme il faut
			
		if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
			while (($file = readdir($dir)) !== false) {
				$filePath = $targetDir . DIRECTORY_SEPARATOR . $file;
		
				// Supprimer les fichiers temporaires s'ils sont plus âgés que l'âge maximum défini
				if (preg_match('/\\.tmp$/', $file) && (filemtime($filePath) < time() - $maxFileAge))
					@unlink($filePath);
			}
		
			closedir($dir);
		} else
			die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Impossible d'ouvrir le dossier temporaire."}, "id" : "id"}');
		*/
		
		// Recherche l'en-tête type de contenu
		if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
			$contentType = $_SERVER["HTTP_CONTENT_TYPE"];
		
		if (isset($_SERVER["CONTENT_TYPE"]))
			$contentType = $_SERVER["CONTENT_TYPE"];
		
		// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
		// Prise en charge de l'uploade multipart, les anciennes versions de WebKit ne prennent pas en charge multipart en HTML5
		if (strpos($contentType, "multipart") !== false) {
			if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
				// Open temp file
				$out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
				if ($out) {
					// Read binary input stream and append it to temp file
					$in = fopen($_FILES['file']['tmp_name'], "rb");
		
					if ($in) {
						while ($buff = fread($in, 4096))
							fwrite($out, $buff);
					} else
						die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Impossible d\'ouvrir le flux d\'entrée."}, "id" : "id"}');
					fclose($in);
					fclose($out);
					@unlink($_FILES['file']['tmp_name']);
				} else
					die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Impossible d\'ouvrir le flux de sortie."}, "id" : "id"}');
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Impossible de déplacer le fichier uploadé."}, "id" : "id"}');
		} else {
			// Ouverture du fichier temporaire
			$out = fopen($targetDir . DIRECTORY_SEPARATOR . $fileName, $chunk == 0 ? "wb" : "ab");
			if ($out) {
				// Lire le flux d'entrée binaire et l'ajouter au fichier temporaire
				$in = fopen("php://input", "rb");
		
				if ($in) {
					while ($buff = fread($in, 4096))
						fwrite($out, $buff);
				} else
					die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Impossible d\'ouvrir le flux d\'entrée."}, "id" : "id"}');
		
				fclose($in);
				fclose($out);
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Impossible d\'ouvrir le flux de sortie."}, "id" : "id"}');
		}
		/*$this->data[nom] = $_FILES['file']['tmp_name'];
						$this->data[description] =$_FILES['file']['tmp_name'];
						$this->data[nom_fichier] =$fileName;
						$this->data[employe_id] = $id;
						$this->Document->create();
						$this->Document->save($this->data);*/
		// Retourne une réponse JSON-RPC 
		die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
	
		}
}
