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
		dateFormat: 'yy-mm-dd',
		maxDate: new Date('+1m +1w'),
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
	return false;	
	});	
	//Système d'accordéon SideBar
	$(".title a").attr("href", "#");
	$(".title a").addClass("toggle");
	$("#sidebar .submenu").hide();
	$("#sidebar .current ul").show();
	$("#sidebar ul").prev().click(function(){
		var $elmt = $(this).next();
		var $submenu = $(this).next().parent();
		
		if(!$(this).parent().hasClass("nosubmenu") && $(this).attr("href")){
			if(!$elmt.is(":visible")){
			$("li").removeClass("current");
			$(this).parent().addClass('current');
			$("#sidebar .submenu").slideUp();
			
			$elmt.slideDown();
			}else{
			$elmt.slideUp();
			$(this).parent().removeClass('current');
			}
		}
		
		
		
		return false;
	});
	$("#sidebar .submenu li a").prev().click(function(){
		$(this).parent().parent().parent.addClass("current");
		alert('ok');
	return false;
	
	});
	//Impression de la zone
	function printDiv(divId) { 
	$(divId).jqprint();
}
	$(".imprimer").click( function() {
                    $('#content').jqprint();
                    return false;
                });
	
} );


	