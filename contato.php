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
    <link rel="stylesheet" type="text/css" href="/css/contato.css">
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html"); ?>
    <div class="container">
      <div class="col-md-9">
        <h1>CONTATO</h1>
        <h4>Entre em contato conosco caso haja alguma dúvida!</h4>
        <div class="col-md-8">
          <form class="contactForm">
              <div>
                <input type="text" name="name" id="name" placeholder="nome"/>
                <input type="text" name="lastName" id="lastName" placeholder="sobrenome"/>
              </div>
              <div>
                <input type="text" name="company" id="company" placeholder="empresa">
              </div>
              <div>
                <input type="email" name="email" id="email" placeholder="email profissional">
              </div>
              <div>
                <textarea name="message" id="message" placeholder="mensagem"></textarea>
              </div>
              <input type="submit" class="btn btn-default signUpButton" value="Enviar!">
            </form>
        </div>
      
      </div>
      <div class="col-md-2">
        <div class="row">
          <img src="/images/banner.jpg">
        </div>
      </div>
    </div>
  </body>
</html>