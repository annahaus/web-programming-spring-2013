// wait for the page to fully load
$(document).ready(function() {
	// wait for the send button to be clicked
	$("#send_contact").click(function() {
		// get the data from the form, [array]
		var services = [];
		$('.services:checked').each(function(i) {
			services[i] = $(this).val();
		});
		var contact = {customername: $("#customername").val() , customeremail: $("#customeremail").val() , customerphone: $("#customerphone").val(), services: services };
		// get browser to run ajax
		$.ajax({
			type:"POST",
			url:"send_contact.php",
			data:contact
			}).done(function() {
			alert("Thank You. Your contact information has been sent. We will contact you within 48 hours.");
			});
	});
});