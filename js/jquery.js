			$(document).ready(function(){
		    	$('.delete_data').click(function(){
		    		var id = $(this).attr("id");
		    		window.location = "home/delete_data/"+id;
		    	})
		    })