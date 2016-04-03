jQuery(document).ready( function($) {
	$("input[name='cccomm_cc_email']").blur(function(){
		$.ajax({
			type: "POST",
			data: "cccomm_cc_email="+$(this).attr("value") + "&action=cccomm_email_check",
			url: ajaxurl,
			beforeSend: function(){
			$("#emailInfo").html("Checking Email...");
		},
		success: function(data){
			if(data == "valid")
			{
				$("#emailInfo").html("Email OK");
			}
			else
			{
				$("#emailInfo").html("You have entered an invalid email");
			}
		}
		});
	});
});