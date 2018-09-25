<?php

Route::prefix('api')->group(function () {
  Route::get('/estados', 'Yarull\Mex_cities\EstadosController@index');
  Route::get('/municipios','Yarull\Mex_cities\EstadosController@municipio');
  
});