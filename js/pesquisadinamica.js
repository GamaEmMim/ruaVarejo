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
	$(".answer").html("Você acertou " + total + " de 5 perguntas!");
	$(".answer").show();
	$(".content").hide();
	console.log(total);
}