<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use \App\WebService\ViaCEP;

if (isset($_POST['submit'])) {
  $cep = $_POST['cep'];
  if (strlen($cep) == 8) {
    $dadosCEP = ViaCEP::consultarCEP($cep);
    if (!($dadosCEP == null)) {
      $_SESSION['CEP'] = $dadosCEP;

      header('Location: index.php?cep=' . $dadosCEP['cep']);
    } else {
      header('Location: index.php?msgErro=CEP Invalido');
    }
  } else {
    header('Location: index.php?msgErro=Digite seu CEP Corretamente');
  }
}
