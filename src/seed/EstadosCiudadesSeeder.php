<?php
namespace Yarull\Mex_cities;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosCiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //path to sql file
      $sql = __DIR__ . '/estados.sql';
      //collect contents and pass to DB::unprepared
      DB::unprepared(file_get_contents($sql));
  
      $sql = __DIR__ . '/municipios.sql';
      //collect contents and pass to DB::unprepared
      DB::unprepared(file_get_contents($sql));
  
    }
}
