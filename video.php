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
    <link rel="stylesheet" type="text/css" href="/css/video.css">
    <script src="/js/video.js"></script>
  </head>
  <body>
    <?php require(__DIR__."/components/navigator.html"); ?>
    <?php require(__DIR__."/components/page_header.html"); ?>
    <div class="videoContent">
      <h1>Assista nossa entrevista com a <b class="highlightedText">Ana Beatriz</b> sobre o <b class="highlightedText">Mercado Varejista</b>!</h1>
      <div class="signUpRequired">
        <h3>Este vídeo é exclusivo para usuários cadastrados. Clique <a class="signUpBeforeVideo" href="#">aqui</a> para se cadastrar <b class="highlightedText">gratuitamente</b>!</h1>
      </div>
      <!--Hiagor-->
      <!-- alterar o código 0E00Zuayv9Q pelo código do vídeo que você upar no YouTube -->
      <div class="youtubeFrame"><iframe src="https://www.youtube.com/watch?v=JD8yzeV2GK4&feature=youtu.be" allowfullscreen></iframe></div>
    </div>
  </body>
</html>
