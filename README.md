# mex_cities

Install

Register provider Yarull\Mex_cities\MexCitiesServiceProvider::class in config/app.php

php artisan migrate --path=/vendor/Yarull/Mex_cities/src/migrations
php artisan db:seed --class=Yarull\Mex_cities\Seeds\EstadosCiudadesSeeder
