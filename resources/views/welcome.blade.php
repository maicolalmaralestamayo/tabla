<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 9.x + Livewire</title>
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">

        @livewireStyles
    </head>
    <body>
        @livewire('tabla', ['cabecera' =>[ 'ID coordenada', 'ID vehículo', 'fecha y hora', 'latitud', 'longitud', 'estado', 'observaciones'],
                            'filtros' => ['id_coordenada' => 'ID coordenada',
                                          'id_vehiculo' => 'ID vehículo'],
                            'dir' => 'http://localhost/gps/public/api/coordenadas/1/all'])
        
        <script src="../resources/js/jquery.slim.min.js"></script>
        <script src="../resources/js/bootstrap.bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
