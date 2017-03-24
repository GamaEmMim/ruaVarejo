<?php require(__DIR__."/components/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=WEBSITE_TITLE?>Varejista</title>
    <?php require(__DIR__."/components/import.html") ?>
    <link rel="stylesheet" type="text/css" href="/css/pesquisadinamica.css">
    <script src="/js/pesquisadinamica.js"></script>
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>
    <div>
      <div>
        <h3>1- O que é mais importante numa estratégia de precificação?</h3>
        <div>
          <input id="din_01_01" type="radio" name="quantidade">
          <label for="din_01_01">Definir o preço</label>
        </div>
        <div>
          <input id="din_01_02" type="radio" name="foco">
          <label for="din_01_02">Definir o objetivo</label>
        </div>
        <div>
          <input id="din_01_03" type="radio" name="">
          <label for="din_01_03">Definir o concorrente </label>
        </div>
      </div>

      <div>
        <h3>2-O que você deve tomar cuidado na definição de preços no varejo offline?</h3>
        <div>
          <input type="radio" id="din_02_01">
          <label>subir demais e perder espaço no mercado</label>
        </div>
        <div>
          <input type="radio" id="din_02_02">
          <label>promocionar demais e perder rentabilidade</label>
        </div>
        <div>
          
        </div>
        <input type="radio" id="din_02_03">
        <label>as duas alternativas anteriores</label>
      </div>

    <div>
        <h3>
          3-Como você faz a definição de preços do seu negócio?
        </h3>
        
        <div>
          <input type="radio" class="centralizeText centralizeText highlightedText" id="din_03_4" name="">
          <label>Sigo o preço sugerido pelo fabricante do produto</label>
        </div>

        <div>
          <input type="radio" id="din_03_5" name="">
          <label>
          vejo o preço dos meus concorrentes e estabeleço o meu
          </label>
        </div>

        <div>
          <input type="radio" id="din_03_6" name="">
          <label>
          estabeleço meu preço independentemente do meu concorrente 
          </label>
        </div>
      </div>

      <div>
        <h3>
          4-Qual mecanisco que te leva a alcançar maior lucratividade?
        </h3>
        <div>
          <input type="radio" id="#vid_name="">
          <label>promoções</label>
        </div>
        <div>
          <input type="radio" id="#vid_name="">
          <label>queima de estoque</label>
        </div>
        <div>
          <input type="radio" id="#vid_name="">
          <label>verificar o preço do meu concorrente para determinar o meu</label>
        </div>
      </div>

      <div>
        <h3>
          5-Quais são as principais ações de marketing?
        </h3>
        <div>
          <input type="radio" name="">
          <label>Propaganda em Jornais, Revistas e boca-a-boca</label>
        </div>
        <div>
          <input type="radio" name="">
          <label>Panfleto, anúncios em Revista e Promoção</label>
        </div>
        <div>
          <input type="radio" name="">
          <label>Depende do seu público e sua estratégia</label>
        </div>
      </div>

      <input type="submit" class="btn btn-default sendButton" value="Enviar!">
    </div>
  </body>
</html>