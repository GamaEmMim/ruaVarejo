$(document).ready(function(){
	$(".pesquisaForm").submit(function(e){
		e.preventDefault();
		var parameters = {};
		parameters.name = $("#pesquisa_name").val();
		parameters.email = $("#pesquisa_email").val();
		parameters.company = $("#pesquisa_empresa").val();
		parameters.conheceVarejo = ($(".varejo_2_0").attr("value") == 'true');
		parameters.grauImportancia = $(".importancia_varejo_2_0").attr("value");
		parameters.rapidezInformacao = $(".importanciaRapidez").attr("value");
		parameters.metodologia = $(".confiabilidade").attr("value");
		parameters.relacaoVarejo = $(".relacaoVarejo").attr("value");
		parameters.possuiInteresse = $(".vontadeAprender").attr("value");
		if (parameters.name == ""){
			alert("O nome é obrigatório");
			return;
		}
		if (parameters.email == ""){
			alert("O email é obrigatório");
			return;
		}
		if (parameters.company == ""){
			alert("A empresa é obrigatória");
			return;
		}
		if (parameters.grauImportancia == ""){
			alert("Por favor, responda a importância do varejo 2.0");
			return;
		}
		if (parameters.rapidezInformacao == ""){
			alert("Por favor, responda a importância da rapidez no recebimento da informação");
			return;
		}

		if (parameters.metodologia == ""){
			alert("A metodologia é obrigatória");
			return;
		}		
		if (parameters.relacaoVarejo == ""){
			alert("Por favor, responda qual é a sua relação com o varejo");
			return;
		}		
		if (parameters.possuiInteresse == ""){
			alert("Por favor, repsonda se você tem vontade de aprender sobre varejo");
			return;
		}

		parameters.giroEstoque = "";
		if ($("#relacao_impacta").prop("checked")){
			parameters.giroEstoque += "Impacta em como eu enxergo meu estoque e "
										+ "as estratégias relacionadas a ele;";
		}

		if ($("#relacao_aumenta").prop("checked")){
			parameters.giroEstoque += "Aumenta meu controle sobre o ciclo de "
										+ "vida do produto;";
		}

		if ($("#relacao_naoha").prop("checked")){
			parameters.giroEstoque += "Não tem nada a ver com giro de estoque;";
		}

		parameters.giroEstoque = parameters.giroEstoque.slice(0, -1);

		parameters.empresasConhecidas = "";
		$.each($(".empresasConhecidas"), function(){
			if ($(this).prop("checked")){
				parameters.empresasConhecidas += $(this).val() + ",";
			}
		});
		parameters.empresasConhecidas = parameters.empresasConhecidas.slice(0, -1);
		sendAjax(parameters);
		console.log(parameters);
	});

	$(".radioButtonAction").click(function(e){
		$("."+$(this).attr("target")).attr("value", $(this).val());
	})
});

function sendAjax(parameters){
	$.ajax({
		url:'http://localhost:8080/pesquisa',
		type:"POST",
		data:JSON.stringify(parameters),
		contentType:"application/json; charset=utf-8",
		dataType:"json",
		success: function(e){
			$(".successMessage").show();
			$(".pesquisaForm").hide();
		},
		error: function(e){
			$(".successMessage").show();
			$(".pesquisaForm").hide();
		}
	});
}