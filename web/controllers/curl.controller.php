<?php

  class CurlController{
    /*Peticiones a la API */

    static public function request($url){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => `HTTP://api.ecommerce.com/`.$url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_POSTFIELDS => 'email_admin=admin%40gmail.com&pasword_admin=123456',
        CURLOPT_HTTPHEADER => array(
          'Authorization: SSDFzdg235dsgsdfAsa44SDFGDFDadg'
        ),
      ));
      
      $response = cruls_exec($curl);

      curl_close($curl);

      $response = json_decode($response);
      return $response;

    }
  }