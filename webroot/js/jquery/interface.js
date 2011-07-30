$(document).ready(function() {
	//Recherche dans le tableau
	$('#tableau').dataTable({
			"oLanguage": {
			"sLengthMenu": "Afficher _MENU_ par page",
			"sZeroRecords": "Aucun résultat - désolé",
			"sInfo": "Affichage de _START_ à _END_ de _TOTAL_ enregistrements",
			"sInfoEmpty": "Affichage de 0 à 0 sur 0 enregistrements",
			"sInfoFiltered": "(filtrées à partir_MAX_ nombre total d'enregistrements)",
			"sSearch": "Rechecher dans le tableau :"
		}
				
				
	});
	
	// Affiche un calendrier lors du clique dans un champ de date
	$( ".datepicker" ).datepicker({
		changeMonth: true,changeYear: true,
		dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
		dateFormat: 'dd-mm-yy',
		firstDay: 1,
		monthNamesShort: ['Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec'] });
	
	//Ajoute l'étoile rouge aux label des champ de formaulaire requit
	if($( "div" ).hasClass("required")){
			$('.required>label').addClass("requit");
		}
	//Système d'accordéon
	$(".title").append("<a></a>");
	$(".title a").attr("href", "#");
	$(".title a").addClass("toggle");
	$(".title a").click(function(){
		var $content = $(this).parent().next(".content");
		
		if(!$content.is(":visible")){
		$content.slideDown();
		$(this).removeClass("hide");	
			
		}else{
		$content.slideUp();
		$(this).addClass("hide");	
			
		}
		
	});
	//Impression de la zone
	function printDiv(divId) { 
	$(divId).jqprint();
}
	$(".imprimer").click( function() {
                    $('.centre').jqprint();
                    return false;
                });
	
} );


	