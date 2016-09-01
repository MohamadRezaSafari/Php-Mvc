$(document).ready(function(){

	

		$('#randomInsert').submit(function(){
			var url = $(this).attr('action');
			var data = $(this).serialize();
			$.post(url, data ,function(data){
				
			});

			return false;
		});

	setInterval(function(){
		
		
		$.get('chat/lists', function(data){

			$('.admin-chat-2').html('<p>'+ data +'</p>');
			
        });
	


	}, 600);

});