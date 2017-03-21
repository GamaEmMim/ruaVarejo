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
  <link rel="stylesheet" type="text/css" href="/css/pesquisa.css">
  <script src="/js/pesquisa.js"></script>
</head>

<body style="font-size: 18px">
  <?php require(__DIR__."/components/navigator.html"); ?>
  <?php require(__DIR__."/components/page_header.html");?>
  <div class="container">
    <div class="successMessage" style="display: none;">
      <h3>Pesquisa recebida com sucesso. Muito obrigado pela participação!</h3>
    </div>
    <div class="col-md-12 pesquisaForm">
      <h1>PESQUISA VAREJO 2.0</h1>
      <h2>Esta pesquisa busca entender qual o grau de importância do Varejo 2.0 e como ele está relacionado às diferentes etapas no processo de vendas.</h2>
      <form style="display: inline;">
        <div>
          <input type="text" id="pesquisa_name" placeholder="nome">
          <input type="text" id="pesquisa_lastname" placeholder="sobrenome">
        </div>


        <div>
          <input type="email" id="pesquisa_email" placeholder="e-mail profissional">
        </div>


        <div class="sectionMarginBottom">
          <input type="text" id="pesquisa_empresa" placeholder="empresa">
        </div>


        <div class="radioButtonOptions ramoEmpresa sectionMarginBottom" value="">
          <p><b>Categoria da Empresa</b></p>
          <input type="radio" name="tipoComercio" id="pesquisa_varejo" class="radioButtonAction" target="ramoEmpresa" value="VAREJO">
          <label for="pesquisa_varejo">varejo</label>
          <input type="radio" name="tipoComercio" id="pesquisa_industria" class="radioButtonAction" target="ramoEmpresa" value="INDUSTRIA">
          <label for="pesquisa_industria">indústria</label>
          <input type="radio" name="tipoComercio" id="pesquisa_outro" class="radioButtonAction" target="ramoEmpresa" value="OUTROS">
          <label for="pesquisa_outro">outro</label>
        </div>


        <div class="radioButtonOptions varejo_2_0 sectionMarginBottom" value="">
          <p><b>Você sabe o que é Varejo 2.0?</b></p> 
          <input type="radio" class="radioButtonAction" id="pesquisa_var_sim" name="varejo_2_0" target="varejo_2_0" value="true"> 
          <label for="pesquisa_var_sim">Sim</label> 
          <input type="radio" class="radioButtonAction" id="pesquisa_var_nao" name="varejo_2_0" target="varejo_2_0" value="false"> 
          <label for="pesquisa_var_nao">Não</label> 
        </div>

        <div class="sectionMarginBottom centralizeText">
          <i>Para as duas perguntas abaixo, considere 1 como pouco importante e 5 como muito importante</i>
        </div>

        <div class="radioButtonOptions importancia_varejo_2_0 sectionMarginBottom" value="">
          <p><b>Para você, qual o grau de importância do varejo 2.0 para análise de concorrência?</b></p>
          <input type="radio" class="radioButtonAction" id="pesq_imp_var_1" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="1"> 
          <label for="pesq_imp_var_1">1</label> 
          <input type="radio" class="radioButtonAction" id="pesq_imp_var_2" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="2"> 
          <label for="pesq_imp_var_2">2</label> 
          <input type="radio" class="radioButtonAction" id="pesq_imp_var_3" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="3"> 
          <label for="pesq_imp_var_3">3</label> 
          <input type="radio" class="radioButtonAction" id="pesq_imp_var_4" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="4"> 
          <label for="pesq_imp_var_4">4</label> 
          <input type="radio" class="radioButtonAction" id="pesq_imp_var_5" name="importancia_varejo_2_0" target="importancia_varejo_2_0" value="5"> 
          <label for="pesq_imp_var_5">5</label> 
        </div>


        <div class="radioButtonOptions importanciaRapidez sectionMarginBottom" value="">
           <p><b>Você acha que a rapidez na obtenção da informação é importante?</b></p> 
           <input type="radio" id="pesq_rapidez_var_1" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="1"> 
           <label for="pesq_rapidez_var_1">1</label> 
           <input type="radio" id="pesq_rapidez_var_2" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="2"> 
           <label for="pesq_rapidez_var_2">2</label> 
           <input type="radio" id="pesq_rapidez_var_3" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="3"> 
           <label for="pesq_rapidez_var_3">3</label> 
           <input type="radio" id="pesq_rapidez_var_4" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="4"> 
           <label for="pesq_rapidez_var_4">4</label> 
           <input type="radio" id="pesq_rapidez_var_5" class="radioButtonAction" name="importanciaRapidez" target="importanciaRapidez" value="5"> 
           <label for="pesq_rapidez_var_5">5</label> <br>
         </div>


         <div class="sectionMarginBottom">
           <p><b>Para você, qual a relação dele com o giro de estoque do produto?</b></p>
           <div>
             <input type="checkbox" id="relacao_impacta" value="0">
             <label class="noBold" for="relacao_impacta">Impacta em como eu enxergo meu estoque e as estratégias relacionadas a ele</label>
           </div>

           <div>
             <input type="checkbox" id="relacao_aumenta" value="1">
             <label class="noBold" for="relacao_aumenta">Aumenta meu controle sobre o ciclo de vida do produto</label>
           </div>

           <div>
             <input type="checkbox" id="relacao_naoha" value="2">
             <label class="noBold" for="relacao_naoha">Não tem nada a ver com giro de estoque</label>
           </div>
         </div>

         <div class="radioButtonOptions confiabilidade sectionMarginBottom" value="">
           <p><b>Sobre a metodologia tradicional de obtenção de dados em precificação, quão confiáveis são estas informações?</b></p>
           <div>
             <input type="radio" id="pesq_conf_var_1" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="MUITO_CONFIAVEL"> 
             <label class="noBold" for="pesq_conf_var_1">Muito confiáveis</label>
           </div>

           <div>
             <input type="radio" id="pesq_conf_var_2" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="CONFIAVEL"> 
             <label class="noBold" for="pesq_conf_var_2">Confiáveis</label>
           </div>

           <div>
             <input type="radio" id="pesq_conf_var_3" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="POUCO_CONFIAVEL"> 
             <label class="noBold" for="pesq_conf_var_3">Pouco confiáveis</label>
           </div>

           <div>
             <input type="radio" id="pesq_conf_var_4" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="NAO_SEI"> 
             <label class="noBold" for="pesq_conf_var_4">Não sei</label>
           </div>

           <div>
             <input type="radio" id="pesq_conf_var_5" class="radioButtonAction" name="confiabilidade" target="confiabilidade" value="DESCONHECE_TOTALMENTE"> 
             <label class="noBold" for="pesq_conf_var_5">Como assim metodologia tradicional? Existe outra?</label>
           </div>
         </div>

         <div class="sectionMarginBottom">
           <p><b>Destas empresas de obtenção de dado, quais você conhece ou já ouviu falar?</b></p>
           <div>
             <input type="checkbox" id="pesq_emp_var_1" class="empresasConhecidas" value="InfoPrice">
             <label for="pesq_emp_var_1" class="noBold">InfoPrice</label>
           </div>

           <div>
             <input type="checkbox" id="pesq_emp_var_2" class="empresasConhecidas" value="Nielsen">
             <label for="pesq_emp_var_2" class="noBold">Nielsen</label>
           </div>

           <div>
             <input type="checkbox" id="pesq_emp_var_3" class="empresasConhecidas" value="Kantar World Panel">
             <label for="pesq_emp_var_3" class="noBold">Kantar World Panel</label>
           </div>

           <div>
             <input type="checkbox" id="pesq_emp_var_4" class="empresasConhecidas" value="Outro">
             <label for="pesq_emp_var_4" class="noBold">Outro</label>
           </div>
         </div>

         <div class="radioButtonOptions relacaoVarejo sectionMarginBottom" value="">
           <p><b>Qual a sua ligação com varejo?</b></p>
           
           <div>
             <input type="radio" id="pesq_rel_var_1" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="TRABALHA">
             <label class="noBold" for="pesq_rel_var_1">Trabalho com isso</label>
           </div>
           
           <div>
             <input type="radio" id="pesq_rel_var_2" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="ESTUDA">
             <label class="noBold" for="pesq_rel_var_2">Estudo isso</label>
           </div>
           
           <div>
             <input type="radio" id="pesq_rel_var_3" class="radioButtonAction" name="relacaoVarejo" target="relacaoVarejo" value="CONSUMIDOR">
             <label class="noBold" for="pesq_rel_var_3">Só vou ao mercado mesmo</label>
           </div>
          </div>

          <div class="radioButtonOptions vontadeAprender" value="">
            <p><b>Independente do seu grau de conhecimento sobre Varejo 2.0, você gostaria de aprender um pouco mais sobre o assunto?</b></p>
            <div>
              <input type="radio" id="pesq_aprend_var_1" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="SIM"> 
              <label class="noBold" for="pesq_aprend_var_1">Sim</label>
            </div>

            <div>
              <input type="radio" id="pesq_aprend_var_2" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="TALVEZ"> 
              <label class="noBold" for="pesq_aprend_var_2">Talvez</label>
            </div>

            <div>
              <input type="radio" id="pesq_aprend_var_3" class="radioButtonAction" name="vontadeAprender" target="vontadeAprender" value="NAO"> 
              <label class="noBold" for="pesq_aprend_var_3">Não</label>
            </div>
          </div>

          <div>
            <input class="btn btn-default enviarPesquisa" type="submit" name="send" value="Enviar!">
          </div>
      </form>
    </div>
  </div>
</body>
</html>