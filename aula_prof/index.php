<?php require_once("inc/header.php"); ?>
      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Olá, <?=NOME_SITE?>!</h1>
          <p>Este é um template para um simples marketing ou website informacional. Ele inclui um callout grande (denominado jumbotron) e três conteúdos adicionais. Use-o como um ponto de partida para algo mais peculiar.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
      </div>
      <div class="container">
      
        <?php 
            $ql = 0;
            for($i = 0; $i < count($titulo); $i++) {
                if($ql == 0) {
                    echo "<div class='row'>";
                } 
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/<?=$img[$i]?>" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title"><?=$titulo[$i]?></h5>
                    <p class="card-text"><?=substr($texto[$i], 0, 150);?> ...</p>

                    <p class="card-text"><?=converterPalavras($texto[$i], 10);?> ...</p>

                    <a href="detalhes.php?id=<?=$i?>" class="btn btn-primary">Visitar</a>
                </div>
            </div>
        </div>
        
        <?php 
                if($ql == 2 || $i == (count($titulo) - 1)) {
                    echo "</div>";
                    $ql = 0;
                } else {
                    $ql++;
                }
            }
        ?>
        
        <hr>
      </div> <!-- /container -->
<?php include_once("inc/footer.php"); ?>
    
