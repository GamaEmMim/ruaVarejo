$(document).ready(function(e){
	$(".sendGameButton").click(function(e){
		e.preventDefault();
		global_customRequestSignUpModal(
			function(){
				loadResult();
			},
			function(){
				$(".customCloseEvent").html("Saber o resultado!");
				$(".subscribeModelButton").attr("value", "ASSINE E VEJA O RESULTADO!");
				$(".popupSubtitle").html("Preencha este formulário para ter acesso ao resultado!")
			}
		);
	});

	$(".retry").click(function(e){
		e.preventDefault();
		$("input[type='radio']:checked").attr("checked", false);
		$(".answer").hide();
		$(".content").show();
	})
});

function loadResult(){
	var inputs = $("input[type='radio']:checked");
	if (inputs.length < 5){
		alert("Todas as questões são obrigatórias");
		return false;
	}
	var answers = {};
	answers.din_01 = "B";
	answers.din_02 = "C";
	answers.din_03 = "B";
	answers.din_04 = "C";
	answers.din_05 = "C";
	var acertos = 0;
	var total = inputs.length;
	$.each(inputs, function(){
		if ($(this).val() == answers[$(this).attr("name")]){
			acertos++;
		}
	});
	var content = $(".answer").html();
	$(".acertos").html(acertos);
	$(".total").html(total);
	switch (acertos){
		case 1: case 2: case 3:
			$(".emotion").html(" :(");
			$(".responseStatus").attr("src", "");
		break;
		case 4:
			$(".emotion").html("!");
			$(".responseStatus").attr("src", "/images/test/grade4.jpg");
		break;
		case 5:
			$(".emotion").html("! Meus parabéns!");
			$(".responseStatus").attr("src", "/images/test/grade5.jpg");
		break;
	}
	$(".answer").show();
	$(".content").hide();
}


//<div class="fb-share-button" data-href="http://ruavarejo.com.br/pesquisadinamica.php" 
   // data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fruavarejo.com.br%2Fpesquisadinamica.php&amp;src=sdkpreparse">Compartilhar seu Resultado</a></div>