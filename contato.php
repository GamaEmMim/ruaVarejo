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
    <script src="/js/contato.js"></script>
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html"); ?>
    <div class="container">
      <div class="col-md-9" >
        <div class="successMessage" style="display: none;">
          <h1>Mensagem recebida com sucesso. Obrigado!</h1>
        </div>
        <span class="contactFormDiv">
          <h1>CONTATO</h1>
          <h4>Entre em contato conosco caso haja alguma dúvida!</h4>
          <div class="col-md-8">
            <form class="contactForm">
                <div>
                  <input type="text" name="name" id="contact_page_name" placeholder="nome"/>
                  <input type="text" name="lastName" id="contact_page_lastName" placeholder="sobrenome"/>
                </div>
                <div>
                  <input type="text" name="company" id="contact_page_company" placeholder="empresa">
                </div>
                <div>
                  <input type="email" name="email" id="contact_page_email" placeholder="email profissional">
                </div>
                <div>
                  <textarea name="message" id="contact_page_message" placeholder="mensagem"></textarea>
                </div>
                <input type="submit" class="btn btn-default submitButton" value="Enviar!">
              </form>
          </div>
        </span>
      
      </div>
      <div class="col-md-2">
        <div class="row">
          <img src="/images/banner.jpg">
        </div>
      </div>
    </div>
  </body>
</html>