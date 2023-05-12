<?php

class Recaptcha_model extends CI_Model
{
    public function verify($response)
    {
        $secret_key = '6Le17vglAAAAAO_90EPrhIVeMwVAjEz8nIRPPWNw'; // Replace with your secret key
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $data = [
            'secret' => $secret_key,
            'response' => $response
        ];

        $options = [
            'http' => [
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success = json_decode($verify);

        return $captcha_success->success;
    }
}
