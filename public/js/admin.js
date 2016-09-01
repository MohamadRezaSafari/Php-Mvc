$(document).ready(function(){

	$('body').addClass('default');
	

	$('#gray').click(function(){
		var color = $('#gray').text();
		alert(color);
		$('body').removeClass('default');
		$('body').removeClass('silver');
		$('body').addClass('gray');
	});

	$('#silver').click(function(){
		$('body').removeClass('gray');
		$('body').removeClass('default');
		$('body').addClass('silver');
	});

	$('#default').click(function(){

		$('body').removeClass('gray');
		$('body').removeClass('silver');
		$('body').addClass('default');
	});


	//$('body').addClass(color);

});