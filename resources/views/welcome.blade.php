<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href='css/font.css' rel="stylesheet">
        <link href="css/vuetify.min.css" rel="stylesheet">
</head>
    <body>
        
        <div id="app">
            <dashboard></dashboard>
        </div>
            
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>