$(document).ready(function(){
	$(".contactForm").submit(function(event){
		event.preventDefault();
		var parameters = {};
		parameters.name = $("#name").val();
		parameters.lastName = $("#lastName").val();
		parameters.company = $("#company").val();
		parameters.email = $("#email").val();
		parameters.message = $("#message").val();
		if (parameters.name == ""){
			alert("O nome é obrigatório");
			$("#name").focus();
			return;
		}
		if (parameters.lastName == ""){
			alert("O sobrenome é obrigatório");
			$("#lastName").focus();
			return;
		}
		if (parameters.email == ""){
			alert("O email é obrigatório");
			$("#email").focus();
			return;
		}
		if (parameters.message == ""){
			alert("O message é obrigatório");
			$("#message").focus();
			return;
		}

		$.ajax({
			url:'http://api.ruavarejo.com.br/contact',
			type:"POST",
			data:JSON.stringify(parameters),
			contentType:"application/json; charset=utf-8",
			dataType:"json",
			success: function(data){
				console.log("---");
				console.log(data);
				console.log("---");
			}
		});
	});
});
