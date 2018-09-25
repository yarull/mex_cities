# mex_cities

#### Installation
`composer require yarull/mex_cities`

#### Add this line to your conf/app.php file

`Yarull\Mex_cities\MexCitiesServiceProvider::class in config/app.php`

#### Create migrations for data
`php artisan migrate --path=/vendor/yarull/mex_cities/src/migrations`

#### Add States and Cities to database
`php artisan db:seed --class=Yarull\\\Mex_cities\\\EstadosCiudadesSeeder`

#### URLs

`/api/estados`
`/api/municipios`

##### Parameters
```
"q" for name of state or cities in both urls
"estado" for filter cities by state in the second url

```


