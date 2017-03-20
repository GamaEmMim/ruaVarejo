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
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <script src="/js/index.js"></script>
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>

      <!--Posts e divulgação de ebook-->
      <div class="col-md-9" style="padding-left: 10%">

        <h1>QUER SABER TODAS AS DICAS PARA SE TORNAR UM EXPERT EM VAREJO? BAIXE UM DE NOSSOS E-BOOKS!</h1>
        <div class="row" style="padding-left: 10%">
          <div class="col-md-5">
            <img class="img-rounded" style="width: 100%; height: 300px" src="/images/ebook1.png">
          </div>
          <div class="col-md-5">
            <img class="img-rounded" style="width: 100%; height: 300px" src="/images/ebook2.png">
          </div>
        </div>

        <hr class="divisor">


        <?php require(__DIR__."/components/signup_modal.html"); ?>

        <!-- POSTS -->

        <div class="container">

            <div class="media" style="width: 70%;">
              <div class="media-left">
                <img class="media-object" src="/images/pesquisa-de-preco.png" width="150px" height="150px">
              </div>
              <div class="media-body">
                <h3 class="media-heading" style="color:#0274a6"><b>
                    Pesquisa de preços no varejo</b>
                </h3>
                <p align="justify">Se você tem perdido vendas para o seu concorrente e recebido várias reclamações de clientes usuais sobre os seus preços, talvez você encontre neste post a solução para seus problemas.</p>
                <a href="/pesquisa-de-precos-no-varejo.php">CONTINUE LENDO...</a>
              </div>
            </div>

            <div class="media" style="width: 70%;">
              <div class="media-left">
                <img class="media-object" src="/images/fgts.jpg" width="150px" height="150px">
              </div>
              <div class="media-body">
                <h3 class="media-heading" style="color:#0274a6"><b>
                    Saque em contas inativas do FGTS e sua influência no varejo</b>

                </h3>
                <p align="justify">No mês de dezembro de 2016 o presidente Michel Temer anunciou que liberaria o saque de contas inativas do FGTS até dezembro de 2015. Essa medida é parte de um plano do governo para reaquecer a economia através de uma recomposição de renda para os trabalhadores. </p>
                <a href="/saque-em-contas-inativas-do-fgts-e-sua-influencia-no-varejo.php">CONTINUE LENDO...</a>
              </div>
            </div>

            <div class="media" style="width: 70%;">
              <div class="media-left">
                <img class="media-object" src="/images/chave-do-sucesso.jpg" width="150px" height="150px">
              </div>
              <div class="media-body">
                <h3 class="media-heading" style="color:#0274a6"><b>
                   A chave para o sucesso no varejo</b>
                </h3>
                <p align="justify">Atualmente as decisões de compra da maioria dos consumidores dependem fortemente do ambiente em que a venda acontece, por isso, faz sentido que os varejistas estejam procurando maneiras mais inovadoras de envolver os clientes em todos os pontos de contato, tanto online quanto na loja física.</p>
                <a href="">CONTINUE LENDO...</a>
              </div>
            </div>

            <div class="media" style="width: 70%;">
              <div class="media-left">
                <img class="media-object" src="/images/varejo-em-2017.jpg" width="150px", height="150px">
              </div>
              <div class="media-body">
                <h3 class="media-heading" style="color:#0274a6"><b>
                    O que esperar do Varejo em 2017</b>
                </h3>
                <p align="justify">Se tem algo que está em evidência no mundo, é a mudança do consumidor. O público tem amadurecido seu modelo de compras a cada dia, tornando-se mais exigentes, procurando algo que vá além do lugar-comum. Sendo assim, o mundo do varejo também enfrenta uma nova realidade, de compreender esse novo target para que possa atendê-lo de acordo com seus anseios.</p>
                <a href="/o-que-esperar-do-varejo-em-2017.php">CONTINUE LENDO...</a>
              </div>
            </div>


        </div>

      </div>

      <!--Banner Lateral-->
      <div class="col-md-2">
        <div class="row">
          <img src="/images/banner.jpg">
        </div>
      </div>
    </div>
  </body>
</html>