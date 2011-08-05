<?php
	//debug($employe);
	define('PLUPLOAD',JS_URL."lib/plupload/");
	echo $html->script('lib/plupload/plupload.full.js', false);
	echo $html->script('lib/plupload/plupload.flash.js', false);
	echo $html->script('lib/plupload/jquery.plupload.queue/jquery.plupload.queue.js', false);
	echo $html->css('/webroot/js/lib/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css');
?>
<script type="text/javascript">
// Convert divs to queue widgets when the DOM is ready
$(document).ready(function() {
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'flash,html5,browserplus,silverlight,gears,html4',
		url : '<?php echo $this->Html->url('/documents/upload/'.$employe['Employe']['id'],true);?>',
		max_file_size : '1000mb',
		max_file_count: 20, // user can add no more then 20 files at a time
		chunk_size : '1mb',
		unique_names : true,
		multiple_queues : true,

		// Resize images on clientside if we can
		resize : {width : 320, height : 240, quality : 90},
		
		// Rename files by clicking on their titles
		rename: true,
		
		// Sort files
		sortable: true,

		// Specify what files to browse for
		/*filters : [
			{title : "Music files", extensions : "mp3,aac,wma"},
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip,avi"}
		],*/

		// Flash settings
		flash_swf_url : '<?php echo $this->Html->url('/webroot/js/lib/plupload/plupload.flash.swf',true); ?>',

		// Silverlight settings
		silverlight_xap_url : '<?php echo $this->Html->url('/webroot/js/lib/plupload/plupload.silverlight.xap',true);?>'
	}); 

	// Client side form validation
	$('form').submit(function(e) {
		var uploader = $('#uploader').plupload('getUploader');

		// Validate number of uploaded files
		if (uploader.total.uploaded == 0) {
			// Files in queue upload them first
			if (uploader.files.length > 0) {
				// When all files are uploaded submit form
				uploader.bind('UploadProgress', function() {
					if (uploader.total.uploaded == uploader.files.length)
						$('form').submit();
				});

				uploader.start();
			} else
				alert('You must at least upload one file.');

			e.preventDefault();
		}
	});

});
</script>
	<?php echo $this->Form->create('Document',array(
	'class' => 'form has-validation',
	"type" => "file",
	"action" => "upload_files",
				       
	));?>
	<div id="uploader">
			<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or
				HTML5 support.</p>
		</div>
	<?php
	
		echo $this->Form->input('Employe.id',
					array(
		'div'=>'input long',
		'label'=>'Grade',
		'type'=>'hidden',
		'value'=>$employe['Employe']['id'],
		));
	?>
	
	
	<div style="margin:10px; float:right;">

	    <?php
	    
    echo $form->button('Enregistrer', array('type'=>'submit',"class"=>"button",'style'=>"margin-left:10px;"));
    echo $this->Html->link(__('Annuler', true), 
    array('controller' => 'documents', 'action' => 'index'),
    array("class"=>"button",'style'=>"margin-left:10px;"));
    ?>	</div>
	<?php echo $this->Form->end();?>
	
	
	
