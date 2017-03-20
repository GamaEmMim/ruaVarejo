<?php require(__DIR__."/components/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=WEBSITE_TITLE?>Inicio</title>
    <?php require(__DIR__."/components/import.html") ?>
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <script src="/js/index.js"></script>
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html");?>

      <!--Posts e divulgação de ebook-->
      <div class="col-md-9">
        <h1>QUER SABER TODAS AS DICAS PARA SE TORNAR UM EXPERT EM VAREJO? BAIXE UM DE NOSSOS E-BOOKS!</h1>
        <div class="row">
          <div class="col-md-5">
            <img class="img-rounded" style="width: 100%; height: 300px" src="/images/blank_ebook.jpg">
          </div>
          <div class="col-md-5">
            <img class="img-rounded" style="width: 100%; height: 300px" src="/images/blank_ebook.jpg">
          </div>
        </div>

        <hr class="divisor">

        <?php require(__DIR__."/components/signup_modal.html"); ?>

        <!-- POSTS -->

        <div class="container">


          <?php for ($i = 0; $i < 10; $i++){ ?>
            <div class="media" style="width: 70%;">
              <div class="media-left">
                <img class="media-object" src="/images/64x64.jpg" width="150px">
              </div>
              <div class="media-body">
                <h4 class="media-heading">
                    apsokdkpoasdkpoaspokdapoksdpokasdkpoaskpodasd
                </h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <a href="">CONTINUE LENDO...</a>
              </div>
            </div>
          <?php } ?>



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