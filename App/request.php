<?php

include __DIR__ . "/../config.php";

use Providers\Classes\Encrypter;

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    $request_url = explode('/', $_SERVER['REQUEST_URI']);
    $action_type = $request_url[count($request_url) - 1];
    $data = trim_string($_POST['data']);
    $encrypter = Encrypter::getInstance();
  
    if($action_type == "encrypt")
    {
        $encrypted_data = $encrypter::encrypt($data);

        $result_set = ['encrypted_text' => $encrypted_data];

        $response = json_encode($result_set);

        echo $response;
    }elseif($action_type == "decrypt"){

        $decrypted_data = $encrypter::decrypt($data);

        $result_set = ['decrypted_text' => $decrypted_data];

        $response = json_encode($result_set);

        echo $response;
    }
}
