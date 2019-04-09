<?php

require "connection.php";
$db = require "queryBuilder.php";


// $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    // $parameters = [
    //     'start' => '1',
    //     'limit' => '5000',
    //     'convert'=> 'USD',
    // ];

    // $headers = [
    //     'Accepts: application/json',
    //     'X-CMC_PRO_API_KEY: 465bf2a1-c1ee-4a70-8aac-5db95007fd63'
    // ];
    // $qs = http_build_query($parameters);
    // $request = "{$url}?{$qs}"; // create the request URL


    // $curl = curl_init(); // Get cURL resource
    // // Set cURL options
    // curl_setopt_array($curl, array(
    //     CURLOPT_URL => $request,            // set the request URL
    //     CURLOPT_HTTPHEADER => $headers,     // set the headers 
    //     CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    // ));
    

    // $json_response = curl_exec($curl);
    // $response = json_decode($json_response); // Send the request, save the response    

    
    // curl_close($curl); // Close request  


    // // check if there is an AJAX request from helper.js
    // if (isset($_GET["query"])) {
    //     echo $json_response;
    // }
?>





