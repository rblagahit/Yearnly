$(function (){
	$('.signupemail').blur(function(){
		var useremail = $(this).val();
		
		$.post('classes/helpers/YearnlyService.php',
			{ call: "dupcheck", email: useremail},
			 function(data){
			 	if(data == "true"){
			 		$('.errortext').html("email taken");
			 		$('#signupbutton').attr('disabled', 'disabled');
			 	}else{
			 		$('.errortext').html("");
			 		$('#signupbutton').removeAttr("disabled");
			 	}
			 });
	});

});