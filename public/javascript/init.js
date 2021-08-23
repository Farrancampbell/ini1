// Edit the date here

$(document).ready(function() {
						   
	$("#countdown").countdown({
				date: "10 November 2021 11:30:00",
				format: "on"
			},
			
			function() {
				// callback function
			});

});	
