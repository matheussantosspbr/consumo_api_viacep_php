<?php

namespace App\WebService;

class ViaCEP
{
  /**
   * Método Responsável por consultar um CEP no via CEP
   * @param string $cep
   * @return array
   * */
  public static function consultarCEP($cep)
  {
    $curl = curl_init();

    //Configurações do CURL
    curl_setopt_array($curl, [
      CURLOPT_URL => 'viacep.com.br/ws/' . $cep . '/json/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    $response = curl_exec($curl);


    curl_close($curl);

    $array = json_decode($response, true);

    return isset($array['cep']) ? $array : null;
  }
}
