$(document).ready(function() {

	$("#form_1").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail_1.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form_1").trigger("reset");
		});
		return false;
	});
	
});