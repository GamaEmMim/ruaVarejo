<?php require(__DIR__."/components/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=WEBSITE_TITLE?>Rua Varejo</title>
    <?php require(__DIR__."/components/import.html") ?>
    <link rel="stylesheet" type="text/css" href="/css/posts.css">
    <script src="/js/pesquisa.js"></script>
  </head>

  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>
    <div class="successMessage" style="display: none;">
        <h3>Pesquisa recebida com sucesso. Muito obrigado pela participação!</h1>
    </div>
    <form class="pesquisaForm" style="display: inline;">
      <!--Posts e divulgação de ebook-->
      <div class="col-md-9" style="padding-top: 5%; padding-right:10%; padding-left: 10%; padding-bottom: 5%">
        <h1>PESQUISA VAREJO 2.0</h1>
        <h2 style="color:#808080">Esta pesquisa busca entender qual o grau de importância do Varejo 2.0 e como ele está relacionado às diferentes etapas no processo de vendas.</h2>
      <div class="clearfix colelem" id="u12639-32"><!-- content -->

        <div style="width: 50%">
          <p>Nome:<input type="text" id="pesquisa_name" ></p>
        </div>

        <div style="width: 50%">
          <p>Sobrenome:<input type="text" id="pesquisa_lastname" ></p>
        </div>

        <div style="width: 50%"> 
          <p>Email:<input type="email" id="pesquisa_email" placeholder="e-mail profissional"> </p>
        </div>
        
         <div style="width: 50%">
          <p>Empresa de atuação:<input type="text" id="pesquisa_empresa"></p>
        </div>

        <div class="radioButtonOptions ramoEmpresa" value="">
          <input type="radio" name="tipoComercio" class="radioButtonAction" target="ramoEmpresa" value="VAREJO">
          <label for="varejo">varejo</label>
          <input type="radio" name="tipoComercio" class="radioButtonAction" target="ramoEmpresa" value="INDUSTRIA">
          <label for="industria">indústria</label>
          <input type="radio" name="tipoComercio" class="radioButtonAction" target="ramoEmpresa" value="OUTRO">
          <label for="outro">outro</label>
        </div>

<label title="ooo"/></label>
        <div class="radioButtonOptions varejo_2_0" value="">
         <p>Você sabe o que é Varejo 2.0?</p> 
          <input type="radio" class="radioButtonAction" name="varejo_2_0" target="varejo_2_0" value="true"> 
          <label for="varejosim">Sim</label> 
          <input type="radio" class="radioButtonAction" name="varejo_2_0" target="varejo_2_0" value="false"> 
          <label for="varejonao">Não</label> 
        </div> 
<label title="concorrencia"/></label>    
         <div class="radioButtonOptions importancia_varejo_2_0" value="">
         <p>Para você, qual o grau de importância do varejo 2.0 para análise de concorrência? </p> 
          <input type="radio" id="" class="radioButtonAction" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="1"> 
          <label for="1">1</label> 
          <input type="radio" id="" class="radioButtonAction" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="2"> 
          <label for="2">2</label> 
          <input type="radio" id="" class="radioButtonAction" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="3"> 
          <label for="3">3</label> 
          <input type="radio" id="" class="radioButtonAction" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="4"> 
          <label for="4">4</label> 
          <input type="radio" id="" class="radioButtonAction" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="5"> 
          <label for="5">5</label> 
        </div> 
        
  <label title="informacao"/></label>    
         <div class="radioButtonOptions importanciaRapidez" value="">
         <p>Você acha que a rapidez na obtenção da informação é importante? </p> 
          <input type="radio" id="" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="1"> 
          <label for="1">1</label> 
          <input type="radio" id="" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="2"> 
          <label for="2">2</label> 
          <input type="radio" id="" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="3"> 
          <label for="3">3</label> 
          <input type="radio" id="" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="4"> 
          <label for="4">4</label> 
          <input type="radio" id="" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="5"> 
          <label for="5">5</label> <br>
        </div> 
        
        	<div>
        	Para você, qual a relação dele com o giro de estoque do produto?<br>
        	<input type="checkbox" id="relacao_impacta" value="0"> Impacta em como eu enxergo meu estoque e as estratégias relacionadas a ele<br>
        	<input type="checkbox" id="relacao_aumenta" value="1"> Aumenta meu controle sobre o ciclo de vida do produto<br>
        	<input type="checkbox" id="relacao_naoha" value="2"> Não tem nada a ver com giro de estoque
        	  
	 		 </div>
      
      <label title="dados"/></label>    
         <div class="radioButtonOptions confiabilidade" value="">
         Sobre a metodologia tradicional de obtenção de dados em precificação, quão confiáveis são estas informações?<br>
          <input type="radio" id="" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="MUITO_CONFIAVEL"> 
          <label for="1">Muito confiáveis</label><br>
          <input type="radio" id="" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="CONFIAVEL"> 
          <label for="2">Confiáveis</label> <br>
          <input type="radio" id="" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="POUCO_CONFIAVEL"> 
          <label for="3">Pouco confiáveis</label> <br>
          <input type="radio" id="" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="NAO_SEI"> 
          <label for="4">Não sei</label> <br>
          <input type="radio" id="" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="DESCONHECE_TOTALMENTE"> 
          <label for="5">Como assim metodologia tradicional? Existe outra?</label> <br>
        </div> 
        
        <div>
        	Destas empresas de obtenção de dado, quais você conhece ou já ouviu falar?<br>
        	<input type="checkbox" class="empresasConhecidas" value="InfoPrice">InfoPrice<br>
        	<input type="checkbox" class="empresasConhecidas" value="Nielsen">Nielsen<br>
        	<input type="checkbox" class="empresasConhecidas" value="Kantar World Panel">Kantar World Panel<br>
       	  <input type="checkbox" class="empresasConhecidas" value="Outro">Outro<br>  
	 		 </div>
      
      <label title="varejo"/></label>    
         <div class="radioButtonOptions relacaoVarejo" value="">
         Qual a sua ligação com varejo?<br>
          <input type="radio" id="" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="TRABALHA"> 
          <label for="1">Trabalho com isso</label><br>
          <input type="radio" id="" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="ESTUDA"> 
          <label for="2">Estudo isso</label> <br>
          <input type="radio" id="" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="CONSUMIDOR"> 
          <label for="3">Só vou ao mercado mesmo</label> <br>

        </div> 
        
        <label title="assunto"/></label>    
         <div class="radioButtonOptions vontadeAprender" value="">
         Independente do seu grau de conhecimento sobre Varejo 2.0, você gostaria de aprender um pouco mais sobre o assunto?<br>
          <input type="radio" id="" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="SIM"> 
          <label for="1">Sim</label><br>
          <input type="radio" id="" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="TALVEZ"> 
          <label for="2">Talvez</label> <br>
          <input type="radio" id="" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="NAO"> 
          <label for="3">Não</label> <br>
        </div> 
        <div>
          <input type="submit" name="teste">
        </div>

      </div>

      </div>

    </form>
  </body>
</html>/