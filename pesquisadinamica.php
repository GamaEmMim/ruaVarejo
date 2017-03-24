<?php require(__DIR__."/components/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Rua Varejo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="http://www.ruavarejo.com.br/assets/64x64.jpg" />
</head>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=WEBSITE_TITLE?>Varejista</title>
    <?php require(__DIR__."/components/import.html") ?>
    <link rel="stylesheet" type="text/css" href="/css/pesquisadinamica.css">
    <script src="/js/pesquisadinamica.js"></script>
  </head>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>
    <div class="answer">
      
    </div>

    <div class="content">
      <div>
        <h3>1- O que é mais importante numa estratégia de precificação?</h3>
        <div>
          <input id="din_01_01" type="radio" value="A" name="din_01">
          <label for="din_01_01">Definir o preço</label>
        </div>
        <div>
          <input id="din_01_02" type="radio" value="B" name="din_01">
          <label for="din_01_02">Definir o objetivo</label>
        </div>
        <div>
          <input id="din_01_03" type="radio" value="C" name="din_01">
          <label for="din_01_03">Definir o concorrente </label>
        </div>
      </div>

      <div>
        <h3>2-O que você deve tomar cuidado na definição de preços no varejo offline?</h3>
        <div>
          <input type="radio" value="A" for="din_02" name="din_02" id="din_02_01">
          <label for="din_02_01">subir demais e perder espaço no mercado</label>
        </div>
        <div>
          <input type="radio" value="B" for="din_02" name="din_02" id="din_02_02">
          <label for="din_02_02">promocionar demais e perder rentabilidade</label>
        </div>
        <div>
          <input type="radio" value="C" for="din_02" name="din_02" id="din_02_03">
          <label for="din_02_03">as duas alternativas anteriores</label>
        </div>
      </div>

    <div>
        <h3>
          3-Como você faz a definição de preços do seu negócio?
        </h3>
        
        <div>
          <input type="radio" value="A" name="din_03" id="din_03_01">
          <label for="din_03_01">Sigo o preço sugerido pelo fabricante do produto</label>
        </div>

        <div>
          <input type="radio" value="B" name="din_03" id="din_03_02">
          <label for="din_03_02">
          vejo o preço dos meus concorrentes e estabeleço o meu
          </label>
        </div>

        <div>
          <input type="radio" value="C" name="din_03" id="din_03_03">
          <label for="din_03_03">
          estabeleço meu preço independentemente do meu concorrente 
          </label>
        </div>
      </div>

      <div>
        <h3>
          4-Qual mecanisco que te leva a alcançar maior lucratividade?
        </h3>
        <div>
          <input type="radio" value="A" name="din_04" id="din_04_01">
          <label for="din_04_01">promoções</label>
        </div>
        <div>
          <input type="radio" value="B" name="din_04" id="din_04_02">
          <label for="din_04_02">queima de estoque</label>
        </div>
        <div>
          <input type="radio" value="C" name="din_04" id="din_04_03">
          <label for="din_04_03">verificar o preço do meu concorrente para determinar o meu</label>
        </div>
      </div>

      <div>
        <h3>
          5-Quais são as principais ações de marketing?
        </h3>
        <div>
          <input type="radio" value="A" name="din_05" id="din_05_01">
          <label for="din_05_01">Propaganda em Jornais, Revistas e boca-a-boca</label>
        </div>
        <div>
          <input type="radio" value="B" name="din_05" id="din_05_02">
          <label for="din_05_02">Panfleto, anúncios em Revista e Promoção</label>
        </div>
        <div>
          <input type="radio" value="C" name="din_05" id="din_05_03">
          <label for="din_05_03">Depende do seu público e sua estratégia</label>
        </div>
      </div>

      <input type="submit" class="btn btn-default sendGameButton" value="Enviar!">
    </div>
  </body>
</html>