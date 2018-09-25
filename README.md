# mex_cities

Install

Register provider yarull\mex_cities\MexCitiesServiceProvider::class in config/app.php

php artisan migrate --path=/vendor/yarull/mex_cities/src/migrations

php artisan db:seed --class=yarull\mex_cities\Seeds\EstadosCiudadesSeeder
