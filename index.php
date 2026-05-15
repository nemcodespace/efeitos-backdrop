<?php include_once("./dados/dados.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Efeitos backdrop</title>
</head>
<body>
  <div class="container">
    <?php 
      foreach ($notificacoes as $items):?>
      <div class="items">
        <div class="img">
          <img src="<?= $items["img"] ?>" alt="<?= $items["app"] ?>" width="100%">
        </div>
        <div class="text">
          <h2><?= htmlspecialchars($items["app"]) ?></h2>
          <p class="notif"><?= htmlspecialchars(substr($items["text"], 0, 23) . "...") ?></p>
          <div class="mostrarTexto">
            <p><?= htmlspecialchars($items["mais"]) ?></p>
          </div>
        </div>
        <div class="seta" onclick="mostrarTexto()">
          <img src="./icons/seta-expandir.png" alt="seta">
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <script src="js/script.js"></script>
</body>
</html>