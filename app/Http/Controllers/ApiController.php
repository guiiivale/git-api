<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function makeRequest(string $token,  array $body, string $type, string $url) : array
    {
        $curl = curl_init();

        $header = [
            'Accept: application/vnd.github+json',
            'Authorization: Bearer ' . $token,
            'Cookie: logged_in=no',
            'User-Agent: PHP'
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => json_encode($body),
        ));

        if($type == 'GET'){
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => $header
            ));
        }

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        if ($err) {
            return ['error' => $err];
        }

        $response_decoded = json_decode($response, true);
    
        try{
            return $response_decoded;
        }
        catch(\Exception $e){
            return ['error' => $e->getMessage()];
        }
    }
}
