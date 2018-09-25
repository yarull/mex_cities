# mex_cities

Install

Register provider Yarull\Mex_cities\MexCitiesServiceProvider::class in config/app.php

php artisan migrate --path=/vendor/yarull/mex_cities/src/migrations

php artisan db:seed --class=Yarull\\\Mex_cities\\\EstadosCiudadesSeeder
