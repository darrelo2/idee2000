<?php // get the HTML
    ob_start(); ?>
<style type="text/css">
<!--
table
{
 table {
	line-height: 2em;
	margin: 0em 0em;
	width:100%;
}
 table .altrow {
	background: #f4f4f4;
}
table.reference {
    border-width: 0;
    font: 12px 'Lucida Grande',Verdana,sans-serif;
    margin-bottom: 15px;
    width: 100%;
}
table.reference th {
    background-color: #DDDDDD;
    vertical-align: top;
    width: 200px;
}
table.reference td {
    background-color: #EEEEEE;
    vertical-align: top;
}
table.reference th, table.reference td {
    border: 2px solid #FFFFFF;
    padding: 7px;
}
 .centre{
	margin:0px auto;
	background:#fff;
	width:100%;
	
}
.photo{
	float:right;
	margin:10px 10px 10px 0;
	border:5px solid #FFF;
}
.logo{
	/*float:right;*/
	margin:10px 10px  0 10px;

}
.bloclogo{
	margin-left:150mm;
	border:5px solid #FFF;
	margin-bottom:10px;
	text-align:center;
}
 li{
	list-style-type:none;
}
a{
	text-decoration : none;
	color:#000;
}
.title{
	border: 2px dotted #cccccc;
	text-align:center;
	
}
-->
</style>

<div class="bloc">
<div class="bloclogo">
<?php echo $this->Html->image($this->Html->url('/webroot/img/logo.png',true), array('width'=>'80','height'=>'100','alt'=>'logo', 'class' => 'logo')) ?>
<br/><em>Le slogan de l'entreprise ici</em>
</div>
	 <div class="title">
        <h1><?php __("Fiche de l'employé"); ?></h1>
     </div><div class="content">
	
 <div class="centre" >
	<div class="photo"><?php echo $this->Html->image($this->Html->url('/webroot/img/employes/photo/'.$employe['Employe']['photo'],true), array('width'=>'120','height'=>'140','alt'=>'Photo', 'border' => '0')) ?></div>
	<table class="reference">
		<col style="width: 40%">
		<col style="width: 60%">
	<tbody>
	<?php $i = 0; $class = ' class="altrow"';?>

		<tr>
		<th <?php if ($i % 2 == 0) echo $class;?>><?php __('Nom :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['nom']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Prénom :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['prenom']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Matricule :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['matricule']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Genre :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo $employe['Employe']['genre'];
		
			?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Catégorie :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
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
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Grade :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['grade']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __("Date d'embauche :"); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo date('d-m-Y', strtotime ( $employe['Employe']['date_embauche']));
			?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Date de naissance :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo date('d-m-Y', strtotime ( $employe['Employe']['date_naissance']));
			?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Lieu de naissance :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['lieu_naissance']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __("Numero d'asurance :"); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['numero_assurance']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __("Nombre d'enfant :"); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['nbre_enfant']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['adresse']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Telephone 1 :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['telephone1']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Telephone 2 :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['telephone2']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Adresse Email :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employe['Employe']['email']; ?>
			
		</td></tr>
		<tr><th <?php if ($i % 2 == 0) echo $class;?>><?php __('Département :'); ?></th>
		<td <?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($employe['Departement']['nom'], array('controller' => 'departements', 'action' => 'view', $employe['Departement']['id'])); ?>
			
		</td></tr>
		</tbody>
	</table>
 </div></div>
 <div class="bloclogo">
<em><?php echo "Le ".date("d/m/Y")." à ".date("H:i");?></em>
</div>
 </div>
<?php 
	$content = ob_get_clean();
	$filname = 'fiche_'.$employe['Employe']['nom']."-".$employe['Employe']['prenom'];
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output(IMAGES.'/employes/pdf/'.$filname.'.pdf', 'F');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    echo '
	<iframe src="'.$this->Html->url('/webroot/img/employes/pdf/'.$filname.'.pdf',true).'" width="100%" height="100%">
	[Your browser does <em>not</em> support <code>iframe</code>,
	or has been configured not to display inline frames.
	You can access <a href="'.$this->Html->url('/webroot/img/employes/pdf/'.$filname.'.pdf',true).'">the document</a>
	via a link though.]</iframe>';
	
    //echo WWW_ROOT."<br/>";
    //echo 'http://'.$_SERVER['SERVER_NAME'].'/employes/photo/';
    //echo IMAGES;

?>