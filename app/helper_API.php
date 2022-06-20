<?php

class Helper_API{

    function loginAuth($data)
    {
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "localhost:3000/auth/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => POST,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json"
            ),
            CURLOPT_POSTFIELDS => $data
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
    
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    
}