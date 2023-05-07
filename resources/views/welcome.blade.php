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
        @livewire('tabla', ['cabecera' =>[  'ID coordenada' => '10%', 
                                            'ID vehículo' => '10%', 
                                            'fecha y hora' => '15%', 
                                            'latitud' => '10%', 
                                            'longitud' => '10%', 
                                            'estado' => '5%', 
                                            'observaciones' => '20%'],

                            'filtros' => ['id_coordenada' => 'ID coordenada',
                                          'id_vehiculo' => 'ID vehículo',

                                          'est' => 'estado'],
                            'dir' => 'http://localhost/gps/public/api/coordenadas/1/all/pag/3'])
        
        <script src="../resources/js/jquery.slim.min.js"></script>
        <script src="../resources/js/bootstrap.bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
