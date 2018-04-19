<?php defined('BASEPATH') OR exit('No direct script access allowed');

class paypal{
  protected $credentials = array(

    'USER'=>'testBusinessHappyMusic_api1.gmail.com',
    'PWD'=>'298GXJ9EFC5UGGW8',
    'SIGNATURE'=>'AxxUedOUhg2mFPwJrOrtWrECrrHwAtXuGvojdYA60f7ogcG.pWCUKIst'

  );

  protected $endPoint = 'https://api-3t.sandbox.paypal.com/nvp';//prod = https://api-3t.paypal.com/nvp

  protected $version ='97';

  public function request($method,$params = array()){

    $CI=& get_instance();//pour utiliser des helpers

    $this->errors = array();

    if(empty($method)){

      $this->errors = array('Method indéfinie');
      return false;

    }else
      $requestParams = array(
        'METHOD'=>$method,
        'VERSION'=>$this->version,
      ) + $this->credentials;// le "+" permet de cumuler un tableaux supplémentaire mais qui en forme un seul

      $request = http_build_query($requestParams + $params);// genrere une chaine en caractere url

      $curlOptions = array(

        CURLOPT_URL=>$this->endPoint,//transmet l'url dans laquel on veut envoyé les données
        CURLOPT_RETURNTRANSFER=>true,//retoune le transfert sous forme de châines
        CURLOPT_POSTFIELDS=> $request
      );
      $ch= curl_init();
      curl_setopt_array($ch,$curlOptions);

      $response = curl_exec($ch);

      if(!curl_errno($ch)){
        curl_close($ch);
        $responseArray = array();
      }
  }

}



?>
