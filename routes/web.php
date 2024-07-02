<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Attempting Data Retrive From External Website
   $response = Http::get('http://127.0.0.1:8080/get_user_name');

    // Check if the request was successful
    if ($response->successful()) {
        // Decode the JSON response into an array
        $data = $response->json();
    } else {
        // Handle the error response
        $data = ['error' => 'Failed to retrieve data'];
    }

    // Pass the data to the view
    return view('welcome', ['data' => $data]);
});
