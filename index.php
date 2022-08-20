<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="App/assets/style.css">
  <title>Consultas de CEP'S</title>
</head>

<body>
  <main>
    <form action="consulta.php" method="POST">
      <Label><strong>Nome :</strong></Label>
      <input type="number" name="cep" id="cep" placeholder="12345678">
      <input type="submit" name="submit" id="enviar">
    </form>
    <?php
    if (isset($_GET['cep'])) {
    ?>
      <ul id="campos">
        <li>
          CEP : <?php print_r($_SESSION['CEP']['cep']); ?>
        </li>
        <li>
          Logradouro : <?php print_r($_SESSION['CEP']['logradouro']); ?>
        </li>
        <li>
          Complemento : <?php print_r($_SESSION['CEP']['complemento']); ?>
        </li>
        <li>
          Bairro : <?php print_r($_SESSION['CEP']['bairro']); ?>
        </li>
        <li>
          Localidade : <?php print_r($_SESSION['CEP']['localidade']); ?>
        </li>
        <li>
          UF : <?php print_r($_SESSION['CEP']['uf']); ?>
        </li>
        <li>
          DDD : <?php print_r($_SESSION['CEP']['ddd']); ?>
        </li>
        <li>
          IBGE : <?php print_r($_SESSION['CEP']['ibge']); ?>
        </li>

      </ul>
    <?php
    } else {
    ?>
      <p id="erro"><?php print_r($_GET['msgErro']); ?></p>
    <?php

    }
    ?>
  </main>
</body>

</html>