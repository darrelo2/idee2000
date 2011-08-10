<div class="documents index">
<div class="employes">
<?php
 foreach ($employes as $employe):
		?>	
<div class="related">
	
	
	<?php if (!empty($employe['Document'])):?>
	<div class="bloc">
		<div class="title">
	<h2><?php echo $employe['Employe']["nom"]." ".$employe['Employe']['prenom'];?></h2>
	 </div>
	 <div class="content">
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
		<tr <?php echo $class;?>>
			<td><?php
			//$ext = substr($document["nom_fichier"],0,strpos($document["nom_fichier"],'.'));
			$ext = substr(strtolower(strrchr(basename($document['nom_fichier']),".")),1);
			//echo $document['nom_fichier'];
			//echo $ext;
			
			$tabType["video"] = array("avi","mp4","mpeg","flv","wmv");
			$tabType["image"] = array("jpg","jpeg","png","gif","svg","bmp");
			$tabType["audio"] =array("mp3","acc","wav","wma");
			$tabType["tableur"] =array("xls","xlsx","ods","ots");
			$tabType["archive"] =array("zip","rar","7zip","tar");
			$tabType["presentation"] =array("ppt","pptx","pps","odp","otp");
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
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false));
				    break;
				case "image":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/image.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false));
				    break;
				case "audio":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/audio.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false));
				    break;
				case "tableur":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/tableur.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false)
				);
				    break;
				case "archive":
				   echo $this->Html->link(
		$this->Html->image('documents/icons/archive.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false)
				);
				    break;
				case "presentation":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/diapo.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false)
				);
				    break;
				case "doc":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/doc.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false)
				);
				    break;
				case "pdf":
		   echo $this->Html->link(
		$this->Html->image('documents/icons/pdf.png', array('width'=>'60','height'=>'60','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
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
		array('controller' => 'documents', 'action' => 'telecharger',$document['id']),
		array('escape' => false,"title"=>"Télécharger ce fichier","style"=>"text-decoration:none","style"=>"text-decoration:none; text-align:rigth;margin-left:30px;")
				);
		?>
		<?php
		echo $this->Html->link(
		$this->Html->image('themeAdmin/icons/sup.png', array('width'=>'30','height'=>'30','alt'=>'photo', 'border' => '0')),
		array('controller' => 'documents', 'action' => 'delete',$document["id"]),
		array('escape' => false,"title"=>"Supprimer","style"=>"text-decoration:none; text-align:rigth;margin-left:30px;"),
		"Voulez vous vraiment supprimer ce document ?"
				);
		?>
		
			</td>
		</tr>
	<?php endforeach; ?>
	</table><div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nouveau Document', true),array('controller' => 'documents', 'action' => 'uploader',$employe['Employe']['id']),array("class"=>"button"));?> </li>
		</ul>
	</div></div></div>


	
</div><br/>
</div><?php endif; ?>
<?php endforeach; ?>
</div>
