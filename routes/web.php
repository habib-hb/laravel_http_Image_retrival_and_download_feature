<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {

    // Attempting Data Retrive From External Website
   $response = Http::get('http://127.0.0.1:8080/get_user_name');

    // Check if the request was successful
    if ($response->successful()) {

        // Decode the JSON response into an array
        $data = $response->body();

        $base64_image = base64_encode($data);

        Session::put('base64_image' , $base64_image);

    } else {
        // Handle the error response
        $data = ['error' => 'Failed to retrieve data'];

        $base64_image = null;
    }

    // Pass the data to the view
    return view('welcome', ['base64_image' => $base64_image]);
});
