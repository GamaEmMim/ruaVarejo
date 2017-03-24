$(document).ready(function(e){
	$(".sendGameButton").click(function(e){
		e.preventDefault();
		global_customRequestSignUpModal(
			function(){
				loadResult();
			},
			function(){
				$(".customCloseEvent").html("Saber o resultado!");
				$(".popupSubtitle").html("Preencha este formulário para ter acesso ao resultado!")
			}
		);
	});
});

function loadResult(){
	var inputs = $("input[type='radio']:checked");
	if (inputs.length < 5){
		alert("Todas as questões são obrigatórias");
		return false;
	}
	console.log(inputs);
	var answers = {};
	answers.din_01 = "B";
	answers.din_02 = "C";
	answers.din_03 = "B";
	answers.din_04 = "C";
	answers.din_05 = "C";
	var total = 0;
	$.each(inputs, function(){
		console.log($(this).attr("name") + "=" + $(this).val());
		if ($(this).val() == answers[$(this).attr("name")]){
			console.log("correct");
			total++;
		}
		console.log("--------");
	});
	$(".answer").html("<h1>Você acertou " + total + " de 5 perguntas!</h1><br/><div class=\"fb-share-button\" data-href=\"http://ruavarejo.com.br/pesquisadinamica.php\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fruavarejo.com.br%2Fpesquisadinamica.php&amp;src=sdkpreparse\">Compartilhar seu Resultado</a></div>");

	$(".answer").show();
	$(".content").hide();
	console.log(total);
}


//<div class="fb-share-button" data-href="http://ruavarejo.com.br/pesquisadinamica.php" 
   // data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fruavarejo.com.br%2Fpesquisadinamica.php&amp;src=sdkpreparse">Compartilhar seu Resultado</a></div>