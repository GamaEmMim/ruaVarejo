$(document).ready(function(){
	console.log(window.sessionStorage.bannerAlreadyShown);
	if (window.sessionStorage.bannerAlreadyShown === undefined || !window.sessionStorage.bannerAlreadyShown){
		window.sessionStorage.bannerAlreadyShown = true;
		$('#signUpModal').modal('show');
	}
	$(".closeModal").click(function(event){
		event.preventDefault();
		var target = "#" + $(this).attr("target");
		$(target).modal('hide');
	});
	$(".signUpButton,.signUpModal").click(function(event){
		event.preventDefault();
		$("#signUpModal").modal('show');
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

		$.ajax({
			url:'http://api.ruavarejo.com.br/cliente',
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