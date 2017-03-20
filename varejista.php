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
    <link rel="stylesheet" type="text/css" href="/css/varejista.css">
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html"); ?>

      <!--Posts e divulgação de ebook-->
      <div class="container">
      
        <div class="col-md-9">
          <h1>ÁREA DO VAREJISTA</h1>
          <h2>assista este vídeo e descubra as vantagens de fazer parte da nossa agenda-varejista</h2>

          <iframe width="766" height="444" src="https://www.youtube.com/embed/PpmaXDju_7U" frameborder="0" allowfullscreen=""></iframe>

          <h2>Assine nossa newsletter e receba informações essenciais para ficar por dentro do mundo do varejo! É gratuito!</h2>
          <form class="contactForm">
            <div>
              <input type="text" name="name" id="name" placeholder="nome"/>
              <input type="text" name="lastName" id="lastName" placeholder="sobrenome"/>
            </div>
            <div class="radioButtonOptions">
              <input type="radio" name="tipoComercio" id="varejo" value="VAREJO">
              <label for="varejo">varejo</label>
              <input type="radio" name="tipoComercio" id="industria" value="INDUSTRIA">
              <label for="industria">indústria</label>
              <input type="radio" name="tipoComercio" id="outro" value="OUTRO">
              <label for="outro">outro</label>
            </div>
            <div>
              <input type="email" name="email" value="" id="email" placeholder="email-profissional">
            </div>
            <input type="submit" class="btn btn-default signUpButton" value="Inscreva-se!">
          </form>
        </div>
        <div class="col-md-2">
          <div class="row">
            <img src="/images/banner.jpg">
          </div>
        </div>

      </div>

  </body>
</html>