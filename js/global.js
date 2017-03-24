$(document).ready(function(){
	console.log(window.sessionStorage.bannerAlreadyShown);
	if (window.sessionStorage.bannerAlreadyShown === undefined || !window.sessionStorage.bannerAlreadyShown){
		window.sessionStorage.bannerAlreadyShown = true;
		$('#signUpModal').modal('show');
	}
	
	global_defaultModalCloseButton();

	$(".signUpButton,.signUpModal").click(function(event){
		event.preventDefault();
		$("#signUpModal").modal('show');
	});

	$("#signUpModal").on('hide.bs.modal', function(){
		$(".customCloseEvent").off();
		global_defaultModalCloseButton();
	});

	$(".leadSignUp input[name='tipoComercio']").click(function(e){
		$(".radioButtonOptions").attr("value", $(this).attr("value"));
	});
	$(".leadSignUp").submit(function(event){
		event.preventDefault();
		var parameters = {};
		parameters.name = $("#name").val();
		parameters.lastName = $("#lastName").val();
		parameters.tipoComercio = $(".radioButtonOptions").attr("value");
		parameters.email = $("#email").val();
		parameters.company = $("#company").val();
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
				window.sessionStorage.signedUp = true;
				$(".formSent").show();
				$(".mainModal").hide();
				$(".modal-content").removeClass("minHeightBanner");
			},
			error: function(e){
				window.sessionStorage.signedUp = true;
				$(".formSent").show();
				$(".mainModal").hide();
				$(".modal-content").removeClass("minHeightBanner");
			}
		});
	});
});
function global_customRequestSignUpModal(afterRequestFunction, beforeRequestFunction){
	if (afterRequestFunction !== undefined && window.sessionStorage.signedUp){
		afterRequestFunction();
		return;
	}
	if (beforeRequestFunction !== undefined){
		beforeRequestFunction();
	}
	if (afterRequestFunction !== undefined){
		$(".customCloseEvent").off();
		$(".customCloseEvent").click(function(e){
			e.preventDefault();
			afterRequestFunction();
			$('#signUpModal').modal('hide');
			global_defaultModalCloseButton();
		});
		$('#signUpModal').modal('show');
	}
}
function global_defaultModalCloseButton(){
	$(".closeModal").click(function(event){
		event.preventDefault();
		var target = "#" + $(this).attr("target");
		$(target).modal('hide');
	});

	$(".goToDownload").click(function(event){
   		window.location.href = "/ebooks.php";
	});

	$(".customCloseEvent").html("Ir para Downloads!");
	$(".subscribeModelButton").attr("value", "ASSINAR!");

	$(".popupTitle").html("VOCÊ SABE TUDO SOBRE VAREJO?");
	$(".popupSubtitle").html("Assine gratuitamente nossa newsletter e receba dicas para melhorar<br/>seu negócio!");
}