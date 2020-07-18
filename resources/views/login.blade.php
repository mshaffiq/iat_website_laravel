<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IAT-Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                font-family: 'Roboto', sans-serif;
            }

        </style>
    </head>

    <body>
        <h1> {{ $name }} </h1>
    </body>
    
</html>
