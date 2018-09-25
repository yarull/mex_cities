# mex_cities

#### Installation
`composer require yarull/mex_cities`

#### Add this line to your conf/app.php file

`Yarull\Mex_cities\MexCitiesServiceProvider::class in config/app.php`


php artisan migrate --path=/vendor/yarull/mex_cities/src/migrations

php artisan db:seed --class=Yarull\\\Mex_cities\\\EstadosCiudadesSeeder


