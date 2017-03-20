$(document).ready(function(){
	$(".varejistaFormRadioButton input[name='tipoComercio']").click(function(e){
		$(".varejistaFormRadioButton").attr("value", $(this).attr("value"));
	});
	$(".varejistaForm").submit(function(event){
		event.preventDefault();
		var parameters = {};
		parameters.name = $(".varejistaForm input[name='name']").val();
		parameters.lastName = $(".varejistaForm input[name='lastName']").val();
		parameters.tipoComercio = $(".varejistaFormRadioButton").attr("value");
		parameters.email = $(".varejistaForm input[name='email']").val();
		parameters.company = $(".varejistaForm input[name='company']").val();
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
		if (parameters.tipoComercio == ""){
			alert("O tipo de comércio é obrigatório");
			$("#tipoComercio").focus();
			return;
		}
		if (parameters.email == ""){
			alert("O email é obrigatório");
			$("#email").focus();
			return;
		}
		if (parameters.company == ""){
			alert("A empresa é obrigatória");
			$("#company").focus();
			return;
		}

		$.ajax({
			url:'http://api.ruavarejo.com.br/cliente',
			type:"POST",
			data:JSON.stringify(parameters),
			contentType:"application/json; charset=utf-8",
			dataType:"json",
			success: function(e){
				$(".successSignUp").show();
				$(".varejistaForm").hide();
			},
			error: function(e){
				$(".successSignUp").show();
				$(".varejistaForm").hide();
			}
		});
	});
});