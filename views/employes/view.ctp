<div class="employes">
<h2><?php  __('Employé : '.$employe['Employe']['nom']." ".$employe['Employe']['prenom']);?></h2>
<hr/>
<div class="actions">
	<div class="bloc">
    <div class="title">
        <h3><?php __('Actions'); ?></h3>
    </div>
	<div class="content">
	<hr/>
	
	<ul id="nav">
		<li><?php echo $this->Html->link(__('Modifier', true), array('action' => 'edit', $employe['Employe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Supprimer', true), array('action' => 'delete', $employe['Employe']['id']), null, sprintf(__('Voulez vous vraiment supprimer :  %s?', true), $employe['Employe']['nom']." ".$employe['Employe']['prenom'])); ?> </li>
		<li><?php echo $this->Html->link(__('Liste des Employés', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nouvel Employé', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Fiche en PDF', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Imprimer', true), "#",array("title"=>"Imprimer la fiche de l'employé", "class"=>"imprimer")); ?> </li>
	</ul>
    </div></div></div><br/><hr/>
<div class="bloc">

	 <div class="title">
        <h3><?php __("Fiche de l'employé"); ?></h3>
     </div><div class="content">
	<hr/>
 <div class="centre" >
	<div class="photo"><?php echo $this->Html->image('employes/photo/'.$employe['Employe']['photo'], array('width'=>'120','height'=>'140','alt'=>'Photo', 'border' => '0')) ?></div>
	<dl><?php $i = 0; $class = ' class="altrow"';?>

		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nom :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['nom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Prénom :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['prenom']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Matricule :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['matricule']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Genre :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			$genre= $employe['Employe']['genre'];
			if($genre == "M")
			{echo "Homme";}else{ echo "Femme";}
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Catégorie :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			$cat = $employe['Employe']['categorie'];       
			switch ($cat) {
			case "AE":
			    echo "Agent d'exécution";
			    break;
			case "TS":
			    echo "Techniciens supérieurs";
			    break;  
			case "AM":
			    echo "Agent de maitrise";
			    break;
			case "C":
			    echo "Cadre";
			    break;
			case "CD":
			    echo "Cadre dirigeant";
			    break;
				}
				
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grade :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __("Date d'embauche :"); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo date('d-m-Y', strtotime ( $employe['Employe']['date_embauche']));
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date de naissance :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo date('d-m-Y', strtotime ( $employe['Employe']['date_naissance']));
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lieu de naissance :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['lieu_naissance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __("Numero d'asurance :"); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['numero_assurance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __("Nombre d'enfant :"); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['nbre_enfant']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['adresse']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telephone 1 :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['telephone1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telephone 2 :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['telephone2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse Email :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Département :'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($employe['Departement']['nom'], array('controller' => 'departements', 'action' => 'view', $employe['Departement']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
 </div></div></div>
</div>
<br/><hr/>
<div class="related">
		<div class="bloc">
    <div class="title">
	<h3><?php __('Commentaires associés');?></h3>
    </div><div class="content">
	<hr/>
	<?php if (!empty($employe['Commentaire'])):?>
	<table cellpadding = "0" cellspacing = "0">
		<thead>
	<tr>
		<th><?php __('Contenu'); ?></th>
		<th><?php __('Auteur'); ?></th>
		<th><?php __("Pseudonyme de l'auteur"); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
		</thead>
	<?php
		$i = 0;
		foreach ($employe['Commentaire'] as $commentaire):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $commentaire['contenu'];?></td>
			<td><?php
			for($i=0;$i<count($employes);$i++){
			if($employes[$i]["Employe"]["id"]==$commentaire['employe_id']){
				echo $employes[$i]["Employe"]["nom"]."&nbsp".$employes[$i]["Employe"]["prenom"];
			}
			}
			?></td>
			<td><?php
			for($i=0;$i<count($employes);$i++){
			if($employes[$i]["Utilisateur"][0]["id"]==$commentaire['utilisateur_id']){
				echo $employes[$i]["Utilisateur"][0]["username"];
			}
			}
			?></td>
			<td class="actions">
			<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'commentaires', 'action' => 'view', $commentaire['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true))
				);
		?>&nbsp;
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('action' => 'delete', $commentaire['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet employé",true)),
		'Voulez vous vraiment supprimer ce commentaire ?'
		
				);
		?>&nbsp;
		
		</td>
		</tr>
	<?php endforeach; ?>
	</table></div ></div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Commentaire', true), array('controller' => 'commentaires', 'action' => 'add'),array("class"=>"button"));?> </li>
		</ul>
	</div>
</div><br/><hr/>
<div class="related">
	<div class="bloc">
		<div class="title">
	<h3><?php __('Documents associés');?></h3>
	 </div><div class="content">
	<hr/>
	<?php if (!empty($employe['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
		<thead>
	<tr>
		<th><?php __('Type'); ?></th>
		<th><?php __('Nom'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Nom du Fichier'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
		</thead>
	<?php
		$i = 0;
		foreach ($employe['Document'] as $document):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php
			//$ext = substr($document["nom_fichier"],0,strpos($document["nom_fichier"],'.'));
			$ext = substr(strtolower(strrchr(basename($document['nom_fichier']),".")),1);
			//echo $document['nom_fichier'];
			//echo $ext;
			
			$tabType["video"] = array("avi","mp4","mpeg","flv","wmv");
			$tabType["image"] = array("jpg","jpeg","png","gif","svg","bmp");
			$tabType["audio"] =array("mp3","acc","wav","wma");
			$tabType["tableur"] =array("xls","ods","ots");
			$tabType["archive"] =array("zip","rar","7zip","tar");
			$tabType["presentation"] =array("ppt","pps","odp","otp");
			$tabType["doc"] =array("doc","docx","odt","ott");
			$tabType["pdf"] =array("pdf","djv","pfm");
			$type ="";
			if(in_array($ext,$tabType["video"])){
			   $type = "video";
			}if(in_array($ext,$tabType["image"])){
			   $type = "image";
			}elseif(in_array($ext,$tabType["audio"])){
			   $type = "audio";
			}elseif(in_array($ext,$tabType["tableur"])){
			   $type = "tableur";
			}elseif(in_array($ext,$tabType["archive"])){
			   $type = "archive";
			}elseif(in_array($ext,$tabType["presentation"])){
			   $type = "presentation";
			}elseif(in_array($ext,$tabType["doc"])){
			   $type = "doc";
			}elseif(in_array($ext,$tabType["pdf"])){
			   $type = "pdf";
			}
			switch ($type) {
				case "video":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/video.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "image":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/image.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "audio":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/audio.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "tableur":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/tableur.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "archive":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/archive.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "presentation":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/diapo.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "doc":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/doc.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
				case "pdf":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/pdf.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('action' => 'view', $employe['Employe']['id']),
		array('escape' => false)
				);
				    break;
			    }
			
			
			
			?></td>
			<td><?php echo $document['nom'];?></td>
			<td><?php echo $document['description'];?></td>
			<td><?php echo $document['nom_fichier'];?></td>
			<td class="actions" style="text-align:center; ">
				<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/load.png', array('width'=>'30','height'=>'30','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['nom_fichier']),
		array('escape' => false,"title"=>"Télécharger ce fichier","style"=>"text-decoration:none")
				);
		?>&nbsp;
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'30','height'=>'30','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs', 'action' => 'delete',$document["id"]),
		array('escape' => false,"title"=>"Supprimer","style"=>"text-decoration:none; text-align:rigth;margin-left:40px;"),
		"Voulez vous vraiment supprimer ce document ?"
				);
		?>&nbsp;
		
			</td>
		</tr>
	<?php endforeach; ?>
	</table></div></div>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Document', true), array('controller' => 'documents', 'action' => 'add'),array("class"=>"button"));?> </li>
		</ul>
	</div>
</div><br/><hr/>
<div class="related">
	<div class="bloc">
		<div class="title">
	<h3><?php __("Profil d'utilisateur");?></h3>
	 </div><div class="content">
	<hr/>
	<?php if(!empty($employe['Utilisateur'])):?>
	<table cellpadding = "0" cellspacing = "0">
		<thead
	<tr>
		<th><?php __('Pseudonyme'); ?></th>
		<th><?php __('Date de création'); ?></th>
		<th><?php __('Dernière visite'); ?></th>
		<th><?php __('Date de modification'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	</thead>
	<?php
		$i = 0;
		foreach ($employe['Utilisateur'] as $utilisateur):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $utilisateur['username'];?></td>
			<td><?php echo $utilisateur['created'];?></td>
			<td><?php echo $utilisateur['lastvisitDate'];?></td>
			<td><?php echo $utilisateur['modified'];?></td>
			<td class="actions">
			<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/affiche.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs', 'action' => 'view', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Afficher toutes les informations ",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/modif.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs', 'action' => 'edit', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Modifier les informations",true))
				);
		?>&nbsp;<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'20','height'=>'20','alt'=>'photo', 'border' => '0')),
		array('controller' => 'utilisateurs', 'action' => 'delete', $utilisateur['id']),
		array('escape' => false,"title"=>sprintf("Supprimer cet employé",true)),
		sprintf(__("Voulez vous vraiment supprimer :  %s en tant qu'utilisateur ?", true), $employe['Employe']['nom']." ".$employe['Employe']['prenom'])
		
				);
		?>&nbsp;
		
		</td>
		</tr>
	<?php   endforeach; ?>
	</table>
<?php endif; ?></div></div>

</div>
