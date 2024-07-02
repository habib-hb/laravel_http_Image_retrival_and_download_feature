<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50" style="background-color: rgb(17, 24, 39); color: rgb(209, 213, 219);">
            <h1>This is where I will show all the api data :)</h1>
            @if(isset($data['name']))
            <p>User Name: {{ $data['name'] }}</p>
        @elseif(isset($data['error']))
            <p>Error: {{ $data['error'] }}</p>
        @else
            <p>No data available.</p>
        @endif
    </body>
</html>
