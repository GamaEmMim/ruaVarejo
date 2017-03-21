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
  </head>

  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>
    <span class="post">
      <!--Posts e divulgação de ebook-->
      <div class="col-md-9" style="padding-top: 5%; padding-right:10%; padding-left: 10%; padding-bottom: 5%">
        <h1>PESQUISA VAREJO 2.0</h1>
        <h2 style="color:#808080">Esta pesquisa busca entender qual o grau de importância do Varejo 2.0 e como ele está relacionado às diferentes etapas no processo de vendas.</h2>
      <div class="clearfix colelem" id="u12639-32"><!-- content -->

        <div style="width: 50%">
          <p>Nome:<input type="text" name="nome"/></p>
        </div>

        <div style="width: 50%"> 
          <p>Email:<input type="email" name="email" id="email" placeholder="e-mail"> </p>
        </div>
        
         <div style="width: 50%">
          <p>Empresa de atuação:<input type="text" name="empresa"/></p>
        </div>

<label title="ooo"/></label>
        <div class="radioButtonOptions" value="">
         <p>Você sabe o que é Varejo 2.0?</p> 
          <input type="radio" name="tipoComercio" value="Sim"> 
          <label for="varejosim">Sim</label> 
          <input type="radio" name="tipoComercio" value="Nao"> 
          <label for="varejonao">Não</label> 
        </div> 
<label title="concorrencia"/></label>    
         <div class="radioButtonOptions" value="">
         <p>Para você, qual o grau de importância do varejo 2.0 para análise de concorrência? </p> 
          <input type="radio" name="importancia1" value="1"> 
          <label for="1">1</label> 
          <input type="radio" name="importancia2" value="2"> 
          <label for="2">2</label> 
          <input type="radio" name="importancia3" value="3"> 
          <label for="3">3</label> 
          <input type="radio" name="importancia4" value="4"> 
          <label for="4">4</label> 
          <input type="radio" name="importancia5" value="5"> 
          <label for="5">5</label> 
        </div> 
        
  <label title="informacao"/></label>    
         <div class="radioButtonOptions" value="">
         <p>Você acha que a rapidez na obtenção da informação é importante? </p> 
          <input type="radio" name="informacao1" value="1"> 
          <label for="1">1</label> 
          <input type="radio" name="informacao2" value="2"> 
          <label for="2">2</label> 
          <input type="radio" name="informacao3" value="3"> 
          <label for="3">3</label> 
          <input type="radio" name="informacao4" value="4"> 
          <label for="4">4</label> 
          <input type="radio" name="informacao5" value="5"> 
          <label for="5">5</label> 
        </div> 
        
        	<div>
        	Para você, qual a relação dele com o giro de estoque do produto?<br>
        	<input type="checkbox" name="opcao1" value="0"> Impacta em como eu enxergo meu estoque e as estratégias relacionadas a ele<br>
        	<input type="checkbox" name="opcao2" value="1"> Aumenta meu controle sobre o ciclo de vida do produto<br>
        	<input type="checkbox" name="opcao3" value="2"> Não tem nada a ver com giro de estoque
        	  
	 		 </div>

      </div>

      </div>

    </span>
  </body>
</html>/