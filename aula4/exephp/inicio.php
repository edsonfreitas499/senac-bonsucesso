<?php require_once("inc/header.php"); ?>

<?php require_once("app.php");?>

<?php
  /*
    Criação de objeto em Array
  */

    $id[] = 1;
    $titulo[] = "1º titulo";
    $img[] = "<img src= img/carro.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 2;
    $titulo[] = "2º titulo";
    $img[] = "<img src= img/car1.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 3;
    $titulo[] = "3º titulo";
    $img[] = "<img src= img/car2.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 4;
    $titulo[] = "4º titulo";
    $img[] = "<img src= img/car4.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 5;
    $titulo[] = "5º titulo";
    $img[] = "<img src= img/car4.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 6;
    $titulo[] = "6º titulo";
    $img[] = "<img src= img/car5.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 7;
    $titulo[] = "7º titulo";
    $img[] = "<img src= img/car6.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true; 
    
    $id[] = 8;
    $titulo[] = "8º titulo";
    $img[] = "<img src= img/car7.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 9;
    $titulo[] = "9º titulo";
    $img[] = "<img src= img/car8.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;

    $id[] = 9;
    $titulo[] = "9º titulo";
    $img[] = "<img src= img/car8.png width=200 height=200/>";
    $texto[] = "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.";
    $ativo[] = true;
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?=NOME_SITE?></title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1><?=NOME_SITE?>!</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1><?=NOME_SITE?>!</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1><?=NOME_SITE?>!</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>


      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

<div class="container">

<?php
  $t = count($id);
  $ql = 0;
  for($i = 0; $i < $t; $i++) {
    if($ativo[$i] == true){
       if($ql == 0) {
?>
          <div class="row">

 <?php
       }
 ?>

            <div class="col-md-4">
                <h2><?=$titulo[$i]?></h2>
               <center> <?=$img[$i]?> </center>
                <p><?=$texto[$i]?><?=substr($texto[$i])?> </p>
                <p><a class="btn btn-secondary" href="detalhe.php?id=<?=$id[$i];?>" role="button">Ver detalhes &laquo;</a></p>
             </div>

             

   <?php
   
        if($ql == 2 ) {
          echo "</div>";
          $ql = 0;
        } else {
              $ql++;
        } 
      }
    }
    
    ?>


   

      </div><!-- /.container -->


      <!-- FOOTER -->
      <?php require_once("inc/footer.php"); ?>

   </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/vendor/holder.min.js"></script>
  </body>
</html>
